
@extends('layouts.master')

@section('content')
  <!-- Full Page Intro -->
  <div class="view full-page-intro" style="background-image: url('img/destaque-login.jpg'); background-repeat: no-repeat; background-size: cover;">

    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

      <!-- Content -->
      <div class="container">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column CADASTRO-->
          <div class="col-md-6 col-xl-7 mb-8">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                {!! Form::open(['route' => 'criaUsuario', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formCadastro']) !!}
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Cadastro:</strong>
                  </h3>
                  <hr>

  
                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label for="nomeCadastro">Nome</label>
                    <input type="text" id="nomeCadastro" name="nome" class="form-control" required>
                    <div class="invalid-feedback text-center">
                      Insira um nome!
                    </div>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label for="emailCadastro">E-mail</label>
                    <input type="text" id="emailCadastro" name="email" class="form-control" required>
                    <div class="invalid-feedback text-center">
                      Insira um e-mail!
                    </div>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label for="passwordCadastro">Senha</label>
                    <input type="password" id="passwordCadastro" name="password" class="form-control" required></textarea>
                    <div class="invalid-feedback text-center">
                      Insira uma senha!
                    </div>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label for="confirmaSenha">Repetir Senha</label>
                    <input type="password" id="confirmaSenha" class="form-control" required></textarea>
                    <div class="invalid-feedback text-center" id="senhaInvalida">
                      Insira uma senha de confirmação!
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-indigo">Se Cadastrar</button>
                  </div>

                {!! Form::close() !!}
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->    

          <!--Grid column LOGIN DE USUÁRIO JÁ CADASTRADO-->
          <div class="col-md-6 col-xl-5 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card content-->
              <div class="card-body">

                <!-- Form -->
                {!! Form::open(['route' => 'postLogin', 'class' => 'needs-validation', 'novalidate' => 'novalidate', 'id' => 'formLogin']) !!}
                  <!-- Heading -->
                  <h3 class="dark-grey-text text-center">
                    <strong>Login:</strong>
                  </h3>
                  <hr>

                  <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="email" name="email" class="form-control" required>
                    <label for="email">E-mail ou nome de usuário</label>
                    <div class="invalid-feedback text-center">
                      Insira um e-mail!
                    </div>
                  </div>
                  <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="password" name="password" class="form-control" required></textarea>
                    <label for="password">Senha</label>
                    <div class="invalid-feedback text-center">
                      Insira uma senha!
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-indigo">Entrar</button>
                  </div>

                {!! Form::close() !!}
                <!-- Form -->

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
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
          } else if (form.id == 'formCadastro' && form.passwordCadastro.value != form.confirmaSenha.value  ){
            document.getElementById('senhaInvalida').innerHTML = 'As senhas não batem!';
            form.confirmaSenha.classList.add('is-invalid');
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