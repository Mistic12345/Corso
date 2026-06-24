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
  echo saluta("Moussa") . "<br>";          // Ciao Moussa
  echo saluta("Moussa", "en") . "<br>";    // Hello Moussa


function somma(int $num1, int $num2): int { 
    if ($num1 == 0 && $num2 == 0) {
        // Entrambi i numeri sono zero
        return 0; 
    }
    
    return $num1 + $num2;
}

echo somma(50, 20); 

?>