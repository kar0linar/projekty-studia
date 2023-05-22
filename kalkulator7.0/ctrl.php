<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcCompute'); 
getRouter()->setLoginRoute('login'); 


getRouter()->addRoute('login',			'LoginCtrl');
getRouter()->addRoute('logout',			'LoginCtrl',['user','admin']);
getRouter()->addRoute('calcCompute',		'CalcCtrl',['user','admin']);

getRouter()->go();