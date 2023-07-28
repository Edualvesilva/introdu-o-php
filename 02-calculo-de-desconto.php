<?php
// 02 calculo de desconto


// entrada
// versão 1
//echo "Informe o produto:";
//$produto = readline();

// versão 02
$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto = readline ("Desconto em reais: ");

// processamento
$precoFinal = $precoInicial - $desconto;

// saída
echo "Preço final: ".$precoFinal;




?>