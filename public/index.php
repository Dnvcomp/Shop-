<?php
# FrontController

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/function.php';
new \shop\App();
debug(\shop\App::$app->getProperties());