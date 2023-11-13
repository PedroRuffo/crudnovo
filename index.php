<?php
 include_once('conexao.php');
?>
<div class="container">
        <h1>Criar novos clientes</h1>
    <form action="cadastra.php" method="post">
               <label for="cpf"class="form-label">Cpf:</label>
        <input type="text" name="cpf" id="cpf" class="form-control"/>

               <label for="nome"class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"/>

                <label for="email"class="form-label">Email:</label>
        <input type="text" name="email" id="email" class="form-control"/>

                <label for="telefone"class="form-label">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control"/>

                <label for="senha"class="form-label">Senha:</label>
        <input type="text" name="senha" id="senha" class="form-control"/>

                <label for="confirmarsenha"class="form-label">Confirmar Senha:</label>
        <input type="password" name="confirmarsenha" id="confirmarsenha" class="form-control"/>

        <label for="tipo"class="form-label">Tipo:</label>
        <input type="number" name="tipo" id="tipo" class="form-control"/>

                <button class="btn btn-primary mt-2" type="submit">Registrar</button>

    </form>
    <a class="btn btn-secondary mt-5" href="ver_usuarios.php">Ver todos os clientes</a>
    <br>
    <br>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
  include_once('partials/header.php');
?>