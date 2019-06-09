<?php

namespace App\User;

use Php\Framework\Db\Mysql\MysqlSchema;

class UserSchema extends MysqlSchema
{
    public function __construct()
    {
        parent::__construct("users", "user_id", UserInterface::class);
    }

}