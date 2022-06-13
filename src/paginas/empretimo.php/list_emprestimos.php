<?php
require_once '../../Modelos/Empretimo.php';

use br\com\CredEasy\src\Modelos\Emprestimo;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Emprestimos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listagem de Emprestimos</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>VALOR</th>
                    <th>TAXA DE JUROS</th>
                    <th>DATA SOLICITAÇÃO</th>
                    <th>STATUS</th>
                    <th>CPF CLIENTE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente->getNome(); ?></td>
                        <td><?= $cliente->getEmail() ?></td>
                        <td><?= $cliente->getCpf() ?></td>
                        <td><?= $cliente->getTelefone() ?></td>
                        <td><?= $cliente->getProfissao() ?></td>
                        <td><?= $cliente->getRenda() ?></td>
                        <td><?= $cliente->getCep() ?></td>
                        <td><?= $cliente->getRua() ?></td>
                        <td><?= $cliente->getNumero() ?></td>
                        <td><?= $cliente->getBairro() ?></td>
                        <td><?= $cliente->getCidade() ?></td>
                        <td><?= $cliente->getEstado() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>