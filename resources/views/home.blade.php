<!doctype html>
<html lang="pt-BR">

<head>
  <title>Ciclo Life</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="{{url('/')}}/css/style.css">



</head>

<body class="no-scroll">
  <div class="bg-blur"></div>

  <!-- navbar -->
  <header>
    <nav class="navbar bg-body-tertiary bg-cinza-transparente">
      <div class="container">
        <a class="navbar-brand">
          <img src="image/Logo_Projeto_Integrador_02.png" alt="Bootstrap" width="150">
        </a>
        <a id="btn-entrar" href="{{route('login')}}" class="btn btn-success col-1">Entrar</a>
      </div>
    </nav>
  </header>

  <!-- texto -->
  <main class="position-relative vh-100 d-flex align-items-center justify-content-center">
    <div class="w-100 text-center">
      <p class="text-center fs-1 bg-font">PARTICIPE DA COMUNIDADE DE CICLISTAS PARA UMA VIAGEM MAIS <span
          class="texto-verde">CONFORTAVEL</span> E <span class="texto-verde">SEGURO</span> !</p>
       <a href="{{route('register')}}"><button type="button" class="btn btn-dark fs-2">Cadastrar</button></a>
    </div>
  </main>

  <!-- Login -->
  <!-- <div class="card" id="login">
    <div class="card-body insideLogin">
      <div class="modal-content insideLogin">
        <div class="modal-header insideLogin">
          <h5 class="modal-title mb-3 insideLogin" id="modalTitleId"><i class="fa-regular fa-user" style="color: #15b21f;"></i> Login</h5>
          <button type="button" class="btn-close mb-3" id="btn-fechar" aria-label="Close"></button>
        </div>
        <div class="modal-body insideLogin">
          <div class="container-fluid insideLogin">
            <label for="" class="insideLogin">Usuario</label>
            <input type="text" name="" class="form-control insideLogin">

            <label class="insideLogin" for="">Senha</label>
            <input type="password" name="" class="form-control insideLogin">
          </div>
        </div>
        <div class="mt-3 text-center insideLogin">
          <button type="button" class="btn btn-success insideLogin" href="Feed.html">Entrar</button>
        </div>
      </div>
    </div>
  </div> -->



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

  <script src="{{url('/')}}/js/java.js"></script>

</body>

</html>