<?php 
// ================================
// Creazione di un elemento (studente)
// ================================
$studenti = [ 
    "Francesco", // Index 0 
    "Luana",     // Index 1 
    "Analisa",   // Index 2 
    "Marco",     // Index 3 
    "Paolo",     // Index 4 
    "Davide",    // Index 5 
    "Carlo",     // Index 6 
    "Daniele"    // Index 7 
]; 

 // la funzione  count() ci dice quanti elementi esistono dentro  un array
$totaleStudenti = count($studenti); 
echo "Il numero totale degli studenti iniziale = " . $totaleStudenti . "<br>"; 

// Stampo l'ultimo elemento dell'Array o lista di studenti
echo "Lo studente con indice 4 della lista è " . $studenti[4] . "<br>"; 
echo "<hr>";

// ================================
// Aggiungere un elemento (studente)
// ================================

$studenti[] = "Fabio"; // Index 8
echo "<b>AGGIUNTA <br> </b> Abbiamo aggiunto un nuovo studente<br>"; 
echo "Ora l'ultimo studente è " . $studenti[8] . "<br>"; 

// Numero totale degli studenti dopo averli aggiunti
echo "Totale studenti aggiornato: " . count($studenti) . "<br>"; 

echo "<hr>";

// ================================ 
// Modificazione dello studente
// ================================ 
$studenti[2] = "Giovanni";
$studenti[4] = "Gabriele";

echo "<b>[Update]</b> I dati sono stati aggiornati <br>";
echo " Ora lo studente all\'indice 2 è diventato: " . $studenti[2];
echo " Ora lo studente all\'indice 2 è diventato: " . $studenti[4] . "<br>";

// ================================ 
// Eliminare un elemento (studente) 
// ================================ 
echo "Stampo il nome dello studente eliminato: " . $studenti[2] . "<br>";
echo "<b>ELIMINAZIONE <br> </b> Abbiamo eliminato uno studente con l'indice 2 " . $studenti[2] . "<br>"; 
array_splice($studenti, 2, 1); 
echo "Totale studenti aggiornato: " . count($studenti) . "<br>";
echo "<br>";
echo "<hr>";
echo "<br>"; 
?>
