<?php

spl_autoload_register( function ($className){
    include "class/$className.php";
});

class DBObserver implements IDBObserver
{

    private $subject;

    public function __construct( $subject ){
        $this->subject = $subject;
    }

    public function display($message)
    {
        echo "<br>" . $message . "<br>";
    }
}