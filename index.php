<?php require_once __DIR__ . "/functions/functions.php"; ?>

<?php 

// # prenderemo i dati dal db al posto che da qui
$classes = [
    "Classe 1A" => [
        [
            "id" => 1,
            "nome" => "Marco",
            "cognome" => "Rossi",
            "anni" => 23,
            "voto_medio" => 8.5,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 2,
            "nome" => "Luca",
            "cognome" => "Verdi",
            "anni" => 27,
            "voto_medio" => 3.5,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 3,
            "nome" => "Giulia",
            "cognome" => "Bianchi",
            "anni" => 23,
            "voto_medio" => 5.5,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 4,
            "nome" => "Sofia",
            "cognome" => "Russo",
            "anni" => 27,
            "voto_medio" => 8.0,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 5,
            "nome" => "Andrea",
            "cognome" => "Ferrari",
            "anni" => 22,
            "voto_medio" => 7.5,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 2A" => [
        [
            "id" => 27,
            "nome" => "Francesca",
            "cognome" => "Ricci",
            "anni" => 27,
            "voto_medio" => 9.0,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 22,
            "nome" => "Matteo",
            "cognome" => "Moretti",
            "anni" => 23,
            "voto_medio" => 4.3,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 30,
            "nome" => "Alessandro",
            "cognome" => "Lombardi",
            "anni" => 27,
            "voto_medio" => 5.4,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 33,
            "nome" => "Elena",
            "cognome" => "Conti",
            "anni" => 22,
            "voto_medio" => 8.4,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 20,
            "nome" => "Valeria",
            "cognome" => "Gallo",
            "anni" => 27,
            "voto_medio" => 9.5,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 3A" => [
        [
            "id" => 31,
            "nome" => "Simone",
            "cognome" => "Fabbri",
            "anni" => 22,
            "voto_medio" => 6.9,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 32,
            "nome" => "Chiara",
            "cognome" => "Riva",
            "anni" => 27,
            "voto_medio" => 5.3,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 33,
            "nome" => "Lorenzo",
            "cognome" => "Orlando",
            "anni" => 22,
            "voto_medio" => 8.2,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 34,
            "nome" => "Marta",
            "cognome" => "Martini",
            "anni" => 22,
            "voto_medio" => 4.8,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 35,
            "nome" => "Giovanni",
            "cognome" => "Giuliani",
            "anni" => 27,
            "voto_medio" => 8.1,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 4A" => [
        [
            "id" => 46,
            "nome" => "Silvia",
            "cognome" => "De Luca",
            "anni" => 30,
            "voto_medio" => 4.2,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 47,
            "nome" => "Federico",
            "cognome" => "Costa",
            "anni" => 30,
            "voto_medio" => 5.1,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 48,
            "nome" => "Michele",
            "cognome" => "Cattaneo",
            "anni" => 22,
            "voto_medio" => 3.7,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 49,
            "nome" => "Anna",
            "cognome" => "Serra",
            "anni" => 30,
            "voto_medio" => 8.6,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 50,
            "nome" => "Antonio",
            "cognome" => "Cervi",
            "anni" => 30,
            "voto_medio" => 4.0,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
    "Classe 5A" => [
        [
            "id" => 61,
            "nome" => "Davide",
            "cognome" => "Ferrero",
            "anni" => 33,
            "voto_medio" => 8.7,
            "linguaggio_preferito" => "JS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 62,
            "nome" => "Sara",
            "cognome" => "Leoni",
            "anni" => 33,
            "voto_medio" => 4.1,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 63,
            "nome" => "Daniele",
            "cognome" => "Bertoni",
            "anni" => 33,
            "voto_medio" => 4.4,
            "linguaggio_preferito" => "HTML",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 64,
            "nome" => "Giada",
            "cognome" => "Ragusa",
            "anni" => 30,
            "voto_medio" => 5.0,
            "linguaggio_preferito" => "CSS",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
        [
            "id" => 65,
            "nome" => "Claudio",
            "cognome" => "Lanza",
            "anni" => 30,
            "voto_medio" => 6.7,
            "linguaggio_preferito" => "PHP",
            "immagine" => "https://source.unsplash.com/random/200x200?person",
        ],
    ],
];

$meteo = [ 
    "tempo" => "buono",
    "orario" => "normale"
];

$response = [
    "success" => true,
    "data" => [
        "classi" => $classes, 
        "meteo" => $meteo
    ] 
];


// ! recuperare dati da un file esterno 
// var_dump($output);

$output = json_encode($response);
header("Content-Type: application/json");
echo $output;







// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>PHP 8 JSON</title>

//     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
// </head>
// <body>
//     <main class="container">
//         <section class="row justify-content-center">
//             <div class="col-12">
//                 <h1 class="fw-bold text-center py-4">
//                     PHP 8 JSON
//                 </h1>
//             </div>
//         </section>
//     </main>

// </body>
// </html>


?>
