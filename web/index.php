<?php
//  define framework constants and load
require("../../DevmoPHP/Devmo.php");
// setup paths
Devmo::addNamespace('helloworld','../app/helloworld',true);
Devmo::addNamespace('common','../app/common');
// setup controllers
Devmo::setHomeController('helloworld.home.controllers.Index');
Devmo::setPageNotFoundController('helloworld.controllers.PageNotFound');
Devmo::setRequestedController(Devmo::getServer('PATH_INFO'));
Devmo::setDebug(true);
//	do it!
echo Devmo::run();
