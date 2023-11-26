<?php

include_once "bootstrap/init.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // displayInformation($_POST);
    $userName = $_POST["username"];
    $password = $_POST["password"];
    if(login($userName, $password)){
        echo "Successful Login";
    }else{
        displayMessage("error in Login");
    }
}

if (isset($_GET["logout"]) and $_GET["logout"] == 1) {
    logout();
}



if (isLoggedInUser()) {
    include BASE_PATH . "views/v_adm.php";
} else {
    include BASE_PATH . "views/v_auth.php";
}
