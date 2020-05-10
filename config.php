<?php

// config vars
$base_url = "http://localhost/www/pw-proiect-git/pw-proiect/";
$user = 'root';
$pass = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=plots', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}