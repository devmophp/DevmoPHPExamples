<?php
//  define framework constants and load
require("../../DevmoPHP/Devmo.php");
//  initialize applications
Devmo::addAppNamespace('helloworld','../app/helloworld',true);
Devmo::setHomeController('helloworld.first.controllers.home');
Devmo::setRequestedController(Devmo::getServer('PATH_INFO'));
Devmo::setDebug(true);
//	do it!
echo Devmo::run();
