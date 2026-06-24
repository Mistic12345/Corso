<?php

/*
function nomeF(){
 echo "testo"
}
*/


/*function saluta():void
{
    return "Ciao Come stai?";
}*/

  function saluta(string $nome, string $lingua = "it"): string 
  {
    return match($lingua) {
      "en" => "Hello $nome",
      "fr" => "Bonjour $nome",
      default => "Ciao $nome"
    };
  }

//saluta();

  // Chiamiamo la nostra funzione saluta
  echo saluta("Moussa");          // Ciao Moussa
  echo saluta("Moussa", "en");    // Hello Moussa

function somma(int $num1, int $num2): int { 
    $sum = $num1 + $num2; 
    return $sum; 
} 

echo "50+10 = " . somma(50, 10) . "<br>"; 
?>