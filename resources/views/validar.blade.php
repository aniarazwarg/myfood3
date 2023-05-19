<?php
 session_start(); //sempre tem que ser feita primeiro, assim que cria o php;
 $usuario = $_POST['user'];
 $senha = $_POST['senha'];
echo $usuario ;
echo $senha;
/* sessao - session
*/

$_SESSION['usuario']= $usuario;
$_SESSION['idade']=35;
$_SESSION['senha']=$senha;

header("location:index.html");

?>