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
                {!! Form::model($sessao, ['route' => 'criaSessaoAdmin', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formCria','method' => 'POST']) !!}
                    <!-- Grid row -->
                        <!-- Default input -->
                    <h3 class="dark-grey-text text-center">
                    <strong>Nova Sessão</strong>
                    </h3>
                    <hr>                    
                    <div class="form-row">
                        <!-- Default input -->
                        <div class="form-group col-md-6">
                            <label for="diretor">Data</label>
                            <input type="text" class="form-control" id="data" name="data" required>
                        </div>
                        <!-- Default input -->
                        <div class="form-group col-md-6">
                            <label for="tipo">Valor por assento</label>
                            <input type="text" class="form-control" id="valorAssento" name="valorAssento" required>                        
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="classificacao">Filme</label>
                        {!! Form::select('idFilme', $filmes, 'Seleciona', ['class' => 'form-control', 'required' => 'required']]) !!}        
                    </div>        
                    <!-- Grid row -->                                    
                    <!-- Default input -->
                    <div class="form-group">
                        <label for="classificacao">Sala</label>
                        {!! Form::select('idSala', $salas, null, ['class' => 'form-control', 'required' => 'required']) !!}                        
                    </div>
                    <div class="form-group">
                        <label for="classificacao">Horário</label>
                        {!! Form::select('idHorario', $horarios, null, ['class' => 'form-control', 'required' => 'required']) !!}        
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
<script type="text/javascript" src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
<script type="text/javascript">
    (function() {
    'use strict';

    $('#data').mask('00/00/0000');
    $('#valor').mask('#.##0,00', {reverse: true});

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