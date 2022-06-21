<?php
require_once '../../model/Parcela.php';
require_once '../../ParcelaService.php';

// use br\com\sicredi\projetoCredEasy\service\ParcelaService;

$parcelaService = new ParcelaService();
$listaDeParcelas = $parcelaService->listaTodasAsParcelas();


?>

<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Parcelas - Listagem</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
      <div class="container text-center">
          <h1>Lista de Parcelas</h1>
          <table class="table table-striped ">
              <thead>
                  <tr>
                      <th>N° DA PARCELA</th>
                      <th>ID EMPRÉSTIMO</th>
                      <th>VALOR DA PARCELA</th>
                      <th>DATA DE VENCIMENTO</th>
                      <th>STATUS</th>
                      <th>AÇÕES</th>
                      <th>DATA DE PAGAMENTO</th>
                      <th>MULTA POR ATRASO</th>
                      <th>VALOR PAGO</th>           
                  </tr>
              </thead>
              <tbody>
              <?php foreach ($listaDeParcelas as $parcela) { ?>
                  <tr>
                    <td><?php echo $parcela->getNumeroParcela(); ?></td>
                    <td><?php echo $parcela->getIdEmprestimo(); ?></td>
                    <td><?php echo "R$" .$parcela->getValor(); ?></td>
                    <td><?php echo $parcela->getDataVencimento(); ?></td>

                    <?php if($parcela->getStatus()==="PAGA"){?> 
                        <td class="bg-success p-2 text-white"> <?php echo $parcela->getStatus(); ?></td>
                    <?php } ?>

                    <?php if($parcela->getStatusParcela()==="ATRASADA"){ ?> 
                        <td class="bg-danger p-2 text-white"> <?php echo $parcela->getStatus(); ?></td>                  
                    <?php } ?>
                    
                    <?php if($parcela->getStatus()==="EM ABERTO"){ ?> 
                        <td> <?php echo $parcela->getStatus(); ?></td>                  
                    <?php } ?>

                    <td><?php if($parcela->getStatus()=== "ABERTA"){ ?> 
                        <button>Pagar</button>
                        <?php } ?>
                    </td>

                  </tr>
                <?php } ?>
              </tbody>
          </table>
      </div>
  </body>

</html>