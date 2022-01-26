<?php

include ('dao/UserDAO.php');

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function listUsers(){
    $servername = 'localhost';
    $username = 'root';
    $password = "";
    $conn = new mysqli($servername, $username, $password, 'advertisement');
    if((getUsers($conn)) == 'empty'){
        redirect('index.php');
    } else {
        getUsers($conn);
    }

}
?>