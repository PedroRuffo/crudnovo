<?php 
include_once('conexao.php');
if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
} else {
    header('location:ver_agenda.php');
}
try{
    $deletar=$conexao->query("DELETE FROM agenda  WHERE clientes_cpf=$clientes_cpf;");
    header("location:ver_agenda.php");
}catch(Exception $e){
    echo $e->getMessage();
}

?>