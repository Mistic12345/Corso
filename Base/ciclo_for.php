<?php
$studenti = [ 
    "Francesco", // Index 0 
    "Luana",     // Index 1 
    "Annalisa",   // Index 2 
    "Marco",     // Index 3 
    "Paolo",     // Index 4 
    "Davide",    // Index 5 
    "Carlo",     // Index 6 
    "Daniele",   // Index 7 
    "Fabio",     //Index 8
    "Gabriel"    //Index 9
]; 

/*for(condizione)
{

}

*/

// Operatori +; -; /; *
//$i = $i + 1

$totaleStudenti = count($studenti);


for ($i = 0; $i < $totaleStudenti; $i++) 
{ 
    echo "<li>Studente in posizione " . $i . ": " . $studenti[$i] . "<br></li>"; 
}
