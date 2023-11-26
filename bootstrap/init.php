<?php

session_start();
include "constants.php";
include BASE_PATH . "bootstrap/config/config.php";
include BASE_PATH . "libs/helpers.php";
include BASE_PATH . "libs/location.php";
include BASE_PATH . "libs/auth.php";


defined("BASE_PATH") or displayMessage("Permission Denied!");



try {
    $pdo = new PDO("mysql:host=$databaseConfig->host;dbname=$databaseConfig->dbname", $databaseConfig->userName, $databaseConfig->password);
} catch (PDOException $e) {
    displayMessage('Connection Fialed' . $e->getMessage());
    // echo 'Connection Failed' . $e -> getMessage();
}
