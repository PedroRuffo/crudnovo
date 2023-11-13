<?php
include_once('conexao.php');
$valor=$_POST['valor'];
$clientes_cpf=$_POST['clientes_cpf'];
$funcionarios_cpf=$_POST['funcionarios_cpf'];
$forma_pagamento=$_POST['forma_pagamento'];

try{
    $inserir=$conexao->prepare('INSERT INTO vendas (valor,clientes_cpf,funcionarios_cpf,forma_pagamento) VALUES (:valor,:clientes_cpf,:funcionarios_cpf,:forma_pagamento)');
    $inserir->execute(
        [
            ':valor' => $valor,
            ':clientes_cpf' => $clientes_cpf,
            ':funcionarios_cpf' => $funcionarios_cpf,
            ':forma_pagamento' => $forma_pagamento
        ]
    );
    header('location:ver_vendas.php');
    echo $inserir->rowCount();
}catch(PDOException $erro){
echo $erro->getMessage();
}

?>