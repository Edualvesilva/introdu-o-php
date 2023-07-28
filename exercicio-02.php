<?php 

// *prótotipo de chatbot *//
echo "== Chatbot da empresa Biribinha ==\n"; 
echo "Opções válidas:\n";
echo "1 - Informação\n";
echo "2 - Reclamação\n";
echo "3 - Elogios\n";
echo "4 - Status\n";

$opcao = readline("Digite uma opção: ");

// Condicional encadeada
switch ($opcao) {
	case 1:
	$resultado = "Legal, o que deseja saber? ";
break;

  case 2:
   $resultado = "puxa... que pena, o que houve? ";
   break;
   
   case 3:
   $resultado = "Bacana, pode falar ";
   break;
   
   case 4 :
   $resultado = "Ok, um momento enquanro verifico.... ";
   break;
   
   default:
   $resultado = "hum não entendi... vou chamar a Valeska";
   break;
}

echo ($resultado)
?>