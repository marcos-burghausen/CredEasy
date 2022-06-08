<?php

require_once 'index.php';

$primeiraConta = new Cliente('Marcos', 'marcos@gmail.com', '123456', '123.456.789-10', '51998213663', 'assistente', 10000, '93.900-000', 'das colinas', '87', 'jardim', 'ivoti', 'RS');

$primeiraConta -> depositar(300);
$primeiraConta -> sacar(100);


print_r($primeiraConta);