<?php
/**
 * Created by PhpStorm.
 * User: Dnvcomp
 * Date: 12.04.2019
 * Time: 22:52
 */

namespace shop;


class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config.db.php';
    }
}