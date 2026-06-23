<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corso PHP</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #e8ebed;
            color: #2d3748;
        }
        .container 
        {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .studente-box 
        {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            max-width: 500px;
            border-left: 5px solid #4bd687;
        }
        h3 
        {
            color: #2d3748;
            border-bottom: 2px solid #5a6983;
            padding-bottom: 8px;
            margin-top: 0;
        }
        ul 
        {
        list-style-type: none;
        padding-left: 0;
        }

    li 
    {
        margin-bottom: 6px;
    }
    </style>
</head>
<body>
    <div class="container">
    <div class="studente-box">
            <?php
         // Struttura corretta: array multidimensionale con due studenti
            $profileStudenti = [
            [
                "Nome" => "Paolo",
                "Corso" => "Php full-stack",
                "Stato" => "Iscritto",
                "Voto medio" => 10
            ],
            [
                "Nome" => "Alice",
                "Corso" => "C++",
                "Stato" => "Iscritto",
                "Voto medio" => 10
            ],
            [
                "Nome" => "Alessio",
                "Corso" => "C#",
                "Stato" => "Iscritto",
                "Voto medio" => 10
            ],
            [
                "Nome" => "Andrea",
                "Corso" => "C",
                "Stato" => "Iscritto",
                "Voto medio" => 10
            ],
            [
                "Nome" => "Alessia",
                "Corso" => "Python",
                "Stato" => "Iscritto",
                "Voto medio" => 10
            ]
        ];

        // Primo ciclo: scorre la lista degli studenti
        foreach ($profileStudenti as $studente) {
            // Apre il box HTML per lo studente corrente
            echo '<div class="studente-box">';
            echo "<h3>Profilo di: " . ($studente["Nome"]) . "</h3>";
            echo "<ul>";

            // Secondo ciclo (annidato): mostra le chiavi e i valori di ogni studente
            foreach ($studente as $proprieta => $valore) {
                if ($proprieta != "Nome") {
                    echo "<li>" . ($proprieta) . ": <strong>" . ($valore) . "</strong></li>";
                }
            }

            echo "</ul>";
            echo '</div>'; 
        }
        ?>
    </div>
    </div>
</body>
</html>
