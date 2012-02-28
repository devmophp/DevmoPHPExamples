<?php
require("../../DevmoPHP/Devmo.php");
// uses
use \Devmo;
use \devmo\libs\Config;
// init
Config::setDebug(true);
// setup paths
Config::addNamespacePathMapping('helloworld','../app/helloworld');
Config::addNamespacePathMapping('common','../app/common');
// setup controllers
Config::setDefaultNamespace('helloworld');
Config::setDefaultController('helloworld.home.controllers.Index');
Config::setRequestNotFoundController('helloworld.controllers.PageNotFound');
Config::setErrorLog(realpath("../log")."/{$_SERVER['HTTP_HOST']}.log");
//	do it!
echo Devmo::run();
