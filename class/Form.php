<?php

class Form implements IForm
{
    public function validate(){
        error_log("Error Success");
        if( $_SERVER['REQUEST_METHOD'] === 'GET' && isset( $_GET['submit']) ){
            echo "<br> ". $_POST['nom'] ."<br>";
        }
    }
}