<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corso PHP</title>
</head>
<body>
    <?php
// $eta_database = 23;
// $eta_utente = 23; 

// if($eta_utente == $eta_database) 
// {
//     echo "<h1>L'eta inserita è corretta a quella nel database <strong>😎</strong></h1>";
//     echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa vel id placeat obcaecati officia aliquam illum eius ut distinctio. Expedita soluta quam exercitationem et distinctio facilis iusto alias possimus?</p>";
// }
// else
// {
//     echo "<i>L'eta inserita non è corretta nel database💀</i>";
// }

$etaUtente = 15;
$etaMinima = 18;

if($etaUtente >= $etaMinima)
    {
    echo "Acquisto autorizzato, Procedi al pagamento";
    }else{
    $anniMancanti = $etaMinima - $etaUtente;
    echo "Sei stato bannato dal nostro sito perchè ti mancano " ." ancora ". $etaMinima . "Anni";
    
    }
?>


</body>
</html>