@extends('layouts.master')

@section('content')
<!-- Purple Header -->
<div class="edge-header deep-purple"></div>
<main>
    
    <div style="height:30px"></div>

    <div class="container">

        <!--Section: Products v.4-->
        <section class="pb-3 text-center ">

            <!--Section heading-->
            <h1 class="h1 py-5">Filmes Cadastrados <a href="{{route('novoFilmeAdmin')}}"<button type="button" class="btn-floating btn-primary btn-sm" style="border-width:0px"><i class="fa fa-plus"></i></button></a>
            
            {{Form::open(['route' => 'procuraFilmeAdmin', 'class' => 'form-inline flex-center'])}}
                <div class="md-form">
                    <button type="submit" class="btn-floating btn-primary btn-sm" style="border-width:0px"><i class="fa fa-search"></i></button>
                    <input type="text" class="form-control mb-2 mr-sm-2" name="busca" placeholder="Procurar">
                </div>
            {{ Form::close() }}
            </h1>
            
            
            
            <!--Grid row-->
            <div class="row">                
                <!--Grid column-->
                @foreach($filmes as $filme)
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="{{Storage::url($filme->cartazImgPath)}}" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a href="{{route('detalheFilme', ['id' => $filme->idFilme])}}">
                                    <p>{{$filme->nome}}
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                @endforeach
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </section>
        <!--Section: Products v.4-->              


    </div>
  </main>
  <!--Main layout-->
@stop