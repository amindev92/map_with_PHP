<?php

function isLoggedInUser(){
    return $_SESSION["login"] ?? 0;
}


function login($username, $password){
    global $admins;
    if(array_key_exists($username, $admins) and $admins[$username] == $password){
        $_SESSION["login"] = 1;
        return true;
    }
    return false;
}


function logout() {
    unset($_SESSION["login"]);
}
