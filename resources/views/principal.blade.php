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
        <div> <a href="filiais">Mercados</a></div>
        <div> <a href="pet">Pet</a></div>
        <div> <a href="drink">Drinks</a></div>
        <div> <a href="sobre">Sobre</a></div>
        
        <div class="cce">
            <button type="button" class="conta" theme="link" > Criar conta </button>
            <a href=login class="entrar"> Entrar </a>
        </div>  
       </div>
         
    </div>
    <div class="container">

        <div class="cardstack-image" style="height: 80px; width: 100px;">
    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: 100px; height: 80px; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;">
        <img alt="Açaí" srcset="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=128 1x, https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=256 2x" src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=256" decoding="async" data-nimg="fixed" class="small-banner-item__image cardstack-image__img cardstack-image__DEFAULT" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
    </span>
</div>

        @yield('conteudo')

            

        

    </section>


    </div>
   
   
</body>
</html>