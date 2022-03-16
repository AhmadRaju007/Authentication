<?php
function connect(){
    $dbHost= "localhost"; //database host
    $user= "root"; //database username
    $pass= "test1234"; //database password
    $dbname="aiva"; //database name

    $conn = new PDO("mysql:host=$dbHost;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // "connected";
    return $conn;
}
