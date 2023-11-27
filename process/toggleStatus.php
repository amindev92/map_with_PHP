<?php

include "../bootstrap/init.php";

if(!isAjaxRequest()){
    displayMessage("Invalid Request!");
}

if (is_null($_POST['locationId']) and !is_numeric($_POST['locationId'])) {
    echo "Error in Recienve Data";
}else{
    $result = toggleStatusLocation($_POST["locationId"]);
    echo $result;
}