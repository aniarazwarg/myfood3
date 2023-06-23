@extends ('principal')
@section ('titulo','Mercados')
@section ('conteudo')
<h1>Mercados</h1>

<h2>Mais pedidos</h2>

<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'myfood3';


$mysqli = new mysqli($servidor,$usuario,$senha,$banco);


if(mysqli_connect_errno()) triger_error(mysqli_connect_error());


// echo @yield('tabela');
$sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "Mercados"';

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

@stop

<!-- essa é a pagina que será exibida, puxando o template pronto da principal.blade -->