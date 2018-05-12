@extends('layouts.master')

@section('content')
  <!--Carousel Wrapper-->
  <div id="carouselHead" class="carousel slide carousel-fade">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carouselHead" data-slide-to="0" class="active"></li>
      <li data-target="#carouselHead" data-slide-to="1"></li>
      <li data-target="#carouselHead" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/destaques/19918-destaque.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4"><strong>Jogador nº1</strong></h1>

              <div class="clearfix"></div>
                
              
              <a target="_blank" href="detalhes-filme.html" class="btn btn-outline-white btn-lg">Detalhes
                <i class="fa fa-play ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/destaques/20519-destaque.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4"><strong>Círculo de Fogo: A Revolta</strong></h1>

              <div class="clearfix"></div>

              <a target="_blank" href="detalhes-filme.html" class="btn btn-outline-white btn-lg">Detalhes
                <i class="fa fa-play ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/destaques/20916-destaque.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4"><strong>Vingadores: Guerra Infinita</strong></h1>

              <div class="clearfix"></div>

              <a target="_blank" href="detalhes-filme.html" class="btn btn-outline-white btn-lg">Detalhes
                <i class="fa fa-play ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

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
            <h1 class="h1 py-5">Em Cartaz</h1>
            
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="img/cartaz/19918-cartaz.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a href="detalhes-filme.html">
                                    <p>Jogador nº1
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="img/cartaz/20519-cartaz.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a href="detalhes-filme.html">
                                    <p>Círculo de Fogo: A Revolta
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="img/cartaz/20535-cartaz.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a href="detalhes-filme.html">
                                    <p>Pantera Negra
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Grid column-->

                <!--Fourth column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Collection card-->
                    <div class="card collection-card z-depth-1-half">
                        <!--Card image-->
                        <div class="view zoom">
                            <img src="img/cartaz/20916-cartaz.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                <a href="detalhes-filme.html">
                                    <p>Vingadores Guerra Infinita 
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!--Card image-->
                    </div>
                    <!--Collection card-->

                </div>
                <!--Fourth column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Products v.4-->              


    </div>
  </main>
  <!--Main layout-->
  @stop