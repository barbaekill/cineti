$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrvsBtn = $('.prvsBtn'),   
            assentosSelecionados = [],
            sessoes = $('button[name=sessao]');

    allWells.hide();
    $('#step-1').show();

    allPrvsBtn.click(function(e){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prvsStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a")

        var $target = $($(prvsStepWizard).attr('href')),
            $item = $(prvsStepWizard);

            navListItems.removeClass('btn-primary').addClass('btn-info');
            $item.removeClass('btn-info').removeClass('btn-blue-grey').addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
    });

    navListItems.click(function (e) {
        e.preventDefault();
        // var $target = $($(this).attr('href')),
        //     $item = $(this);

        // if (!$item.attr('disabled')) {
        //     navListItems.removeClass('btn-primary').addClass('btn-info');
        //     $item.removeClass('btn-info').removeClass('btn-blue-grey').addClass('btn-primary');
        //     allWells.hide();
        //     $target.show();
        //     $target.find('input:eq(0)').focus();
        // }
    });

    allNextBtn.click(function(event){        
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            curForm = curStep.find('div.col-md-12.sub-form'),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            valorAssento = $('#valorAssento').val();
            isValid = true;

            if(curStepBtn === "step-1"){
                if(assentosSelecionados.length === 0){
                    $('#erro').text("Selecione um ou mais assentos para prosseguir!")
                        .show(300)
                        .delay(3000)
                        .hide(300);
                    return;
                }

                valorAssento = valorAssento.substring(2, valorAssento.length);
                var valorTotal = parseFloat(assentosSelecionados.length * valorAssento).toFixed(2);
                $('#valorTotal').val('R$'+valorTotal);
                var nextStepList = $('#step-2').find('.list-group');
                nextStepList.find('.list-group-item-action').remove();
                $.each(assentosSelecionados,function(i,assento){
                    var item = $('<button type="button" class="list-group-item list-group-item-action">Assento '+ assento.linha +'-'+ assento.coluna +'</button>');
                    item = item.appendTo(nextStepList);
                    item.click(function(){
                        index = assentosSelecionados.findIndex(obj => obj.idAssento === assento.idAssento);
                        itemAssento = $(this);
                        if(itemAssento.hasClass('active')){
                            assentosSelecionados[index].meia = 0
                            itemAssento.removeClass('active');
                        }else{
                            assentosSelecionados[index].meia = 1
                            itemAssento.addClass('active');
                        }

                        var novoValor = 0;
                        $.each(assentosSelecionados,function(i,assento){
                            if(assento.meia){
                                novoValor += parseFloat(valorAssento/2);
                            }else{
                                novoValor += parseFloat(valorAssento);
                            }
                        });

                        $('#valorTotal').val('R$'+novoValor.toFixed(2));
                    });
                });
            }

            var invalidElements = [];
            curForm.find('input[type=text],select').each(function(){
                if(!this.checkValidity()){
                        invalidElements.push(this);
                }
            });

            if (invalidElements.length) {
                event.preventDefault();
                event.stopPropagation();                
                curForm.removeClass('needs-validation').addClass('was-validated');
            }else{
                curForm.removeClass('needs-validation').addClass('was-validated');
                nextStepWizard.removeAttr('disabled')
                var $target = $($(nextStepWizard).attr('href')),
                $item = $(nextStepWizard);

                navListItems.removeClass('btn-primary').addClass('btn-info');
                $item.removeClass('btn-info').removeClass('btn-blue-grey').addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();        
            }
        });

    sessoes.click(function(event){
        var button = $(this);
        var idSessao = button.attr('id');
        $.ajax({
            url: '/sessoes/assentos',
            type: 'GET',
            data:{
                id: idSessao
            },
            success: function(response){
                $.each(response,function(i, assento){
                    var formAssento = $('#step-1').find('div.col-md-12.sub-form');
                    var assentoDisp = $('<span class="dot available" data-toggle="tooltip" data-placement="top" title="'+ assento.linha +'-'+ assento.coluna +'"></span>');
                    var assentoIndisp = $('<span class="dot unavailable"></span>');
                    var elementoHtml;
                    if(assento.pivot.disponivel){
                        elementoHtml = assentoDisp.prependTo(formAssento);
                        elementoHtml.click(function(){
                            var assentoHtml = $(this);
                            if (assentoHtml.hasClass('selected')){
                                assentoHtml.removeClass('selected');
                                assentosSelecionados.pop(assento);
                            }else{                                
                                if(assentosSelecionados.length === 4){
                                    $('#erro').text("Máximo de 4 assentos por compra!")
                                        .show(300)
                                        .delay(3000)
                                        .hide(300);                            
                                }else{
                                    assentoHtml.addClass('selected');
                                    assentosSelecionados.push(assento);
                                }
                                
                            }
                        })
                    }else{
                        var elementoHtml = assentoIndispisp.prependTo(formAssento);
                    }
                    
                    if(i % 16 === 0){
                        $(elementoHtml).after('<br>');
                    }
                });
            }
        }).done(function(){
            var horario = button.data('horario');
            var sala = button.data('sala');
            var valor = button.data('valor');  
            var modal = $('#modalForm');
            modal.find('#sala').val(sala);
            modal.find('#horario').val(horario);
            modal.find('#valorAssento').val('R$' + valor);
            modal.find('#idSessao').val(idSessao);
            modal.modal('show');
            $('[data-toggle="tooltip"]').tooltip();
        });
    })

    
    $('#modalForm').on('hidden.bs.modal', function (e) {
        $('.dot').remove();
        $('br','#step-1').remove();
        assentosSelecionados.length = 0;
    })      

    $('#formCompra').submit(function(){
        var assentos = [];
        $.each(assentosSelecionados,function(i,assento){
            assentos.push({
                idAssento:assento.idAssento,
                meia:assento.meia
            })
        });
        var formData ={
            'assentos' : assentos,
            'valorTotal' : $('#valorTotal').val().substring(2),
            'idSessao' : $('#idSessao').val(),
            'idCliente' : $('#idCliente').val(),
            'numeroCartao' : $('#numeroCartao').val(),
            'mesValidade' : $('#mesValidade').val(),
            'anoValidade' : $('#anoValidade').val(),
            'codigoSeguranca' : $('#codigoSeguranca').val()
        }

        $.ajax({
            type        : 'POST',
            headers: {'X-CSRF-TOKEN': $('#token').val()},
            url         : '/compra/novo',
            data        : JSON.stringify(formData), 
            contentType : "application/json",
            processData: false
        }).done(function(response){
            console.log(response);
        })

        event.preventDefault();
    })

    $('div.setup-panel div a.btn-info').trigger('click');
});