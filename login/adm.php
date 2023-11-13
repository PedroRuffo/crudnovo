<?php
session_start();

if(isset ($_SESSION['cpf'])){
if($_SESSION['tipo']==0){
        header('location:cliente.php');
}else{
    return;
}
}else{
    header('location:index.php');
}



?>
<h1>voce eh um administrador parabens</h1>