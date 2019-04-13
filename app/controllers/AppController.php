<?php
/**
 * Created by PhpStorm.
 * User: Dnvcomp
 * Date: 07.04.2019
 * Time: 20:24
 */

namespace app\controllers;

use app\models\AppModel;
use shop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}