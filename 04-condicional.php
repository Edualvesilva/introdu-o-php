<?php
// 04-condicional 

// *prótotipo de chatbot *//
echo "== Chatbot da empresa Biribinha ==\n"; 
echo "Opções válidas:\n";
echo "1 - Informação\n";
echo "2 - Reclamação\n";
echo "3 - Elogios\n";
echo "4 - Status\n";

$opcao = readline("Digite uma opção: ");

// Condicional encadeada
if ($opcao == 1){
	$resultado = "Legal, o que deseja saber? ";
} elseif ($opcao == 2) {
	$resultado = "Puxa, que pena... o que houve? "; 
}elseif($opcao == 3){
	$resultado = "Bacana, pode falar";
} elseif ($opcao == 4){
	$resultado = "ok, um momento enquanto eu verifico...";
} else {
	$resultado = "Lascou, vou chamar a Valeska ";
}

echo ($resultado)
?>