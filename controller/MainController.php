<?php
include ('dao/UserDAO.php');
include ('dao/AdDAO.php');
function listUsers(){
    $db = connect();
    getUsers($db);
}
function listAds(){
    $db = connect();
    getAds($db);
}
function connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    return new mysqli($servername, $username, $password, 'advertisement');
}
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>