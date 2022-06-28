<?php

class User
{
    public $id;
    public $email;
    public $password;
    public $created_at;

    function __construct($id = null, $email = null, $password = null, $created_at = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = $created_at;
    }
}
