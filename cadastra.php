<?php
include_once('conexao.php');
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=hash("md5",$_POST['senha']);
$confirmarsenha=hash("md5",$_POST['confirmarsenha']) ;
$telefone=$_POST['telefone'];
$tipo=$_POST['tipo'];

if($senha==$confirmarsenha){
//Somente usaremos "prepare" na inserção de dados e na atualização de dados

try{
    $inserir=$conexao->prepare('INSERT INTO clientes (cpf,nome,telefone,email,senha,tipo) VALUES (:cpf,:nome,:telefone,:email,:senha,:tipo)');
    $inserir->execute(
        [
            ':cpf' => $cpf,
            ':nome' => $nome,
            ':telefone' => $telefone,
            ':email' => $email,
            ':senha' => $senha,
            ':tipo' => $tipo
        ]
    );
    header('location:ver_usuarios.php');
    echo $inserir->rowCount();
}catch(PDOException $erro){
echo $erro->getMessage();
}

}else{
    //redireciona o usuario para uma pagina escolhida
    echo 'erro';
    // header('location:index.php');
}

?>