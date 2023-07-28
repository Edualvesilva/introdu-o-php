<?php

$produto = readline("Qual o produto Desejado? "); 
$preco = readline("Qual o preço do produto? ");

if ($preco >= 1000 && $preco <= 1500){
//if (($preco >= 1000) && ($preco <= 1500)){
	$desconto = "10%";
}else {
	$desconto = "5% ";
}
 
echo $produto." está com desconto de ".$desconto;

?>