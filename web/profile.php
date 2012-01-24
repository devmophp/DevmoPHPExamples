<?php
require("../../DevmoPHP/init.php");
// uses
use \Devmo;
use \devmo\libs\Config;
// setup paths
Config::addNamespacePathMapping('profile','../app/profile',true);
// setup controllers
Config::setDefaultController('profile.controllers.Hi');
// profile
$times = Devmo::getValue('times',$_GET,1000);
$start = microtime(true);
for ($i=0; $i<$times; $i++)
	Devmo::run();
$time = (microtime(true)-$start);
$avg = $time/$times;
echo "times:{$times} time:{$time} avg:{$avg}s"; 

