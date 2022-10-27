<?php

//connection a la base

try{
    $db = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOExeption $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}
?>