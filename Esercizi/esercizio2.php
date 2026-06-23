<?php
$spesa = [
    "Pizza",
    "Pasta",
    "Sushi",
    "Anguria",
    "Formaggio"
];

$totaleSpesa = count($spesa);

for ($elemento = 0; $elemento < $totaleSpesa; $elemento++) 
{
    echo "<li>Lista della Spesa " . $elemento . " : " . $spesa[$elemento] . "<br></li>";
}
?>