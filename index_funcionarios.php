<?php
 include_once('conexao.php');
?>
<div class="container">
        <h1>Criar novos funcionários</h1>
    <form action="cadastra_funcionarios.php" method="post">
               <label for="cpf"class="form-label">Cpf:</label>
        <input type="text" name="cpf" id="cpf" class="form-control"/>

               <label for="nome"class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"/>

                <label for="endereco"class="form-label">Endereço:</label>
        <input type="text" name="endereco" id="endereco" class="form-control"/>

                <label for="telefone"class="form-label">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control"/>

        <label for="carga_horario"class="form-label">Carga Horaria:</label>
        <input type="text" name="carga_horario" id="carga_horario" class="form-control"/>

                <button class="btn btn-primary mt-2" type="submit">Registrar</button>

    </form>
    <a class="btn btn-secondary mt-5" href="ver_funcionarios.php">Ver todos os funcionários</a>
    <br>
    <br>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
  include_once('partials/header.php');
?>