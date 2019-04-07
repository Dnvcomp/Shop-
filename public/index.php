<?php
# FrontController

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/function.php';
require_once CONF . '/routes.php';
new \shop\App();