<?php
/**
 * Created by PhpStorm.
 * User: Dnvcomp
 * Date: 12.04.2019
 * Time: 22:52
 */

namespace shop;


use RedUNIT\Blackhole\Debug;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config.db.php';
        class_alias('\RedBeanPHP\R','\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection()) {
            throw new \Exception("Нет соединения с базой данных", 500);
        }
        \R::freeze(true);
        if (DEBUG) {
            \R::debug(true, 1);
        }
    }
}