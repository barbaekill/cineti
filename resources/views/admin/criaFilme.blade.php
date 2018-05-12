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
                {{Form::model($filme, ['route' => 'criaFilme', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formCria'])}}
                    <!-- Grid row -->
                        <!-- Default input -->
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>        
                    <!-- Grid row -->                                    
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="nomeOriginal">Título Original</label>
                        <input type="text" class="form-control" id="nomeOriginal" name="nomeOriginal">
                    </div>
                    <!-- Grid row -->
                    <div class="form-row">
                        <!-- Default input -->
                        <div class="form-group col-md-7">
                            <label for="diretor">Diretor</label>
                            <input type="text" class="form-control" id="diretor" name="diretor">
                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-3">
                            <label for="tipo">Tipo</label>
                            <input type="text" class="form-control" id="tipo" name="tipo">
                        </div>    
                        <div class="form-group col-md-2">
                            <label for="anoLancamento">Ano Lançado</label>
                            <input type="text" class="form-control" id="anoLancamento" name="anoLancamento">
                        </div>                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="classificacao">Classificação Indicativa</label>
                            <select class="form-control" id="classificacao" name="classificacao">
                            <option value="dozeAnos">Não recomendado para menores de doze anos</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="duracaoMinutos">Duração em Minutos</label>
                            <input type="text" class="form-control" id="duracaoMinutos" name="duracaoMinutos">
                        </div>     
                    </div>                    
                    <!-- Grid row -->
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="sinopse">Sinopse</label>
                        <textarea class="form-control" id="sinopse" name="sinopse"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imgPath">Imagem</label>
                        <input type="file" class="form-control" id="imgPath" name="imgPath">
                    </div>
                    <div class="row justify-content-center">
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