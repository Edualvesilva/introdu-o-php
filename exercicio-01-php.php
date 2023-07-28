<?php

$uc = readline("Qual é esta uc/curso: ");
$cargaHoraria = readline("Qual a carga horaria dessa uc: ");


$limitedefaltas = $cargaHoraria / 4 ;

echo "seu limite de faltas é de ".$limitedefaltas;
echo PHP_EOL;
echo "para UC/curso: ".$uc;
echo PHP_EOL;
echo "com carga horaria de ".$cargaHoraria;

?>