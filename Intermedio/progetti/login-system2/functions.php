<?php
// Crea la chiave di login
function createLoginKey(string $email, string $password): string
{
    return $email . "|" . $password;
    // es: => email@...|password123
}


// Cerca Utente
// Scorrere tutti gli utenti e verifica se esiste o uguale
function trovaUtente(string $loginKey, array $utenti): ?array
{
    foreach ($utenti as $utente) {
        $key = createLoginKey($utente["email"], $utente["password"]);

        if ($loginKey === $key) {
            return $utente;
        }
    }
    return null;
}


// Gestione del Ruolo con lo switch
// in base al ruolo mostra un messaggio diverso
// funzione mostraRuolo di tipo void con un parametro di tipo stringa

function mostraRuolo(string $ruolo): void
{
    switch ($ruolo) {
        case "admin":
            echo "<p>Accesso amministrativo completo. Hai i privilegi per gestire il sistema.</p><br>";
            break;
        case "docente":
            echo "<p>Benvenuto! Puoi creare, modificare e pubblicare nuovi contenuti</p>.<br>";
            break;
        case "utente":
            echo "<p>Bentornato! Puoi visualizzare i contenuti e interagire con la piattaforma.</p><br>";
            break;
        default:
            echo "<p>Ruolo non riconosciuto. Accesso limitato.</p><br>";
            break;
    }

}
