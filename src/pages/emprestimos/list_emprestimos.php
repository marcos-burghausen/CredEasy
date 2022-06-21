<?php
// namespace br\com\sicredi\CredEasy\pages\emprestimo;

require_once '../../EmprestimoService.php';

// use br\com\sicredi\CredEasy\EmprestimoService;


$emprestimoService = new EmprestimoService();
$emprestimos = $emprestimoService->listaTodosOsEmprestimos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprestimo - Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Lista de empréstimos aprovados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF CLIENTE</th>
                    <th>VALOR</th>
                    <th>TAXA DE JUROS</th>
                    <th>DATA SOLICITAÇÃO</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emprestimos as $emprestimo) { ?>
                    <?php if($emprestimo->getStatus()=="APROVADO") {?>
                        <tr>
                            <td><?php echo $emprestimo->getId(); ?></td>
                            <td><?= $emprestimo->getCpfCliente() ?></td>
                            <td><?= $emprestimo->getValor(); ?></td>
                            <td><?= $emprestimo->getTaxaDeJuros() ?></td>
                            <td><?= $emprestimo->getDataDaSolicitacao() ?></td>
                            <td><?= $emprestimo->getStatus() ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="container text-center">
        <h1>Lista de empréstimos quitados</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>CPF CLIENTE</th>
              <th>VALOR</th>
              <th>TAXA DE JUROS</th>
              <th>DATA DE SOLICITAÇÃO</th>
              <th>STATUS</th>
              <th>DATA DE QUITAÇÃO</th>
              <th>VALOR FINAL</th>

            </tr>
          </thead>

          <tbody>
            <?php foreach ($emprestimos as $emprestimo) { ?>
              <?php if($emprestimo->getStatus()==="QUITADO") {?>
                <tr>
                  <td><?php echo $emprestimo->getId(); ?></td>
                  <td><?php echo $emprestimo->getCpfCliente(); ?></td>
                  <td><?php echo $emprestimo->getValor(); ?></td>
                  <td><?php echo $emprestimo->getTaxaDeJuros(); ?></td>
                  <td><?php echo $emprestimo->getDataDaSolicitacao(); ?></td>
                  <td><?php echo $emprestimo->getStatus(); ?></td>
                  <td><?php echo $emprestimo->getDataQuitacao(); ?></td>
                  <td><?php echo $emprestimo->getValorFinal(); ?></td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>

</body>
</html>