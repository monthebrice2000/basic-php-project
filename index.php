<?php

spl_autoload_register(function ($className){
    include "class/$className.php";
});

include "./config.php";

$mySqlDB = DBFactory::getDBRepository("mysql");
$observer = DBFactory::getObserver( $mySqlDB );
$observer1 = DBFactory::getObserver( $mySqlDB );
$mySqlDB->addObserver( $observer );
$mySqlDB->addObserver( $observer1 );

$driver = DBFactory::getDriver( );
$connection = $driver->connect(USER, PASSWD, $mySqlDB);

$form = DBFactory::getForm();
?>
