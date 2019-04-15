<?php
/**
 * Created by PhpStorm.
 * User: Dnvcomp
 * Date: 07.04.2019
 * Time: 19:45
 */

namespace app\controllers;

use shop\Cache;

class MainController extends AppController
{
    public function indexAction()
    {
        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands'));
    }
}