@extends('layouts.master')

@section('content')
    <!-- Purple Header -->
    <div class="edge-header deep-purple"></div>
    
    <!-- Main Container -->
<div class="container free-bird">
    <div class="row">
        <!--Card-->
        <div class="card card-cascade wider reverse my-4 mx-auto">
           
            <!--Card content-->
            <div class="card-body">
                <!-- Default form register -->
                {!! Form::model($filme, ['route' => 'alteraFilmeAdmin', 'method' => 'put','class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formCria', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Grid row -->
                        <!-- Default input -->
                    <h3 class="dark-grey-text text-center">
                    <strong>Alterar Filme</strong>
                    </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome">Título</label>
                        {!! Form::text('nome', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                        {!! Form::hidden('idFilme') !!}
                    </div>        
                    <!-- Grid row -->                                    
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="nomeOriginal">Título Original</label>
                        {!! Form::text('nomeOriginal', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                    </div>
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Default input -->
                        <div class="form-group col-md-7">
                            <label for="diretor">Diretor</label>
                            {!! Form::text('diretor', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-3">
                            <label for="tipo">Tipo</label>
                            {!! Form::text('tipo', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                        </div>    
                        <div class="form-group col-md-2">
                            <label for="anoLancamento">Ano</label>
                            {!! Form::text('anoLancamento', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                        </div>                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="classificacao">Classificação Indicativa</label>
                            {!! Form::select('classificacao',['0' => 'Livre',
                                                              '10' => 'Não recomendado para menores de dez anos',
                                                              '12' => 'Não recomendado para menores de doze anos',
                                                              '14' => 'Não recomendado para menores de catorze anos',
                                                              '16' => 'Não recomendado para menores de dezesseis anos',
                                                              '18' => 'Não recomendado para menores de dezoito anos'
                                                            ],null,['class' => 'form-control'])
                             !!}                            
                        </div>
                        <div class="form-group col-md-3">
                            <label for="duracaoMinutos">Duração(min.)</label>
                            {!! Form::text('duracaoMinutos', null, ['class'=> 'form-control', 'required'=>'required']) !!}
                        </div>     
                    </div>                    
                    <!-- Grid row -->
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        {!! Form::textarea('sinopse', null, ['class'=> 'form-control', 'required'=>'required', 'rows'=>'3']) !!}
                    </div>
                    <div class="form-group">
                        <label for="cartazImgPath">Imagem Cartaz</label>
                        {!! Form::file('cartazImgPath', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="headerImgPath">Imagem Cabeçalho</label>
                        {!! Form::file('headerImgPath', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-primary btn-md">Voltar</button></a>
                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary btn-md']) !!}
                    </div>
                {!! Form::close() !!}
<!-- Default form register -->
               
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->        
    </div>    
</div>
@stop

@section('script')
<script type="text/javascript">
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>
@stop