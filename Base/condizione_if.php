<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condizione if in PHP</title>
</head>
<body>
    <?php
    $totaleSpesa = 120; // in Euro
    $tipoCliente = "Gold" ;
    if($tipoCliente == "Gold")
        {
            $totaleScontatoGold = $totaleSpesa - ($totaleSpesa * 0.50); // 50% di sconto        
            echo "Cliente premium Gold! Hai guadagnato il 50% dello sconto. il suo prezzo finale è " . $totaleScontatoGold . "€";
        }elseif($tipoCliente == "Silver")
        {
             $totaleScontatoSilver = $totaleSpesa - ($totaleSpesa * 0.20); // 20% di sconto        
            echo "Cliente premium Silver! Hai guadagnato il 20% dello sconto. il suo prezzo finale è " . $totaleScontatoSilver . "€";
        }else
        {
            echo "Nessuno sconto per i clienti Standard";
        }
    ?>
</body>
</html>