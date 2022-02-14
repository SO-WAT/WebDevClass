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
}

//Create a database
$sqlcreate="CREATE DATABASE Explorer_class";

if ($connection->query($sqlcreate)===TRUE){
    echo "Database created!!!!";
} else{
    echo"Failed to create database".$connection->error;
}
$connection->close();
