<?php

//string
$name="This is my first ever web development class";
echo $name;
echo "<br>";


//numbers
$num=678;


//finding what type a variable is

var_dump($num);
echo"<br>";
var_dump($num);

echo"<br>";

//boolean
$me=true;
$weekend=false;
echo "<br>";

//array
$name=array("Monday","Tuesaday","Wednesday","Thursday");
echo"<br>";

//null
$weather="Hot";
$weather=null;
echo "<br>";

//functions

echo str_repeat("This is an Awesome Year.",12);

echo"<br>";

echo strlen("When Do we Go from here?");
echo"<br>";
echo str_word_count("When Do We go from here?");

echo"<br>";
echo"strpos";
echo"<br>";
echo strpos("Today is Monday","is","1");
echo"<br>";


echo"Replace";
echo"<br>";

str_replace("again","lovely","This is Wednesday again");
echo"<br>";


echo strrev("What did you expect would happen today??");
echo"<br>";

echo strpos("Do not be surprised when good things happen to you. You are a great, amazing person",
    "you","1");

echo"<br>";

 $none=2.5;
 $now=200;
 echo $none*$now;

echo"<br>";
var_dump(is_integer($none));

echo"<br>";

$gender= "67899.78654";
$int_cast=(int)$gender;
echo $int_cast;
echo"<br>";
echo(round($gender));
echo"<br>";
echo (rand(10,100));

echo"<br>";
//CONSTANTS
define("complement","Unawakunywa Kuwakunywa leo.wahh!");
echo complement;




