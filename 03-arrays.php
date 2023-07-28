<?php
//03-arrays 

/* Objetivos: como declarar atribuir e acessar dados de vetores */

// Declaração do array (OPCIONAL)
// Inicialmente vazio
$pessoas = []; // ou $pessoas = array()

// Processo de atribuição de dados
//$pessoas[0] = "Jon oliva";
//$pessoas[1] = "David Gilmour";
//$pessoas[2] = "Ozzy Osbourne";

$pessoas[0] = readline("Qual será o primeiro nome? ");
$pessoas[1] = readline("Qual será o Segundo nome? ");
$pessoas[2] = readline("Qual será o terceiro nome? ");

// Saída de dados
echo "\nPrimeira pessoa: ".$pessoas[0];
echo "\nSegunda pessoa: ".$pessoas[1];
echo "\nTerceira pessoa: ".$pessoas[2];
?>
