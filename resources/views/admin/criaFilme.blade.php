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
                {!! Form::model($filme, ['route' => 'criaFilme', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formCria', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Grid row -->
                        <!-- Default input -->
                    <h3 class="dark-grey-text text-center">
                    <strong>Novo Filme</strong>
                    </h3>
                    <hr>
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>        
                    <!-- Grid row -->                                    
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="nomeOriginal">Título Original</label>
                        <input type="text" class="form-control" id="nomeOriginal" name="nomeOriginal" required>
                    </div>
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Default input -->
                        <div class="form-group col-md-7">
                            <label for="diretor">Diretor</label>
                            <input type="text" class="form-control" id="diretor" name="diretor" required>
                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-3">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo" required>
                        </div>    
                        <div class="form-group col-md-2">
                            <label for="anoLancamento">Ano</label>
                            <input type="text" class="form-control" id="anoLancamento" name="anoLancamento" required>
                        </div>                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="classificacao">Classificação Indicativa</label>
                            <select class="form-control" id="classificacao" name="classificacao">
                            <option value="0">Livre</option>
                            <option value="10">Não recomendado para menores de dez anos</option>
                            <option value="12">Não recomendado para menores de doze anos</option>
                            <option value="14">Não recomendado para menores de catorze anos</option>
                            <option value="16">Não recomendado para menores de dezesseis anos</option>
                            <option value="18">Não recomendado para menores de dezoito anos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="duracaoMinutos">Duração(min.)</label>
                            <input type="text" class="form-control" id="duracaoMinutos" name="duracaoMinutos" required>
                        </div>     
                    </div>                    
                    <!-- Grid row -->
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        <textarea class="form-control" id="sinopse" name="sinopse" required></textarea>
                    </div>
                    <div class="form-group pull-right">                            
                            <input type="checkbox" value="1" class="form-check-input" id="destaque" name="destaque">
                            <label for="destaque" class="form-check-label">Em destaque</label>
                    </div>
                    <div class="form-group">
                        <label for="cartazImgPath">Imagem Cartaz</label>
                        <input type="file" class="form-control" id="cartazImgPath" name="cartazImgPath" required>
                    </div>
                    <div class="form-group">
                        <label for="headerImgPath">Imagem Cabeçalho</label>
                        <input type="file" class="form-control" id="headerImgPath" name="headerImgPath" required>
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-primary btn-md">Voltar</button></a>
                        <button type="submit" class="btn btn-primary btn-md">Salvar</button>
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