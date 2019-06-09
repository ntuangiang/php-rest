<?php

namespace Php\Framework\Http\Rest;

class UserRestful extends AbstractRestful
{
    public function __construct(\UserSchema $schema)
    {
        parent::__construct("v1/users", $schema);
    }

}
