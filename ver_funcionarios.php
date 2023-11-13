<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>


<div class="container">
    <h1>Lista Funcionarios</h1>
<table class="table">
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereco</th>
            <th scope="col">Telefone</th>
            <th scope="col">Carga_Horario</th>
        </tr>


        <?php
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT cpf,nome,endereco,telefone,carga_horario FROM funcionarios');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td scope='row'>{$linha['cpf']}</td>
                <td> {$linha['nome']} </td>
                <td>{$linha['endereco']}</td>
                <td>{$linha['telefone']}</td>
                <td>{$linha['carga_horario']}</td>
                <td><a href='editar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar_funcionarios.php?cpf=$linha[cpf]'> <span class='material-symbols-outlined'>delete</span></a> </td>
                </tr>";
        }
        ?>
    </table>

    <p><a href="index_funcionarios.php" class="btn btn-secondary">Adicionar Funcionário</a></p>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
include_once('partials/footer.php');
?>