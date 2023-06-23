@extends ('principal')
@section ('titulo','Drinks')
@section ('conteudo')
<h1>Os melhores</h1>




<div class="cardstack-image" style="height: 80px; width: 100px;">
    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: 100px; height: 80px; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;">
        <img alt="Açaí" srcset="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=128 1x, https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=256 2x" src="https://static.ifood-static.com.br/image/upload/t_medium/discoveries/acai_WTXp.png?imwidth=256" decoding="async" data-nimg="fixed" class="small-banner-item__image cardstack-image__img cardstack-image__DEFAULT" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
    </span>
</div>

<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'myfood3';


$mysqli = new mysqli($servidor,$usuario,$senha,$banco);


if(mysqli_connect_errno()) triger_error(mysqli_connect_error());


// echo @yield('tabela');
$sql = 'SELECT nm_item,img_item,ds_item FROM `principal1` WHERE `categoria` = "drinks"';

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