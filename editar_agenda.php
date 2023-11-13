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
    <form action="atualizar_funcionarios.php" method="post">
        <?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT funcao,data,horario FROM agenda where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
            
        <label for='' class='form-label'>CPF:</label>
        <input type='text' id='cpf' name='cpf' class='form-control' value=$linha[cpf]  readonli disabled />
        <!-- disabled serve para mostrar o que tem no campo porem não vai conseguir mudar -->

        <label for='' class='form-label'> Função: </label>
        <input type='text' id='funcao' name='funcao' class='form-control' value=$linha[funcao] />

        <label for='' class='form-label'>Data:</label>
        <input type='text' id='data' name='data' class='form-control'value=$linha[data]  />

        <label for='' class='form-label'>Horario:</label>
        <input type='text' id='horario' name='horario' class='form-control'value=$linha[horario] />

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