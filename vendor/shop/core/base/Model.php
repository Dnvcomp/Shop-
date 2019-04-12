<?php
/**
 * Created by PhpStorm.
 * User: Dnvcomp
 * Date: 10.04.2019
 * Time: 6:07
 */

namespace shop\base;


abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public  $rules = [];

    public function __construct()
    {
        //
    }
}