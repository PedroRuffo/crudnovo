<?php
include_once('conexao.php');
$clientes_cpf=$_POST['clientes_cpf'];
$funcao=$_POST['funcao'];
$data=$_POST['data'];
$horario=$_POST['horario'];

try{
    $inserir=$conexao->prepare('INSERT INTO agenda (clientes_cpf,funcao,data,horario) VALUES (:clientes_cpf,:funcao,:data,:horario)');
    $inserir->execute(
        [
            ':clientes_cpf' => $clientes_cpf,
            ':funcao' => $funcao,
            ':data' => $data,
            ':horario' => $horario
        ]
    );
    header('location:ver_agenda.php');
    echo $inserir->rowCount();
}catch(PDOException $erro){
echo $erro->getMessage();
}

?>