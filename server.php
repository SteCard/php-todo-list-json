<?php

    $data = file_get_contents('data/todolist.json');

    $dataDecoded = json_decode($data, true);

/*
    OPERAZIONI ARRAY ASSOCIATIVO PHP
*/
    if(isset($_POST['newItem'])){

        // RECUPERO NEW_ITEM
        $newItem = $_POST['newItem'];

        $newItem['done'] = false;

        // INSERISCO DENTRO L'ARRAY IL NEW_ITEM
        array_push($dataDecoded, $newItem);

        // AGGIORNO IL FILE "TODOLIST.JSON"
        $data = file_put_contents('data/todolist.json', json_encode($dataDecoded));
    }

    header('Content-Type: application/json');

    // TRASFORMO L'ARRAY ASSOCIATIVO PHP IN OGGETTO JSON
    echo json_encode($dataDecoded);
?>