<?php

namespace App\User;

class UserRestful extends Restful
{
    public function __construct(\UserSchema $schema)
    {
        parent::__construct("v1/users", $schema);
    }

}
