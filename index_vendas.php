<?php
 include_once('conexao.php');
?>
<div class="container">
        <h1>Fazer Venda</h1>
    <form action="cadastra_vendas.php" method="post">
               <label for="valor"class="form-label">Valor:</label>
        <input type="text" name="valor" id="valor" class="form-control"/>

        <label for="forma_pagamento"class="form-label">Forma De Pagamento:</label>
        <input type="text" name="forma_pagamento" id="forma_pagamento" class="form-control"/>

                <label for="clientes_cpf"class="form-label">Cpf do Cliente:</label>
        <input type="text" name="clientes_cpf" id="clientes_cpf" class="form-control"/>

        <label for="funcionarios_cpf"class="form-label">Cpf do Funcionário:</label>
        <input type="text" name="funcionarios_cpf" id="funcionarios_cpf" class="form-control"/>

                <button class="btn btn-primary mt-2" type="submit">Confirmar</button>

    </form>
    <a class="btn btn-secondary mt-5" href="ver_vendas.php">Ver todas as Vendas</a>
    <br>
    <br>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
  include_once('partials/header.php');
?>