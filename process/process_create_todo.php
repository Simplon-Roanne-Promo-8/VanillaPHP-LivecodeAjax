<?php 
// date_default_timezone_set('Europe/Paris');

include '../config/debug.php';

if (!empty($_POST['content'])) {

    require_once '../config/connexion.php';

    $preparedRequest = $connexion->prepare(
        "INSERT INTO todo (content, created_at) VALUES (?,?)"
    );

    $preparedRequest->execute([
        $_POST['content'],
        date("Y-m-d H:i:s")
    ]);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>