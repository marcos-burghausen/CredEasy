<?php

// namespace br\com\sicredi\projetoCredEasy\service;

require_once 'model/Emprestimo.php';
require_once 'model/Parcela.php';
require_once 'EmprestimoService.php'; 

// use br\com\sicredi\projetoCredEasy\model\Emprestimo;
// use br\com\sicredi\projetoCredEasy\model\Parcela;
// use br\com\sicredi\projetoCredEasy\service\EmprestimoService;

class ParcelaService {

    public function listaTodasAsParcelas(): array 
    {
        // consulta as parcelas banco de dados...
        $emprestimoService = new EmprestimoService();
        $listaDeEmprestimos = $emprestimoService->listaTodosOsEmprestimos();

        $parcelaJessica1 = new Parcela(1,2,150,'2022-05-15',$listaDeEmprestimos[2]);
        $parcelaJessica1->setStatusParcela('Paga');
        $parcelaJessica1->setDataPagamento('2022-05-15');
        $parcelaJessica1->setMulta(0.0);
        $parcelaJessica1->setValorPago(125.00);


        $parcelaJessica2 = new Parcela(2,2,125.00,'2022-06-15',$listaDeEmprestimos[2]);
        $parcelaJessica2->setStatusParcela('Atrasada');
        /*$parcelaJessica2->setDataPagamento('2022-05-15');
        $parcelaJessica2->setMulta(0.0);
        $parcelaJessica2->setValorPago(125.00);*/

        $parcelaJessica3 = new Parcela(3,2,125.00,'2022-07-15',$listaDeEmprestimos[2]);
        // ===============

        $parcelaMarcos1 = new Parcela(4,4,500.00,'2022-04-20',$listaDeEmprestimos[4]);
        $parcelaMarcos1->setStatusParcela('Paga');
        $parcelaMarcos1->setDataPagamento('2022-05-15');
        $parcelaMarcos1->setMulta(0.0);
        $parcelaMarcos1->setValorPago(125.00);

        $parcelaMarcos2 = new Parcela(5,4,500.00,'2022-05-20',$listaDeEmprestimos[4]);
        $parcelaMarcos2->setStatusParcela('Paga');
        $parcelaJessica2->setDataPagamento('2022-05-25');
        $parcelaJessica2->setMulta(5.00);
        $parcelaJessica2->setValorPago(505.00);

        $parcelaMarcos3 = new Parcela(6,4,500.00,'2022-06-20',$listaDeEmprestimos[4]);

        
        $listaDeParcelas = [
            $parcelaJessica1->getNumeroDaParcela() => $parcelaJessica1,
            $parcelaJessica2->getNumeroDaParcela() => $parcelaJessica2,
            $parcelaJessica3->getNumeroDaParcela() => $parcelaJessica3,
            $parcelaMarcos1->getNumeroDaParcela() => $parcelaMarcos1,
            $parcelaMarcos2->getNumeroDaParcela() => $parcelaMarcos2,
            $parcelaMarcos3->getNumeroDaParcela() => $parcelaMarcos3,
        ];

        return $listaDeParcelas;
    }

}

/*$teste = new ParcelaService();
var_dump($teste->listaTodasAsParcelas());*/