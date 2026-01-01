<?php

require __DIR__ . '/../src/RestServer.php';
require 'TestController.php';

$server = new \operatoroverload\RestServer\RestServer('debug');
$server->addClass('TestController');
$server->handle();
