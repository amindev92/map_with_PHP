<?php

include "bootstrap/init.php";

$location = false;
if(isset($_GET["loc"]) and is_numeric($_GET["loc"])){
    $params = $_GET;
    $location = getLocation($params);
}

include BASE_PATH . "views/v_index.php";