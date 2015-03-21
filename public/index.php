<?php
//FRONT CONTROLLER
require '../vendor/autoload.php';
use src\Component\Bootstrap;
use src\Component\KernelConfiguration;
use src\Component\Request\Request;
use src\Component\Request\Session;
use \src\Component\Container;

$kernel = new KernelConfiguration();
$kernel->defineEnviroment();
$GLOBALS["databaseConfiguration"] = $kernel->defineDatabase();

$request = new Request(new Session());
$boot = new Bootstrap();
//$container = new Container();
$response = $boot->execute($request);
$response->send();





