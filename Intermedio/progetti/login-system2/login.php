<?php


// namespace dei file 
require_once "utenti.php";
require_once "functions.php";


// 💉 del file 
include "header.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 📧 dati form
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";


    //🔐 Creazione chiave login
    $loginKey = createLoginKey($email, $password);

    //🔎 Ricerca l'utente nel database
    $utente = trovaUtente($loginKey, getUtenti());

    echo "<h2>Risultato del login</h2>";

    if ($utente) {

        echo "
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Accesso effettuato!',
            text: 'Benvenuto {$utente['email']}',
            confirmButtonText: 'Continua'
        }).then(() => {

            // Gestione ruolo
            switch('{$utente['ruolo']}') {

                case 'admin':
                    window.location.href = 'admin.php';
                    break;

                case 'studente':
                    window.location.href = 'studente.php';
                    break;

                case 'docente':
                    window.location.href = 'docente.php';
                    break;

                default:
                    window.location.href = 'index.php';
            }

        });
        </script>
        ";
    } else {
        echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Accesso negato!',
                text: 'Verifica email e password.',
                confirmButtonText: 'Riprova'
            }).then(() => {
                window.location.href = 'index.php';
            });
            </script>
            ";
    }
}
