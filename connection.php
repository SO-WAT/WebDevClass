<?php
//mysqli object oriented way:
$myserver="localhost";
$username="root";
$password="";

//creating connection
$connection= new mysqli($myserver,$username,$password);

//checking connection
if ($connection->connect_error){
    die("Did not connect to Db(Failed)". $connection->connect_error());
}else{
    echo "Connected to the database";
}
