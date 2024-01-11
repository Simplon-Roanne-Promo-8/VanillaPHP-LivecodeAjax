<?php
    require_once "../config/connexion.php"; 

    $preparedRequest = $connexion->prepare(
        "SELECT * FROM todo"
    );

    $preparedRequest->execute();

    $todos = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($todos);

