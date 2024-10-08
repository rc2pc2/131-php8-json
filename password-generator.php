<?php 
    require_once __DIR__ . "/functions/functions.php";

    header("Content-Type: application/json");

    if (isset($_GET["length"]) && !empty($_GET["length"])){
        $response = [
            "success" => true,
            "data" => generatePassword($_GET["length"])
        ];

        echo json_encode($response);
    } else {
        $response = [
            "success" => false,
        ];

        http_response_code(404);
    }
?>