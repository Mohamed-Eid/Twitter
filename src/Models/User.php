<?php

namespace Bluex\Twitter;

class User
{

    public $id;
    public $name;
    public $username;

    public function __construct(
        string $id,
        string $name,
        string $username
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
    }
}
