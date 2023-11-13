<?php
include_once('partials/header.php');
//url params query
if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
} else {
    header('location:ver_funcionarios.php');
}
$cpf = $_GET['cpf'];
?>

<?php
include_once('conexao.php');
?>

<div class="container">
    <form action="atualizar.php" method="post">
        <?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT cpf,nome,email,telefone FROM clientes where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> Nome: </label>
        <input type='text' id='nome' name='nome' class='form-control' value=$linha[nome] />

        <label for='' class='form-label'>Email:</label>
        <input type='text' id='email' name='email' class='form-control'value=$linha[email]  disabled />

        <label for='' class='form-label'> Telefone: </label>
        <input type='text' id='telefone' name='telefone' class='form-control' value=$linha[telefone]  />

        <label for='' class='form-label'>CPF:</label>
        <input type='text' id='cpf' name='cpf' class='form-control' value=$linha[cpf]  readonli />
        <!-- disable serve para mostrar o que tem no campo porem não vai conseguir mudar -->

        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>
        <!-- mt-2 é margin top  -->
        
       ";
        }
        ?>
    </form>
</div>

<?php
include_once('partials/footer.php')
?>