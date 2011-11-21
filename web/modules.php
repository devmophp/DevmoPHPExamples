<?php
//  define framework constants and load
define('DEVMO_DIR','../../DevmoPHP');
require(DEVMO_DIR."/Devmo.php");
//  initialize applications
Devmo::setDebug(true);
Devmo::setAppPath('../app/Modules');
Devmo::setHomeController('/module1/index');
//	do it!
Devmo::run();
