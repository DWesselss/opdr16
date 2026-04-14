<?php
$host = 'localhost';
$db   = 'ja';
$user = 'root';
$pass = 'root';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

$titel = "Test item";
$omschrijving = "Dit is een test.";

$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);

echo "Insert gelukt (als je geen error ziet).";