<?php

class Member
{
    public $username;
    public $email;

    public $password;

    public function __construct($_username, $_password)
    {

        $this->username = $_username;

        $this->password = $_password;

    }
}