<?php

try {
    $connexion = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8','root','', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Throwable $th) {
    die('erreur db');
}