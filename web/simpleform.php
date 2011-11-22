<?php
//  define framework constants and load
define('DEVMO_DIR','../../DevmoPHP');
require(DEVMO_DIR."/Devmo.php");
//  initialize applications
Devmo::setDebug(true);
Devmo::setAppPath('../app/SimpleForm');
//	do it!
echo Devmo::run();
