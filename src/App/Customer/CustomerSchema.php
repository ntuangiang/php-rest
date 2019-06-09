<?php


namespace Php\Framework\Http\Rest;


use Php\Framework\Db\Mysql\MysqlSchema;

class CustomerSchema extends MysqlSchema
{
    public function __construct()
    {
        parent::__construct("customers", "customer_id");
    }

    public function relationships() {
        $relation = array(\UserSchema::class);

        $relation = array(
            array(
                MysqlSchema::SCHEMA_NAME => \UserSchema::class,
                MysqlSchema::FOREIGN_KEY => "user_id=user_id",
                MysqlSchema::JOIN_METHOD => MysqlSchema::INNER_JOIN,
                MysqlSchema::JOIN_NAME => "aa"
            )
        );

        return $relation;
    }
}