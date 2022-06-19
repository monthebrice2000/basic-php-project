<?php

spl_autoload_register( function ($className){
    include "./$className.php";
});

class DBFactory
{
    public static function getDBRepository($dbms){
        switch ($dbms) {
            case "mysql":
                return new MySqlDBRepository("db", "bootcamp", 3306);
            default:
                return null;
        }
    }

    public static function getDriver(){
        return new DriverPattern();
    }

    public static function getObserver( $subject ){
        return new DBObserver( $subject );
    }

    public static function getForm(){
        return new Form();
    }
}