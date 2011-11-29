<?php
//  define framework constants and load
require("../../DevmoPHP/Devmo.php");
//  initialize applications
Devmo::addAppPath('helloworld','../app/helloworld',true);
Devmo::setRequestedController(Devmo::getServer('PATH_INFO'));
Devmo::setHomeController('helloworld.first.controllers.home');
Devmo::setPageNotFoundController('helloworld.controllers.PageNotFound');
Devmo::setDebug(false);
//	do it!
echo Devmo::run();
