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

function somma(int $num1,int $num2 = 0): int
{
    return $num1 + $num2;
}

echo somma(525 + 52);
?>