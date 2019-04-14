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
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'Jane', 'Mike'];

        $cache =Cache::instance();
        //$cache->set('test', $names);
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $names);
        }
        debug($data);

        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}