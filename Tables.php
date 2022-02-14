<?php
//mysqli object oriented way:
$myserver="localhost";
$username="root";
$password="";
$mydb="explorer_class";

//creating connection
$connection= new mysqli($myserver,$username,$password);

//checking connection
if ($connection->connect_error){
    die("Did not connect to Db(Failed)". $connection->connect_error());
}

$createtable="CREATE TABLE explorer (
    No INT(8) UNASIGNED AUTO_INCREMENT PRIMARY KEY ,
    First name VARCHAR (50) NOT NULL,
)";
