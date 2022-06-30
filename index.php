<?php

declare(strict_types=1);

echo 'Hello world';

require_once __DIR__ . '/vendor/autoload.php';

//require_once ('vendor/autoload.php');


$router = new \Ecommerce\Core\Routing\Router();
$router->match();
