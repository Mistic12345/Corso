<?php
include 'header.php';
?>

<body>
    <div class="container">

        <h1>Login System 1</h1>



    <!--form: definisce il modulo, action=login.php con il metodo =Post-->

<form action="login.php" method="post">

<label for="email">Indirizzo Email:</label>

<!--type="email_utente": fondamentale.-->
<input type="email" name="email_utente" placeholder="Es. mario.rossi@exemple.com" id="email" required>

<label for="password">Password:</label>

<input type="password" name="password_utente" id="password">

<button type="submit">Accedi</button>
</form>

<?php
//If: Controlla se la pagina è stata caricata ed eseguita dal invio dall'invio del form
// if($_SERVER["REQUEST_METHOD"] == "POST") contiene il metodo usato per la richiesta attuale (GET,POST)
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Contengono i dati inviati dal utente
    $email = $_POST["email_utente"];
    $password = $_POST["password_utente"];

    // Dati del Database
    $emailCorrente = "studente@gmail.com";
    $passwordCorrente = "password@123";


    //If: Condizionale: l'operatore '===' verifica se c'è l'uguaglianza dei e dai dati degli utenti
    if($email === $emailCorrente && $password === $passwordCorrente)
        {
            echo "<div class='messaggio1'>";
            echo "Login Confermato: Benvenuto in Laravel";
            echo "</div>";
        }
        elseif($email != $emailCorrente && $password === $passwordCorrente)
        {
            echo "<div class=''>";
            echo "Email sbagliata";
            echo "</div>";
        }
        elseif($email === $emailCorrente && $password != $passwordCorrente)
        {
            echo "<div class=''>";
            echo "Password sbagliata";
            echo "</div>";
        }
        else{
            echo "<div class='messaggio2>";
            echo "Errore! Verifica le tue credenziali";
            echo "</div>";
        }
}


?>


    </div>
</body>
</html>