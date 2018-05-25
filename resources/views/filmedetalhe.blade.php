@extends('layouts.master')

@section('content')
<!-- Purple Header -->
<div class="edge-header deep-purple"></div>
    
    <!-- Main Container -->
<div class="container free-bird">
    <div class="row">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4">

            <!--Card image-->
            <div class="view overlay">
                <img src="{{Storage::url($filme->headerImgPath)}}" class="img-fluid">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body text-center">
                <!--Title-->                                              
                <a href="{{route('editaFilmeAdmin', ['id' => $filme->idFilme])}}"><button type="button" class="btn-floating btn-primary btn-sm" style="border-width:0px;position:absolute; top:0; right:0;" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil"></i></button></a>  
                <a href="{{route('deletaFilmeAdmin', ['id' => $filme->idFilme])}}"><button type="button" class="btn-floating btn-primary btn-sm" style="border-width:0px;position:absolute; top:0; right:5%;" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-times"></i></button></a>
                <h4 class="card-title"><strong>{{$filme->nome}}</strong></h4>                
                <p class="card-text text-left">{{$filme->sinopse}}</p>
                <p class="card-text text-left">Tipo: {{$filme->tipo}}<br>
                Dirigido por: {{$filme->diretor}}<br>
                Duração: {{$filme->duracaoMinutos}} minutos<br>
                Classificação indicativa: {{$filme->classificacao}}</p>
                <h4 class="card-title"><strong>Sessões</strong></h4> 
                <!--Table-->
                <table class="table table-striped table-responsive-lg btn-table">
                    <tbody>
                    @foreach($sessoes as $dia)
                        <tr class="full-border">
                            <td class="borderless">{{$dia[0]->diasemana}}</td>
                            @foreach($dia as $sessao)
                            <td class="borderless">                                
                                <button type="button" id="{{$sessao->idSessao}}" data-horario="{{$sessao->horario->horarioformatado}}" data-sala="{{$sessao->sala->nome}}" data-valor="{{$sessao->valorAssento}}" name="sessao" class="btn btn-primary btn-rounded btn-sm my-0">{{$sessao->horario->horarioformatado}}</button>
                            </td>                                                      
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                    <!--Table body-->

                </table>
                <!--Table-->

            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->
    </div>
</div>
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="lineModalLabel">Comprar</h3>
			</div>
			<div class="modal-body">
			    <!-- Steps starts here -->
			<div class="requestwizard">
				<div class="requestwizard-row setup-panel">
					<div class="requestwizard-step">
			            <a href="#step-1" type="button" class="btn btn-primary btn-circle"><i class="fas fa-couch my-fa" style="padding-top: 8px;"></i></a>
			            <p>Escolha de Assentos</p>
			        </div>			
					<div class="requestwizard-step">
			            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle" disabled="disabled"><i class="fa fa-ticket my-fa"></i></a>
			            <p>Ingressos</p>
			        </div>		
			        <div class="requestwizard-step">
			            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle" disabled="disabled"><i class="fa fa-credit-card my-fa"></i></a>
			            <p>Meio de Pagamento</p>
			        </div>
		    	</div>
			</div>	
	<form role="form">
	    <div class="row setup-content" id="step-1">
	        <div class="col-md-12">
	            <div class="col-md-12 sub-form needs-validation" style="text-align:center">	
					<div class="rectangle"></div>
					<div id="erro" class="invalid-feedback bigger">Máximo de 4 assentos por compra!</div>
					<br>
					<div class="form-group row">
						<br>
						<label for="valorAssento" class="col-sm-5 col-form-label">Valor por Assento:</label>
						<div class="col-md-7">
						<input type="text" readonly class="form-control-plaintext" id="valorAssento">
						</div>
					</div>
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
	            </div>
	        </div>
	    </div>
	    <div class="row setup-content" id="step-2">
	        <div class="col-md-12">
	            <div class="col-md-12 sub-form needs-validation">
	                <div class="form-group">
	                    <label class="control-label">Sala</label>
	                    <input maxlength="200" id="sala" name="sala" type="text" class="form-control" readonly/>
	                </div>
	                <div class="form-group">
	                    <label class="control-label">Horário</label>
	                    <input maxlength="200" id="horario" name="horario" class="form-control" readonly/>
					</div>
					<div class="list-group">
					<label class="control-label">Quais destes assentos são meia-entrada ?</label>
					</div>
					<div class="form-group row">
						<br>
						<label for="valorTotal" class="col-sm-2 col-form-label">Total:</label>
						<div class="col-md-10">
						<input type="text" readonly class="form-control-plaintext" id="valorTotal" name="valorTotal">
						</div>
					</div>
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>
					<button class="btn btn-blue-grey prvsBtn btn-lg pull-left" type="button" >Voltar</button>
	            </div>
	        </div>
	    </div>	   
		<div class="row setup-content" id="step-3">
	        <div class="col-md-12">
	            <div class="col-md-12 sub-form needs-validation">
	                <div class="form-group">
	                    <label class="control-label">Número do Cartão</label>
	                    <input  maxlength="100" type="text" class="form-control" id="cc" name="cc" required/>
					</div>
					<div class="form-row">						
						<div class="form-group col-md-3">
							<label class="control-label">Mês</label>
							<input maxlength="100" type="text" class="form-control" placeholder="MM" id="mesValidade" name="mesValidade" required/>
						</div>
						<div class="form-group col-md-3">
							<label class="control-label">Ano</label>
							<input maxlength="100" type="text" class="form-control" placeholder="AAAA" id="anoValidade" name="anoValidade" required/>
						</div>
						<div class="form-group col-md-3 offset-3">
							<label class="control-label">Código</label>
							<input maxlength="100" type="text" class="form-control" placeholder="123" id="codigo" name="codigo" required/>
						</div>
					</div>	                
					<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Comprar</button>
					<button class="btn btn-blue-grey prvsBtn btn-lg pull-left" type="submit" >Voltar</button>
	            </div>
	        </div>
	    </div> 
	</form>


<!-- Form ends here -->
		</div>
	</div>
</div>
</div>
@stop

@section('script')
<script src="{{ URL::asset('js/modalform.js') }}"></script>
<script type="text/javascript">
    $(function () {
		$('[data-toggle="tooltip"]').tooltip()
    })
</script>
@stop