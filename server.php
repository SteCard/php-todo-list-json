<?php

    $data = file_get_contents('data/todolist.json');

    $dataDecoded = json_decode($data, true);

/*
    OPERAZIONI ARRAY ASSOCIATIVO PHP
*/

    header('Content-Type: application/json');

    // TRASFORMO L'ARRAY ASSOCIATIVO PHP IN OGGETTO JSON
    echo json_encode($dataDecoded);
?>