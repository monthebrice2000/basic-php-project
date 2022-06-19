<?php


/*$a = "bougee";

strtoupper( $a );

echo "Hello World $a";

foreach ( $_SERVER as $key => $value ){
    echo $key. " => " .$value;
    echo "<br>";
}

if( $a === "hello"){
    echo "Merci Mon DIEU";
}else{
    echo "Merci Jesus Mon ROI";
}

$array = ["1", "2", "3"];
foreach ( $array as $value ){
    echo $value;
}*/

//$connection = mysqli_connect("localhost", "root", "example", "base_de_donnees", 3306 );

try{
    //$connection = new PDO("mysql:host=localhost;db=mysql", "root", "example");
    $connection = mysqli_connect('db', 'root', 'example', 'mysql' );
    echo "Connection Successful";
}catch ( PDOException $e ){
    echo "Error from ". $e->getMessage();
}

//var_dump( $connection );

/*if( $connection ){
    echo "<br> You are connected to the database";

    $result = mysqli_query( $connection, "SELECT * FROM reseaux_sociaux");
    while( $row = mysqli_fetch_assoc($result) ){
        $link = $row["link"];

        echo $link . "<br>";
    }

}*/

?>
