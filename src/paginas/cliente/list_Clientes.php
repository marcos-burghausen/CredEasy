<?php
// require_once '../../Modelos/Cliente.php';
require_once 'ClienteService.php';

// use br\com\CredEasy\src\service\ClienteService;

$clienteService = new ClienteService();
$clientes = $clienteService->listaTodosOsClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes - Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listagem de Clientes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>PROFISSÃO</th>
                    <th>RENDA</th>
                    <th>CEP</th>
                    <th>RUA</th>
                    <th>NÚMERO</th>
                    <th>BAIRRO</th>
                    <th>CIDADE</th>
                    <th>ESTADO</th>
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