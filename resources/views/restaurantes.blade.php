@extends ('principal')
@section ('titulo','Restaurantes')
@section ('conteudo')
<h1>Restaurantes</h1>





<div>
    <?php 

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'myfood3';
    
    
    $mysqli = new mysqli($servidor,$usuario,$senha,$banco);

   
    if(mysqli_connect_errno()) triger_error(mysqli_connect_error());

//         $sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "card"';
//         $query = $mysqli->query($sql); 

    
//         while ($card = $query->fetch_array())
//         {
        
//                 echo $card =  "<div class='cardstack-image d-inline-flex ps-5 pt-5' style='width: 12rem; margin-top: 30px'>

// <img src='$card[img_item]'' class='card-img-top' style= 'width: 100%; height: 160px' alt='...'>

// <div class='card-body' style='height: 150px'>

// </div>

// </div>"

// ;
    
       
//         }
    
    
    // echo @yield('tabela');
    $sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "Restaurante"';
    
    // echo $sql;
    $query = $mysqli->query($sql); 

    
        while ($item = $query->fetch_array())
    {

        echo "
        <div class='card d-inline-flex col-md-3' >
           <div class='card'>
                <div class='card-body row row-cols-3'>
                    <img src='$item[img_item]' class col-4 ='img-fluid rounded-start' >

                    <h5 class='card-title'>. $item[nm_item]</h5>
                    <p class='card-text'>$item[ds_item]</p>
                    <p class='card-text'><small class='text-body-secondary'>peça agora</small></p>
                
                </div>
            
            </div>

        </div>";
        
    
   
        
    }
    
    ?>


</div>

@stop