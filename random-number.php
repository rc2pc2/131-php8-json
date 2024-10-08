<?php 

    // require_once __DIR__ . "/functions/functions.php";

    header("Content-Type: application/json");

    $response = [
        "success" => true,
        "data" => random_int(1, 10)
    ];

    echo json_encode($response);
?>