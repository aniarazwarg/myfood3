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

        <?php 

        $servidor = 'localhost';
        $usuario = 'root';
        $senha = '';
        $banco = 'myfood3';
        
        
        $mysqli = new mysqli($servidor,$usuario,$senha,$banco);
    
       
        if(mysqli_connect_errno()) triger_error(mysqli_connect_error());

        $sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "card"';
        $query = $mysqli->query($sql); 
    
        
        while ($card = $query->fetch_array())
        {
            
                echo $card =  "<div class='cardstack-image d-inline-flex ps-5 pt-5' style='width: 12rem; margin-top: 30px'>

<img src='$card[img_item]'' class='card-img-top' style= 'width: 100%; height: 160px' alt='...'>

<div class='card-body' style='height: 150px'>

</div>

</div>";
        
           
        }
        
        
        // echo @yield('tabela');
        // $sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "Restaurante"';
        
        // // echo $sql;
        // $query = $mysqli->query($sql); 
    
        
        //     while ($item = $query->fetch_array())
        // {

        //     echo "
        //     <div class='card d-inline-flex col-md-3' >
        //        <div class='card'>
        //             <div class='card-body row row-cols-3'>
        //                 <img src='$item[img_item]' class col-4 ='img-fluid rounded-start' >

        //                 <h5 class='card-title'>. $item[nm_item]</h5>
        //                 <p class='card-text'>$item[ds_item]</p>
        //                 <p class='card-text'><small class='text-body-secondary'>peça agora</small></p>
                    
        //             </div>
                
        //         </div>

        //     </div>";
            
        
       
            
        // }
        
        ?>
</div>

        @yield('conteudo')

            

        

    </section>


    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          MY FOOD - Aniara - 2DS3 © 2023 
          
        </div>
        <!-- Copyright -->
      </footer>
   
   
</body>
</html>