<?php
 include_once('conexao.php');
?>
<div class="container">
        <h1>Fazer Agendamento</h1>
    <form action="cadastra_agenda.php" method="post">
               <label for="clientes_cpf"class="form-label">Cpf do Cliente:</label>
        <input type="text" name="clientes_cpf" id="clientes_cpf" class="form-control"/>

        <label for="funcao"class="form-label">Função:</label>
        <input type="text" name="funcao" id="funcao" class="form-control"/>

                <label for="data"class="form-label">Data:</label>
        <input type="text" name="data" id="data" class="form-control"/>

        <label for="horario"class="form-label">Horário:</label>
        <input type="text" name="horario" id="horario" class="form-control"/>

                <button class="btn btn-primary mt-2" type="submit">Confirmar</button>

    </form>
    <a class="btn btn-secondary mt-5" href="ver_agenda.php">Ver todos os Agendamentos</a>
    <br>
    <br>
    <a class="btn btn-dark" href="geral.php">Administrativo</a>
</div>

<?php
  include_once('partials/header.php');
?>