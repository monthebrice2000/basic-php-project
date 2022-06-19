<?php

spl_autoload_register( function ($className){
    include "./$className.php";
});

class MySqlDBRepository implements IDBRepository, IDBSubject
{

    public $hostname;
    public $dbName;
    public $port;

    private $observers ;

    public function __construct($hostname, $dbName, $port){
        $this->hostname = $hostname;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->observers = [];
    }

    public function connect($user, $passwd)
    {
        try{
            $connection = mysqli_connect( $this->hostname, $user, $passwd, $this->dbName );
        }catch (ErrorException $e){
            return "Connection Error : " . $e->getMessage();
        } finally {
            if ( $connection ){
                $this->displayChange( "Your Connection was successfully");
                return $connection;
            }else{
                $this->displayChange( "Connection Error");
            }
        }
    }
    public function addObserver( $observer ){
        $this->observers[ count($this->observers) ] = $observer;
    }

    public function displayChange($message)
    {
        foreach ( $this->observers as $observer ){
            $observer->display( $message );
        }
    }
}