<?php
//  define framework constants
define('DEVMO_DIR','../../Devmo');
//  load and initialize applications
require(DEVMO_DIR."/Devmo.php");
Devmo::setDebug(true);
Devmo::setAppPath('../app/helloworld');
//	do it!
Devmo::run();
