<?php 
    $todoList = file_get_contents("../db/todo-list.json");

    // # se arriva una richiesta di inserire un nuovo todoitem
    if (isset($_POST["newTodoItem"]) && !empty($_POST["newTodoItem"])){
        $convertedTodos = json_decode($todoList);
        $convertedTodos[] = $_POST["newTodoItem"];
        // array_push($convertedTodos, $_POST["newTodoItem"]);

        $todoList = json_encode($convertedTodos);

        file_put_contents("../db/todo-list.json", $todoList);
    }

    header("Content-Type: application/json");
    echo $todoList;
?>