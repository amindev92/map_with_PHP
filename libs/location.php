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

function  getLocations($params = []) {
    global $pdo;
    $condition = "";
    if (isset($params["status"]) and in_array($params["status"],[0, 1])) {
        $condition = "WHERE status = {$params["status"]}";
    }
    $sqlCommand = "SELECT * FROM location $condition";
    $stmt = $pdo->prepare($sqlCommand);
    $stmt -> execute();
    $locations = $stmt -> fetchAll(PDO::FETCH_OBJ);
    return $locations;
}

function getLocation($params = []){
    global $pdo;
    $locId = $params["loc"];
    $sqlCommand = "SELECT * FROM location WHERE id = :id";
    $stmt = $pdo->prepare($sqlCommand);
    $stmt->bindValue(":id", $locId);
    $stmt -> execute();
    $location = $stmt -> fetch(PDO::FETCH_OBJ);
    return $location;
}

function toggleStatusLocation($id){
    global $pdo;
    $sqlCommand = "UPDATE location SET status = 1 - status WHERE id = :id";
    $stmt = $pdo->prepare($sqlCommand);
    $stmt->bindValue(":id", $id);
    $stmt -> execute();
    return $stmt -> rowCount();
}