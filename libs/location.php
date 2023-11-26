<?php


function addLocationToDB($locationData)
{
    global $pdo;
    $sqlCommand = "INSERT INTO location (title, type, lat, lng) VALUES (:title, :type, :lat, :lng)";
    $stmt = $pdo->prepare($sqlCommand);
    $stmt->bindValue(":title", $locationData["title"]);
    $stmt->bindValue(":type", $locationData["type"]);
    $stmt->bindValue(":lat", $locationData["lat"]);
    $stmt->bindValue(":lng", $locationData["lng"]);
    $stmt -> execute();
    return $stmt -> rowCount();
}
