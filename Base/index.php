<?php
// Variabili, Tipi di dati e la concatenazione in PHP
$nome = "Paolo"; // variabile di tipo stringa
$cognome = "Basile"; // variabile di tipo stringa
$eta = 23; // variabile di tipo intero
$prezzoOrario = 23.14; // variabile di tipo float
$iscrizione = true; // variabile di tipo booleano(true o false)
$data_di_nascita = "21-12-2002"; // variabile di tipo data(string)


echo "Ciao, mi chiamo " . $nome . " " . $cognome . " e ho " . $eta . " anni. Il mio prezzo orario è di " . $prezzoOrario . " euro. La mia iscrizione è " . ($iscrizione ? "attiva" : "non attiva") . ". Sono nato il " . $data_di_nascita . ".";
