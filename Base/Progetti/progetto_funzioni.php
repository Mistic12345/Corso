<?php

// Funzione(array) che con restituisce la lista degli studenti 
function listaStudentiDetagliata(): array
{
    return [
        [
            "nome" => "Paolo",
            "cognome" => "Basile",
            "eta" => 26,
            "email" => "b.paolo@gmail.com",
            "telefono" => 3214569870,
            "voti" => [28, 30, 27]
        ],
        [
            "nome" => "Diana",
            "cognome" => "Friptuleac",
            "eta" => 32,
            "email" => "dianaf@gmail.com",
            "telefono" => 325654585,
            "voti" => [27, 30, 26]
        ],
        [
            "nome" => "Giovanni",
            "cognome" => "Lombardi",
            "eta" => 21,
            "email" => "giovannilombardi005@gmail.com",
            "telefono" => 34343434343,
            "voti" => [25, 28, 30]
        ],
        [
            "nome" => "Ilaria",
            "cognome" => "Celentano",
            "eta" => 32,
            "email" => "ilaria.celentano1@gmail.com",
            "telefono" => 123456789,
            "voti" => [20, 30, 24]
        ],
        [
            "nome" => "Pamela",
            "cognome" => "Liberati",
            "eta" => 38,
            "email" => "pamelaliberati@gmail.com",
            "telefono" => 3212345433,
            "voti" => [28, 25, 26]
        ],
        [
            "nome" => "Anna",
            "cognome" => "Rossi",
            "eta" => 25,
            "email" => "annarossi@gmail.com",
            "telefono" => 3478546577,
            "voti" => [23, 25, 18,]
        ],
        [
            "nome" => "Marco",
            "cognome" => "Gulino",
            "eta" => 27,
            "email" => "marcogulino@gmail.com",
            "telefono" => 3214569870,
            "voti" => [27, 29, 30]
        ],
        [
            "nome" => "Alessia",
            "cognome" => "Pietrini",
            "eta" => 18,
            "email" => "pietrinialessia@gmail.com",
            "telefono" => 3214231421,
            "voti" => [28, 30, 12]
        ],
        [
            "nome" => "Alessio",
            "cognome" => "Nascari",
            "eta" => 24,
            "email" => "nascarialessio@gmail.com",
            "telefono" => 34214213,
            "voti" => [38, 7, 8]
        ],
        [
            "nome" => "Francesco",
            "cognome" => "Carmi",
            "eta" => 21,
            "email" => "carmifrancesco@libero.it",
            "telefono" => 3521321421,
            "voti" => [20, 3, 12]
        ],
        [
            "nome" => "Ludovica",
            "cognome" => "Cannabis",
            "eta" => 21,
            "email" => "cannabisludovicasparita@gmail.com",
            "telefono" => 6312421,
            "voti" => [60, 40, 80]
        ],
        [
            "nome" => "Paolo",
            "cognome" => "Mari",
            "eta" => 53,
            "email" => "paolo.mari@gmail.com",
            "telefono" => "3393339999",
            "voti" => [5, 4, 3,]
        ],
        [
            "nome" => "Fabio",
            "cognome" => "Cassarà",
            "eta" => 57,
            "email" => "fcassara2@gmail.com",
            "telefono" => "333-1234567",
            "voti" => [8, 9, 7, 10]
        ]
    ];
}


/*
Funzione mediaVoti
------------------------
Calcola la media dei voti di uno studente,

parametri:
$voto -> array per tutti i voti

: float 
significa che la funzione restuisce un numero con le virgole(decile).
*/
function mediaVoti(array $voto): float
{
    // array_sum() somma tutti gli elementi dell'array
    $somma = array_sum($voto);

    // count() conta quanti elementi sono presenti
    // select cout(voti) from studenti
    $numeroVoti = count($voto);

    // Restituisce la media 
    return $somma / $numeroVoti;
}

// ----------------------------Fine BackEnd----------------------------


// -------------------------------Fontend-------------------------------


/*
    Funzione che genera Card Studente

    Riceve un singolo studente e genera un (card in HTML).

    Parametro:
    $studente -> array associativo contiene i dati dello studente 

    : string 
    restituisce una stringa HTNL
*/
function generaCardStudente(array $studente): string
{
    // Calcolo della media
    $media = mediaVoti($studente["voti"]);

    // Trasformazione dell'array dei voti in una stringa
    // [8, 9, 7, 10] => "8, 9, 7, 10"
    $votiString = implode(", ", $studente["voti"]);

    return "
    <div style='
        background: rgba(30, 41, 59, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 50px;
        border-radius: 24px;
        font-family: system-ui, -apple-system, sans-serif;
        box-shadow: 0 10px 30px rgba(255, 0, 0, 0.49);
        border: 0.5px solid rgb(255, 5, 5);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 16px;
    '>
        <div>
            <div style='display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;'>
                <h2 style='color: #ffffff; margin: 0; font-size: 1.4rem; font-weight: 700; letter-spacing: -0.025em; line-height: 1.2;'>
                    {$studente['nome']} - {$studente['cognome']}
                </h2>
            </div>

            <div style='display: flex; flex-direction: column; gap: 12px; margin-top: 20px;'>
                <p style='margin: 0; color: #94a3b8; font-size: 0.9rem; display: flex; flex-direction: column;'>
                    <span style='color: #64748b; font-size: 0.75rem; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em; margin-bottom: 2px;'>Età:</span>
                    <span style='color: #cbd5e1; font-weight: 500;'>{$studente['eta']}</span>
                </p>

                <p style='margin: 0; color: #94a3b8; font-size: 0.9rem; display: flex; flex-direction: column;'>
                    <span style='color: #64748b; font-size: 0.75rem; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em; margin-bottom: 2px;'>Email:</span>
                    <a href='mailto:{$studente['email']}' style='color: #38bdf8; text-decoration: none; word-break: break-all;'>
                        {$studente['email']}
                    </a>
                </p>

                <p style='margin: 0; color: #94a3b8; font-size: 0.9rem; display: flex; flex-direction: column;'>
                    <span style='color: #64748b; font-size: 0.75rem; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em; margin-bottom: 2px;'>Telefono:</span>
                    <span style='color: #cbd5e1;'>{$studente['telefono']}</span>
                </p>

                <p style='margin: 0; color: #94a3b8; font-size: 0.9rem; display: flex; flex-direction: column;'>
                    <span style='color: #64748b; font-size: 0.75rem; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em; margin-bottom: 4px;'>Voti:</span>
                    <span style='color: #e2e8f0; font-family: monospace; font-size: 0.95rem; background: rgba(15, 23, 42, 0.4); padding: 6px 12px; border-radius: 8px; width: fit-content; border: 1px solid rgba(255,255,255,0.03);'>
                        {$votiString}
                    </span>
                </p>
            </div>
        </div>

        <div style='margin-top: 12px; padding-top: 16px; border-top: 1px solid rgba(255, 255, 255, 0.06); display: flex; justify-content: space-between; align-items: center;'>
            <span style='color: #64748b; font-size: 0.8rem; text-transform: uppercase; font-weight: 600; letter-spacing: 0.05em;'>Media voti:</span>
            <span style='color: #10b981; background: rgba(16, 185, 129, 0.1); font-weight: 700; font-size: 1.25rem; padding: 4px 14px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.02);'>" . number_format($media, 2) . "</span>
        </div>
    </div>
    ";
}


// Funzione principale ---------------------------------------------

// Richiama la funzione dichiarata prima
$studenti = listaStudentiDetagliata();

// Inject del reset dello sfondo generale per rendere l'esperienza scura immersiva
echo "<style>body { background-color: #0f172a; margin: 0; padding: 20px; }</style>";

//Titolo della pagina
echo "<h1 style ='text-aligne: center;
                font-family: Arial, sans-serif;
                color: #636363;
                margin-botton: 30px;
'>Elenco Studenti</h1>";



// Css Grid
echo "<div style='display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px; max-width: 1400px; margin: 60px auto; padding: 0 24px; box-sizing: border-box;'>";

/*
|--------------------------------------------------------------------------
| foreach
|--------------------------------------------------------------------------
| Scorre tutti gli elementi dell'array.
|
| Ad ogni ciclo:
| - prende uno studente
| - genera la card HTML
| - la stampa a schermo
|--------------------------------------------------------------------------
*/
foreach ($studenti as $studente) {

    echo generaCardStudente($studente);
}

// Chiusura del contenitore
echo "</div>";
