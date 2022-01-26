<?php
include "../dao/userDAO.php";

class userDAO
{

    public function getUser(int $id)
    {
        $sql = 'SELECT * FROM users WHERE id = :id';
    }

    public function insertUser(User $user, $conn){
        $sql = "INSERT INTO users (name) VALUES (?)";
        $stmt= $conn->prepare($sql);
        $stmt->bind_param("s", $user->getName());
        $stmt->execute();

    }


}