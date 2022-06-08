<?php
require_once '../../Modelos/Cliente.php';
require_once '../../service/ClienteService.php';

use br\com\sicredi\src\service\ClienteService;

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
                    <th>CPF</th>
                    <th>NOME</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?= $cliente->getCpf() ?></td>
                        <td><?php echo $cliente->getNome(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>