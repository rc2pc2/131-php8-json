<?php 

// credits Aliendroid8045 -- https://gist.github.com/Aliendroid8045

header("Content-Type: application/json");


if (isset($_GET["name"]) && !empty($_GET["name"])){
    // # da json a php => decodificare il JSON in un array associativo in PHP
    $animals = json_decode(file_get_contents("db/json-data.json"), true);
    

    $filteredAnimals = [];
    // % lo modifico come voglio
    foreach ($animals as $singleAnimal) {
        if ( str_contains(strtolower($singleAnimal["name"]), strtolower($_GET["name"]))){
            $filteredAnimals[] = $singleAnimal;
        };
    }

    echo json_encode($filteredAnimals);
} else {
    header("Content-Type: application/json");
    echo file_get_contents("db/json-data.json");
}


