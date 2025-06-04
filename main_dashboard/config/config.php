<?php
// config/database.php

$host = "localhost"; 
$dbname = "proyecto";
$username = "root"; 
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {

    error_log("Error de conexión a la base de datos: " . $e->getMessage());
    die("Hubo un problema al conectar con la base de datos. Por favor, inténtalo más tarde.");
}

?>