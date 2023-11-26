<?php

include "../bootstrap/init.php";

if(!isAjaxRequest()){
    displayMessage("Invalid Request!");
}

if(addLocationToDB($_POST)){
    echo 'Save Successfully';
}else{
    echo 'Please check values';
}