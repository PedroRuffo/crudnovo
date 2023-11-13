<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>


<div class="container">
    <h1>Lista Clientes</h1>
<table class="table">
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>


        <?php
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT cpf,nome,email,telefone FROM clientes');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td scope='row'>{$linha['cpf']}</td>
                <td> {$linha['nome']} </td>
                <td>{$linha['email']}</td>
                <td>{$linha['telefone']}</td>
                <td><a href='editar_usuarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar.php?cpf=$linha[cpf]'> <span class='material-symbols-outlined'>delete</span></a> </td>
                </tr>";
        }
        ?>
    </table>

    <p><a href="index.php" class="btn btn-secondary">Adicionar cliente</a></p>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
include_once('partials/footer.php');
?>