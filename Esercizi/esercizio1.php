 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
    $nomeUtente = "Paolo";
    $nomeDatabase = "Paolo";
    $passwordUtente = "Basile";
    $passwordDatabase = "Basile";

if($nomeUtente == $nomeDatabase && $passwordUtente == $passwordDatabase)
    {
 echo "Le credenziali sono valide!";
}elseif($nomeUtente != $nomeDatabase && $passwordUtente == $passwordDatabase)
{
    echo "Il nome utente è diverso dal nostro database";
}elseif($nomeUtente == $nomeDatabase && $passwordUtente != $passwordDatabase)
{
    echo "La password è sbagliata inserisci una password valida";
}else 
{
    echo "Le credenziali sono errate";
}
    ?>
 </body>
 </html>