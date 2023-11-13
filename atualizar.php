<?php 
include_once('conexao.php');
// $email=$_POST['email'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$cpf=$_POST['cpf'];

echo ' '.$cpf. ' ' .$nome. ' '.$telefone. ' ';


try{
    $update=$conexao->prepare("UPDATE clientes SET nome=:nome, telefone=:telefone WHERE cpf=:cpf;");
    $update->execute(
        [
            ':nome'=>$nome,
            ':telefone'=>$telefone,
            ':cpf'=>$cpf
        ]
        );   
    header('location:ver_usuarios.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>