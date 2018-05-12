@extends('layouts.master')

@section('content')
<div class="edge-header deep-purple"></div>
<div class="container free-bird">
<div class="row">
<div class="col-md-5">
                    <div class="card card-cascade wider reverse my-4 mx-auto">
                        <div class="card-body align-items-center d-flex justify-content-center">
                        {!! Form::open(['route' => 'criaHorario', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formLogin']) !!}
                            <!-- Heading -->
                            <h3 class="dark-grey-text text-center">
                                <strong>Novo Horário</strong>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="md-form form-group" style="margin:20px">           
                                    <label for="hora">Hora</label>            
                                    <input type="text" id="hora" name="hora" class="form-control" style="width:50px;padding-bottom:5px" required>
                                </div>
                                <div class="md-form form-group" style="margin:20px">       
                                    <label for="minuto">Minuto</label>                                
                                    <input type="text" id="minuto" name="minuto" class="form-control" style="width:50px;padding-bottom:5px" required></textarea>
                                </div>      
                                <div class="md-form form-group" style="margin:20px">
                                    <input type="submit" class="btn btn-primary btn-md">
                                </div>                     
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-2">
                    <div class="card card-cascade wider reverse my-4 mx-auto">
                        <div class="card-body align-items-center d-flex justify-content-center">
                        {!! Form::open(['route' => 'criaSala', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formLogin']) !!}
                            <!-- Heading -->
                            <h3 class="dark-grey-text text-center">
                                <strong>Nova Sala</strong>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="md-form form-group" style="margin:20px">           
                                    <label for="tipo">Tipo</label>            
                                    <input type="text" id="tipo" name="tipo" class="form-control" style="width:50px;padding-bottom:5px" required>
                                </div>
                                <div class="md-form form-group" style="margin:20px">       
                                    <label for="nome">Nome</label>                                
                                    <input type="text" id="nome" name="nome" class="form-control" style="width:50px;padding-bottom:5px" required></textarea>
                                </div>      
                                <div class="md-form form-group" style="margin:20px">
                                    <input type="submit" class="btn btn-primary btn-md">
                                </div>                     
                            </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-md-5">
                    <div class="card card-cascade wider reverse my-4 mx-auto">
                        <div class="card-body" style="height:416px">
                            <!--Table-->
                            <div id="carouselHorario" class="carousel slide" data-interval="false" data-ride="carousel" style="height:100%">
                                <div class="carousel-inner" role="listbox">
                                    @foreach($horarios->chunk(5) as $itensTabela)
                                    <div class="carousel-item @if($loop->first) active @endif">                                    
                                        <table class="table table-hover">                                
                                        <!--Table head-->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Horario</th>                                    
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        @foreach($itensTabela as $horario)
                                            <tr>
                                                <th scope="row">{{$horario->idHorario}}</th>
                                                <td>{{sprintf('%02d',$horario->hora)}}:{{sprintf('%02d',$horario->minuto)}}</td>
                                                <td style="text-align:center"><i class="fa fa-pencil" style="color:#4285f4;font-size:25px" data-toggle="modal" data-target="#modalEditHorario" data-id="{{$horario->idHorario   }}" data-hora="{{$horario->hora}}" data-minuto="{{$horario->minuto}}"></i></td>
                                                <td style="text-align:center"><a href="{{route('deleteHorarioAdmin',['id' => $horario->idHorario])}}"><i class="fa fa-times" style="color:#4285f4;font-size:25px"></i></a></td>     
                                            </tr>    
                                        @endforeach 
                                        </tbody>
                                        <!--Table body-->
                                        </table>
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselHorario" role="button" data-slide="prev" style="top:95%">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">voltar</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselHorario" role="button" data-slide="next" style="top:95%">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">avançar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-2">
                    <div class="card card-cascade wider reverse my-4 mx-auto">
                        <div class="card-body" style="height:416px">
                            <!--Table-->
                            <div id="carouselSala" class="carousel slide" data-interval="false" data-ride="carousel" style="height:100%">
                                <div class="carousel-inner" role="listbox">
                                    @foreach($salas->chunk(5) as $itensTabela)
                                    <div class="carousel-item @if($loop->first) active @endif">                                    
                                        <table class="table table-hover">                                
                                        <!--Table head-->
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tipo</th>                                    
                                                <th>Nome</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <!--Table head-->

                                        <!--Table body-->
                                        <tbody>
                                        @foreach($itensTabela as $sala)
                                            <tr>
                                                <th scope="row">{{$sala->idSala}}</th>
                                                <td>{{$sala->tipo}}</td>
                                                <td>{{$sala->nome}}</td>
                                                <td style="text-align:center"><i class="fa fa-pencil" style="color:#4285f4;font-size:25px"></i></td>
                                                <td style="text-align:center"><a href="{{route('deleteSalaAdmin',['id' => $sala->idSala])}}"><i class="fa fa-times" style="color:#4285f4;font-size:25px"></i></a></td>        
                                            </tr>    
                                        @endforeach 
                                        </tbody>
                                        <!--Table body-->
                                        </table>
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselSala" role="button" data-slide="prev" style="top:95%">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">voltar</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselSala" role="button" data-slide="next" style="top:95%">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">avançar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="modalEditHorario" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditHorarioLabel">Horário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            {!! Form::open(['route' => 'alteraHorario', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formHorario', 'method' => 'put']) !!}
                <div class="form-row">
                    <div class="col">
                        <label for="hora">Hora</label>
                        <input type="text" id="horaModal" name="hora" class="form-control" required>    
                        <input type="hidden" id="idModal" name="idHorario">
                    </div>
                    <div class="col">
                        <label for="minuto">Minuto</label>
                        <input type="text" id="minutoModal" name="minuto" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">                
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript">
    (function(){
        $('#modalEditHorario').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var hora = button.data('hora')
            var minuto = button.data('minuto')
            var id = button.data('id');
            var modal = $(this)
            modal.find('.modal-title').text('Horário #' + id)
            $('#horaModal').val(hora)
            $('#minutoModal').val(minuto)
            $('#idModal').val(id)
        })
    })();
</script>
@stop