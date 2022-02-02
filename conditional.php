<?php
//if statements
$var=76;
if($var>67){
    echo "How is your morning?";
}
echo "<br>";

//if else statement
$var1=43;
$var2=98;

if ($var1>=$var2 && $var=76){
    echo"This is true";
    }else {
    echo "This is not true";
}
echo"<br>";
//if ....else if....
$marks=87;
if ($marks<87){
    echo"Grade: Below the required marks";
}else if($marks<87 and $marks<=20){
    echo"Grade: Get serious!!";
}else if($marks<=60 && $marks>70){
    echo"Fair enough";
}else {
    echo "You really outdid yourself here";
}
