<?php

include_once "bootstrap/init.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // displayInformation($_POST);
    $userName = $_POST["username"];
    $password = $_POST["password"];
    if(login($userName, $password)){
        echo "Successful Login";
    }else{
        echo("error in Login");
    }
}

if (isset($_GET["logout"]) and $_GET["logout"] == 1) {
    logout();
}


if (isLoggedInUser()) {
    $params = null;
    if (isset($_GET["status"]) and is_numeric($_GET["status"])) {
        $params = $_GET;
        // displayInformation($params);
    }

    $locations = getLocations($params);
    include BASE_PATH . "views/v_adm.php";
    // displayInformation($locations);
} else {
    include BASE_PATH . "views/v_auth.php";
}
