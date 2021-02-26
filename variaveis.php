<?php
 
const CONSTANTE = "Isso é uma constante";
 
$nome = "Fulano de tal";
 
$idade = 18;
 
$anoNascimento =  date("Y") - $idade;
 
/*
* Exibir na pagina o nome do usuário
* e o seu ano de nascimento
*
* Exemplo: Óla, fulano de tal, você nasceu em 1988
*/
 
echo "Óla, " . $nome . " , você nasceu em " .  $anoNascimento;
