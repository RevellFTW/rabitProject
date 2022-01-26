<?php

class Ad
{
    public int $id;
    public int $userid;
    public string $title;


    public function getId(): int
    {return $this->id;}

    public function setId(int $id): void
    {$this->id = $id;}

    public function getUserid(): int
    {return $this->userid;}

    public function setUserid(int $userid): void
    {$this->userid = $userid;}

    public function getTitle(): string
    {return $this->title;}

    public function setTitle(string $title): void
    {$this->title = $title;}



}