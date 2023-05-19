<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>myfood2</title>
</head>
<body>
    <header>
        <div class="nav navbar-expand-lg navbar-light bg-light">
         <div class="logo"><img src="img/logo.png" alt=""></div>
         <div> <a href="">entregador</a></div>
         <div> <a href="">entregador</a></div>
         <div> <a href="">entregador</a></div>
         <div> <a href="">entregador</a></div>
         <div class="cce">
             <button type="button" class="conta" theme="link" > Criar conta </button>
             <a href=login.php class="entrar"> Entrar </a>
         </div>  
        </div>

         <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              Responsividade do navbar
              <button class="navbar-toggler toggle d-block d-sm-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false"
                aria-label="toggle navigation" >
                <span class="navbar-toggler-icon"></span>
              </button>
              <img class="logo" src=img src="img/logo.png" alt="">
                <div class="collapse navbar-collapse ms-4" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Entregador</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Restaurante e Mercado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Carreiras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">MyFood Card</a>
                  </li>
                    </ul>
                <div class="cce">
                    <button type="button" class="conta" theme="link" > Criar conta </button>
                    <a href=login.php class="entrar"> Entrar </a>
              </div>
            
        </nav>    -->
    
         <div class="container justify-content-center">

            <div class="row justify-content-center" id="conteudo">
                <div class="col-12 text-center" id="titulo">
                    <h1>Tudo pra facilitar seu dia a dia</h1>
                    <p>O que você precisa está aqui. Peça e receba onde estiver.</p>
                </div>
            </div>
            <div class="row justify-content-center" id= end>
                <div  class="col-12 col-md-10 end ">
                    
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Endereço e numero">
                  </div>
                <div class="col-12 col-md-2 d-grid">
                    <button class="buscar">Buscar</button>
                </div>
            </div>
            <div class="row justify-content-center" id="cards">

                

                <div class="col-4 card1" id="card1">
                    <h1 id="rest">Restaurantes</h1>
                    <button class="opt" theme="link">Ver opções > </button>
                    <img src="img/restaurant.webp">
                </div>
             

                <div class="col-4 card2" id="card2">
                    <h1 id="mark"> Mercados</h1>
                    <button class="opt" theme="link">Ver opções > </button>
                    <img src="img/market.webp">
                </div>

            </div>

            <div class="row justify-content-center" id="minicards">
                <div class="col-3">
                    <div class="card">
                        <img src="img/drinks.png" class="rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                          <h5 class="text-center card-title">Drinks </h5>
                        </div>
                      
                    </div>
                </div>
                
                <div class="col-3">
                    <div class="card">
                        <img src="img/pharmacy.webp" class="rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                          <h5 class="text-center card-title">Farmácia </h5>
                        </div>
                      
                    </div>
                </div>
                
                <div class="col-3">
                    <div class="card">
                        <img src="img/petshop.webp" class="rounded mx-auto d-block" alt="...">
                        <div class="card-body">
                          <h5 class="text-center card-title">Petshop </h5>
                        </div>
                      
                    </div>
                </div>

            <div class="row" id = cardrestaurentes>
                <div class="col-12">
                    <h2> Os melhores restaurantes.</h1>
                </div>

                <div class="col-2 crimg" id="crimg">
                    <div class="card border-dark mb-3" >                        
                         <img class="figure" src="img/rest (6).jpeg" alt="">
                    </div>
                </div>
               

                <div class="col-2 crimg" id="crimg">
                    <div class="card border-dark mb-3" >                        
                         <img class="figure" src="img/rest (7).jpeg" alt="">
                    </div>
                </div>
                

                <div class="col-2 crimg" id="crimg">
                    <div class="card border-dark mb-3" >                        
                         <img class="figure" src="img/rest (8).jpeg" alt="">
                    </div>
                </div>
               

                <div class="col-2 crimg" id="crimg">
                    <div class="card border-dark mb-3" >                        
                         <img class="figure" src="img/rest (5).jpeg" alt="">
                    </div>
                </div>
              

                <div class="col-2 crimg" id="crimg">
                    <div class="card border-dark mb-3" >                        
                         <img class="figure" src="img/rest (4).jpeg" alt="">
                    </div>
                </div>
            

            </div>


<div class="row justify-content-center">
    
    <div class="col-12 col-md-4 lb1">
        <img class="fig1" src="img/landing-banner-1.webp" alt="fig1"></figure>
    </div>
    <div class="col-12 col-md-4 lb2">
        <img class="fig2" src="img/landing-banner-2.webp" alt="fig2"></figure>
    </div>
    <div class="col-12 col-md-4 lb3">
        <img class="fig3" src="img/landing-banner-3.webp" alt="fig3"></figure>
    </div>
</div>

                <div class="row" id = cardrestaurentes>
                    <div class="col-12">
                        <h2> Os melhores mercados.</h1>
                    </div>

                    <div class="col-2 crimg" id="crimg">
                        <div class="card border-dark mb-3" >                        
                             <img class="figure" src="img/rest (1).jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-2 crimg" id="crimg">
                        <div class="card border-dark mb-3" >                        
                             <img class="figure" src="img/rest (2).jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-2 crimg" id="crimg">
                        <div class="card border-dark mb-3" >                        
                             <img class="figure" src="img/rest (3).jpeg" alt="">
                        </div>
                    </div>

                </div>

<div class="row" id="entregas">

    <div class="col-6">
        <div class="card bg-dark text-white">
            <img class="card-img" src="img/delivery-man.svg" alt="Imagem do card">
            <div class="card-img-overlay">
              <h5 class="card-title">Quer fazer entregas pelo ifood?</h5>
              <p class="card-text">
               Faça agora o seu cadastro e comece o quanto antes.</p>
               <button class="saiba"> Saiba mais </button>
            </div>
          </div>
    </div>
</div>
               
            

    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>