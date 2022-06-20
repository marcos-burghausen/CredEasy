<?php

require_once 'EmprestimoService.php';


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
    <div class="container">
        <h1>Listagem de emprestimos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>VALOR</th>
                    <th>TAXA DE JUROS</th>
                    <th>DATA SOLICITAÇÃO</th>
                    <th>STATUS</th>
                    <th>CPF CLIENTE</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($emprestimos as $emprestimo) { ?>
                    <tr>
                        <td><?php echo $emprestimo->getId(); ?></td>
                        <td><?= $emprestimo->getValor(); ?></td>
                        <td><?= $emprestimo->getTaxaDeJuros() ?></td>
                        <td><?= $emprestimo->getDataDaSolicitacao() ?></td>
                        <td><?= $emprestimo->getStatus() ?></td>
                        <td><?= $emprestimo->getCpfCliente() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>