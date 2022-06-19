<?php
spl_autoload_register( function ($className){
    include "./$className.php";
});

class DriverPattern implements IDriverPattern
{

    public function connect($user, $passwd, $dbms )
    {
        return $dbms->connect($user, $passwd);
    }
}

?>