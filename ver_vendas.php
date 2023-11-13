<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>


<div class="container">
    <h1>Lista Vendas</h1>
<table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Valor</th>
            <th scope="col">Clientes_cpf</th>
            <th scope="col">Funcionarios_cpf</th>
            <th scope="col">Forma_Pagamento</th>
        </tr>


        <?php
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT id,valor,clientes_cpf,funcionarios_cpf,forma_pagamento FROM vendas');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td scope='row'>{$linha['id']}</td>
                <td> {$linha['valor']} </td>
                <td>{$linha['clientes_cpf']}</td>
                <td>{$linha['funcionarios_cpf']}</td>
                <td>{$linha['forma_pagamento']}</td>
                </tr>";
        }
        ?>
    </table>

    <p><a href="index_vendas.php" class="btn btn-secondary">Fazer nova Venda</a></p>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
include_once('partials/footer.php');
?>