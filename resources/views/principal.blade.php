<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav navbar-expand-lg navbar-light bg-light">
        <div class="logo"><img src="img/logo.png" alt=""></div>
        <div> <a href="index">Home</a></div>
        <div> <a href="restaurantes">Restaurantes</a></div>
        <div> <a href="filiais">Filiais</a></div>
        <div> <a href="sobre">Sobre</a></div>
        
        <div class="cce">
            <button type="button" class="conta" theme="link" > Criar conta </button>
            <a href=login class="entrar"> Entrar </a>
        </div>  
       </div>
            @yield('conteudo')

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>