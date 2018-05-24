$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),            
            sessoes = $('button[name=sessao]');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.attr('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-info');
            $item.removeClass('btn-info').removeClass('btn-blue-grey').addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(event){        
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            curForm = curStep.find('div.col-md-12.sub-form')
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

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
                nextStepWizard.removeAttr('disabled').trigger('click');
            }

    });

    sessoes.click(function(){
        var idSessao = $(this).attr('id');
        $.ajax({
            url: '/sessoes/assentos',
            type: 'GET',
            data:{
                id: idSessao
            },
            success: function(response){
                $.each(response,function(i, assento){
                    var formAssento = $('#step-1').find('div.col-md-12.sub-form');
                    var assentoDisp = $('<span class="dot available"></span>');
                    var assentoIndisp = $('<span class="dot unavailable"></span>');
                    if(assento.pivot.disponivel){
                        var elementoHtml = assentoDisp.prependTo(formAssento);
                        elementoHtml.click(function(){
                            assento = $(this);
                            if (assento.hasClass('selected')){
                                assento.removeClass('selected');
                            }else{
                                assento.addClass('selected');
                            }
                        })
                    }else{
                        var elementoHtml = assentoIndispisp.prependTo(formAssento);
                    }               
                });
            }
        }).done(function(){
            $('#modalForm').modal('show');
        });
    })

    $('div.setup-panel div a.btn-info').trigger('click');
});


function AssentoOnClick(assento){
    
}