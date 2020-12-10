<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Engine\Cms;
use Engine\DI\DI;

try {

    $di = new DI();

    $cms = new Cms($di);
    $cms->run();

} catch (\ErrorException $e) {
    $e->getMessage();
}
