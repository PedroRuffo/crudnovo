<?php
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$carga_horario=$_POST['carga_horario'];

try{
    $inserir=$conexao->prepare('INSERT INTO funcionarios (cpf,nome,telefone,endereco,carga_horario) VALUES (:cpf,:nome,:telefone,:endereco,:carga_horario)');
    $inserir->execute(
        [
            ':cpf' => $cpf,
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':endereco' => $endereco,
            ':carga_horario' => $carga_horario
        ]
    );
    header('location:ver_funcionarios.php');
    echo $inserir->rowCount();
}catch(PDOException $erro){
echo $erro->getMessage();
}

?>