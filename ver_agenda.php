<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>


<div class="container">
    <h1>Lista Agendamento</h1>
<table class="table">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Clientes_CPF</th>
            <th scope="col">Função</th>
            <th scope="col">Data</th>
            <th scope="col">Horário</th>
        </tr>


        <?php
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT id,clientes_cpf,funcao,data,horario FROM agenda');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td scope='row'>{$linha['id']}</td>
                <td> {$linha['clientes_cpf']} </td>
                <td>{$linha['funcao']}</td>
                <td>{$linha['data']}</td>
                <td>{$linha['horario']}</td>
                <td><a href='editar_agenda.php?cpf=$linha[clientes_cpf]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar_agenda.php?cpf=$linha[clientes_cpf]'> <span class='material-symbols-outlined'>delete</span></a> 
                </td>
                </tr>";
        }
        ?>
    </table>

    <p><a href="index_agenda.php" class="btn btn-secondary">Fazer novo Agendamento</a></p>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
include_once('partials/footer.php');
?>