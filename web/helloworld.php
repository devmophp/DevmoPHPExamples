<?php
//  define framework constants and load
require("../../DevmoPHP/Devmo.php");
//  initialize applications
Devmo::setDebug(true);
Devmo::setAppPath('../app');
Devmo::setHomeController('helloworld.first.homes');
//	do it!
Devmo::run();
