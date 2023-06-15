<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-4 fixed-top">
          <div class="container mx-6" style="padding: 22px 0px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand link-danger fw-bold ms-5" href="#">MyFood</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-md-2">
                  <a class="nav-link active" aria-current="page" href="#">Entregador</a>
                </li>
                <li class="nav-item mx-md-2">
                  <a class="nav-link active" aria-current="page" href="#">Restaurante e Mercado</a>
                </li>
                <li class="nav-item mx-md-2">
                  <a class="nav-link active" aria-current="page" href="#">Carreiras</a>
                </li>
                <li class="nav-item mx-md-2">
                  <a class="nav-link active" aria-current="page" href="#">iFood Card</a>
                </li>
              </ul>
              <form class="" role="search">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-light text-danger fw-bold" style="--bs-btn-padding-y: 0.6rem; --bs-btn-padding-x: 1.8rem; --bs-btn-font-size: 16px;" type="submit" name="criarConta">criar conta</button>
                  <button class="btn btn-danger fw-bold" style="--bs-btn-padding-y: 0.6rem; --bs-btn-padding-x: 1.8rem; --bs-btn-font-size: 16px;" type="submit" name="entrar"><a class="text-decoration-none text-light" href="entrar">Entrar</a></button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </nav>
    </header>
    <main>
    <div class="container-fluid">
      <!-- Primeira seção -->
      <div class="row bg-body-tertiary">
        <div class="col d-flex flex-column justify-content-center align-items-center w-100" style="padding-top: 170px;">
          <h1 class="col-md">Tudo para facilitar o seu dia a dia</h1>
          <p class="col-md">O que você precisa está aqui. Peça e receba onde estiver.</p>
          <form class="col-md-6 col-12">
            <div class="input-group mb-3 flex-nowrap">
              <span class="input-group-text border border-0 bg-light" id="addon-wrapping">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="landing-v2-address-search__pin-icon">
                  <path d="M8.83483 17.2742C8.27983 17.2742 7.77733 16.9496 7.52233 16.4192L4.30483 9.6346C3.51733 7.96418 3.55483 5.99293 4.40983 4.34626C5.21983 2.78668 6.62983 1.78918 8.26483 1.61501C8.63233 1.57543 9.02233 1.57543 9.38983 1.61501C11.0248 1.78918 12.4273 2.78668 13.2448 4.34626C14.0998 5.99293 14.1448 7.96418 13.3498 9.6346C13.2073 9.92752 12.8773 10.0463 12.5923 9.90376C12.3148 9.75335 12.2023 9.3971 12.3373 9.10418C12.9598 7.7821 12.9298 6.22251 12.2473 4.91626C11.6398 3.70501 10.5523 2.92918 9.28483 2.7946C8.99233 2.76293 8.68483 2.76293 8.38483 2.7946C7.12483 2.92918 6.03733 3.70501 5.40733 4.91626C4.73233 6.22251 4.69483 7.7821 5.32483 9.10418L8.54233 15.8888C8.62483 16.0629 8.78233 16.0867 8.84233 16.0867C8.90233 16.0867 9.05983 16.0708 9.14233 15.8888L10.7548 12.4767C10.8973 12.1838 11.2348 12.065 11.5123 12.2075C11.7898 12.3579 11.9023 12.7142 11.7673 13.0071L10.1548 16.4192C9.89983 16.9417 9.39733 17.2742 8.83483 17.2742Z" fill="currentColor"></path><path d="M8.83508 9.55546C7.56008 9.55546 6.51758 8.45505 6.51758 7.10921C6.51758 5.75546 7.56008 4.66296 8.83508 4.66296C10.1101 4.66296 11.1526 5.76338 11.1526 7.10921C11.1601 8.46296 10.1176 9.55546 8.83508 9.55546ZM8.83508 5.85046C8.17508 5.85046 7.64258 6.41255 7.64258 7.10921C7.64258 7.80588 8.17508 8.36796 8.83508 8.36796C9.49508 8.36796 10.0276 7.80588 10.0276 7.10921C10.0351 6.41255 9.49508 5.85046 8.83508 5.85046Z" fill="currentColor"></path>
                </svg>
              </span>
              <input type="text" class="col-10 col-md-12 form-control border border-0 rounded-3" id="formGroupExampleInput" placeholder="Endereço de entrega e número">
              <button class="col-md-2 btn btn-danger rounded-2 ms-3" type="button">Buscar</button>
            </div>
          </form>
        </div>
      </div>
      <!-- Segunda seção -->
      <div class="row d-flex justify-content-center text-light mt-4"  style="height: 214px;">
        <div class="col-md-3 col-5 bg-danger rounded-5 position-relative" style="margin-right: 50px">
          <h1 class="ms-2 mt-2">Restaurante</h1>
          <img class="position-absolute bottom-0 end-0 img-fluid" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/restaurant.png" alt="">
          <div class="position-absolute bottom-0 start-10 ms-4 mb-3 bg-secondary rounded-4 p-2 d-inline-flex">
            <a class="text-decoration-none text-light" href="Restaurantes">
              <p class="mb-0">Ver opções</p>
            </a>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </span>
          </div>
        </div>
        <div class="col-md-3 col-5 bg-success rounded-5 position-relative">
          <h1 class="ms-2 mt-2">Mercado</h1>
          <img class="position-absolute bottom-0 end-0 img-fluid" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/market.png" alt="">
          <div class="position-absolute bottom-0 start-10 ms-4 mb-3 bg-secondary rounded-4 p-2 d-inline-flex">
            <p class="mb-0">Buscar lojas</p>
            <span class="ms-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </span>
          </div>
        </div>
      </div>
      <!-- Terceira seção -->
      <div class="row d-flex justify-content-evenly mt-5" style="">
        <a class="col-2 d-flex flex-column justify-content-end align-items-center text-decoration-none text-dark" id="bebidas" href="" style="height: 160px; width:188px" >
          <figure class="position-relative rounded-3 d-flex justify-content-center" style="background-color: #f6d553; width: 188px; height: 47px; margin:0" >
              <img class="position-absolute bottom-0" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/drinks.png" alt="drinks">
          </figure>
          <p class="d-inline-flex justify-content-center fw-bolder">Bebidas
            <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
          </p>
        </a>
        <a class="col-2 d-flex flex-column justify-content-end align-items-center text-decoration-none text-dark" id="bebidas" href="" style="height: 160px; width:188px">
          <figure class="position-relative rounded-3 d-flex justify-content-center" style="width: 188px; height: 47px; margin:0; background-color: #f9879c" >
              <img class="position-absolute bottom-0" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/pharmacy.png" alt="drinks">
          </figure>
          <p class="d-inline-flex justify-content-center fw-bolder">Farmácia
            <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
          </p>
        </a>
        <a class="col-2 d-flex flex-column justify-content-end align-items-center text-decoration-none text-dark" id="bebidas" href="" style="height: 160px; width:188px">
          <figure class="position-relative rounded-3 d-flex justify-content-center" style="width: 188px; height: 47px; margin:0; background-color: #8c60c5;" >
              <img class="position-absolute bottom-0" src="https://static.ifood-static.com.br/image/upload/f_auto/webapp/landingV2/petshop.png" alt="drinks">
          </figure>
          <p class="d-inline-flex justify-content-center fw-bolder">Pet shop
            <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </span>
          </p>
        </a>
      </div>
      <br>
      <hr>
    </div>
      <!-- Quarta seção -->
    <div class="container">
      <h4>Os melhores restaurantes</h1>
      <div class="row d-flex justify-content-between rounded-3 mt-5" style="height: 132px">
        <div class="col-2 border border-2 rounded-4 d-flex justify-content-center">
          <a href="" class="d-flex align-items-center text-decoration-none text-dark">
            <div class="">
              <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2756%27%20height=%2756%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="Mcdonald's" crossorigin="anonymous" src="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128" decoding="async" data-nimg="intrinsic" class="landing-v2-merchant__logo" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" srcset="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=64 1x, https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128 2x"><noscript></noscript></span>
            </div>
            <div class="">
              <p class="my-0 ms-3">McDonald's</p>
              <p class="my-0 ms-3" style="font-size: 12px">Lanches</p>
            </div>
          </a>
        </div>
        <div class="col-2 border border-2 rounded-4 d-flex justify-content-center">
          <a href="" class="d-flex align-items-center text-decoration-none text-dark">
            <div class="">
            <span class="rounded-5" style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2756%27%20height=%2756%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="Coco Bambu" crossorigin="anonymous" src="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/201910292243_94aaf166-84cc-4ebf-a35d-d223be34d01f.png?imwidth=128" decoding="async" data-nimg="intrinsic" class="landing-v2-merchant__logo" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" srcset="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/201910292243_94aaf166-84cc-4ebf-a35d-d223be34d01f.png?imwidth=64 1x, https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/201910292243_94aaf166-84cc-4ebf-a35d-d223be34d01f.png?imwidth=128 2x"><noscript></noscript></span>
            </div>
            <div class="">
              <p class="my-0 ms-3">Coco Bambu</p>
              <p class="my-0 ms-3" style="font-size: 12px">Frutos Do Mar</p>
            </div>
          </a>
        </div>
        <div class="col-2 border border-2 rounded-4 d-flex justify-content-center">
          <a href="" class="d-flex align-items-center text-decoration-none text-dark">
            <div class="">
            <span class="rounded-5" style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2756%27%20height=%2756%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="China in Box" crossorigin="anonymous" src="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/d4a3984f-2b73-4f46-99df-1d6bc79ff293/202001031317_CXpO_i.png?imwidth=128" decoding="async" data-nimg="intrinsic" class="landing-v2-merchant__logo" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" srcset="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/d4a3984f-2b73-4f46-99df-1d6bc79ff293/202001031317_CXpO_i.png?imwidth=64 1x, https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/d4a3984f-2b73-4f46-99df-1d6bc79ff293/202001031317_CXpO_i.png?imwidth=128 2x"><noscript></noscript></span>
            </div>
            <div class="">
              <p class="my-0 ms-3">China in Box</p>
              <p class="my-0 ms-3" style="font-size: 12px">Chinesa</p>
            </div>
          </a>
        </div>
        <div class="col-2 border border-2 rounded-4 d-flex justify-content-center">
          <a href="" class="d-flex align-items-center text-decoration-none text-dark">
            <div class="">
              <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2756%27%20height=%2756%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="Mcdonald's" crossorigin="anonymous" src="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128" decoding="async" data-nimg="intrinsic" class="landing-v2-merchant__logo" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" srcset="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=64 1x, https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128 2x"><noscript></noscript></span>
            </div>
            <div class="">
              <p class="my-0 ms-3">McDonald's</p>
              <p class="my-0 ms-3" style="font-size: 12px">Lanches</p>
            </div>
          </a>
        </div>
        <div class="col-2 border border-2 rounded-4 d-flex justify-content-center">
          <a href="" class="d-flex align-items-center text-decoration-none text-dark">
            <div class="">
              <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2756%27%20height=%2756%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img alt="Mcdonald's" crossorigin="anonymous" src="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128" decoding="async" data-nimg="intrinsic" class="landing-v2-merchant__logo" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" srcset="https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=64 1x, https://static.ifood-static.com.br/image/upload/t_thumbnail/logosgde/Logo McDonald_MCDON_DRIV15.jpg?imwidth=128 2x"><noscript></noscript></span>
            </div>
            <div class="">
              <p class="my-0 ms-3">McDonald's</p>
              <p class="my-0 ms-3" style="font-size: 12px">Lanches</p>
            </div>
          </a>
        </div>
      </div>
        <!-- Quinta seção -->
      <div class="row d-flex justify-content-evenly rounded-4 ">
        <div class="col mt-5">
          <img src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-1.png" alt="">
        </div>
        <div class="col mt-5">
          <img src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-2.png" alt="">
        </div>
        <div class="col mt-5">
          <img src="https://static.ifood-static.com.br/image/upload/t_high,q_100/webapp/landing/landing-banner-3.png" alt="">
        </div>
      </div>
    </div>

    <div style="height:500px"></div>  
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
