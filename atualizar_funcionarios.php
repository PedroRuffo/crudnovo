<?php 
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$carga_horario=$_POST['carga_horario'];

echo ' '.$cpf. ' ' .$nome. ' '.$telefone. ' '.$endereco. ' ' .$carga_horario. ' ';

try{
    $update=$conexao->prepare("UPDATE funcionarios SET nome=:nome, telefone=:telefone, endereco=:endereco, carga_horario=:carga_horario WHERE cpf=:cpf;");
    $update->execute(
        [
            ':nome'=>$nome,
            ':telefone'=>$telefone,
            ':endereco'=>$endereco,
            ':carga_horario'=>$carga_horario,
            ':cpf'=>$cpf
        ]
        );   
    header('location:ver_funcionarios.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>