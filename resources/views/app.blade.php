<!doctype html>
<html lang="pt-Br">

<head>
    <title>Feed</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{url('/')}}/css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand">
                    <img src="image/Logo_Projeto_Integrador_02.png" alt="Bootstrap" width="150">
                </a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item font-all">
                            <a class="nav-link active font-all" href="{{route('dashboard')}}">Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active font-all" href="{{route('rotas')}}">Rotas</a>
                        </li>
                    </ul>
                </div>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2 font-all" type="text" placeholder="Pesquisar">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </nav>

    </header>
    <main class="mt-5 pt-5">

        <div class="container">
            @yield('conteudo')
        </div>

    </main>
    <footer class="d-flex py-3 my-4 border-top">
        <div class="d-flex container">
            <div class="me-3">
                <img src="{{url('/')}}/image/Logo_Projeto_Integrador_02.png" alt="" width="80">
            </div>

            <div>
                <p>Aluan Caique &copy; 2023 </p>
            </div>
        </div>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>