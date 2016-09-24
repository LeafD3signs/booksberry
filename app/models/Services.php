<?php
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

// Setup the database service
$di->set(
    "db",
    function () {
        return new DbAdapter(
            [
                "host"     => "localhost",
                "username" => "root",
                "password" => "",
                "dbname"   => "phalcon_test",
            ]
        );
    }
);