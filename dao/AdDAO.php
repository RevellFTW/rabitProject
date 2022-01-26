<?php

class AdDAO
{
    public function getAd(int $id, $conn)
    {
        $sql = 'SELECT * FROM advertisements WHERE id = :id';
        return $conn->query($sql);
    }
}