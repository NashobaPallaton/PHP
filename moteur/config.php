<?php
require('./vendor/autoload.php');
session_start();
/**
 * create table articles (id int primary key auto_increment, title varchar(255), author varchar(255), content text, description text, imageUrl text, publishedAt datetime;
 */

try {
    $db = new PDO("mysql:host=localhost;dbname=test", 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}