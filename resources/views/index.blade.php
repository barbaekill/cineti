@extends('layouts.master')

@section('content')
  <!--Carousel Wrapper-->
  <div id="carouselHead" class="carousel slide carousel-fade">

    <!--Indicators-->
    <ol class="carousel-indicators">
    @for($i = 0; $i < $filmes->count(); $i++)
        @if($i == 0)
            <li data-target="#carouselHead" data-slide-to="{{$i}}" class="active"></li>
        @else
            <li data-target="#carouselHead" data-slide-to="{{$i}}"></li>
        @endif      
    @endfor
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      @foreach($filmes->take(5) as $filme)
        @if ($loop->first)
            <div class="carousel-item active">
        @else
            <div class="carousel-item">
        @endif
      
        <div class="view" style="background-image: url('{{Storage::url($filme->headerImgPath)}}'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4"><strong>{{$filme->nome}}</strong></h1>

              <div class="clearfix"></div>
                
              
              <a target="_blank" href="{{route('detalheFilme', ['id' => $filme->idFilme])}}" class="btn btn-outline-white btn-lg">Detalhes
                <i class="fa fa-play ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      @endforeach
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carouselHead" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">voltar</span>
    </a>
    <a class="carousel-control-next" href="#carouselHead" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">avançar</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    
    <div style="height:30px"></div>

    <div class="container">

        <!--Section: Products v.4-->
        <section class="pb-3 text-center ">

            <!--Section heading-->
            <h1 class="h1 py-5">Em Destaque</h1>
            
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
            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products v.4-->              


    </div>
  </main>
  <!--Main layout-->
  @stop