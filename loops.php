<?php

echo"...................................................................while loop...............................................................................";
$num=5;
echo"<br>";


while ($num<=15){
    echo"This is less than a quarter : $num <br>";
    $num+=2;  //
}
echo"<br>";

echo"#################################################################do......while loop######################################";
$num2=5;
echo"<br>";

//condition is executed first before output
do{
    echo"This number is $num2<br>";
    $num2++;
}while($num2<10);

echo"<br>";
echo"#############################while loop##########################################";
echo"<br>";
$var=20; //my loop starts here
    while($var<=500){  //this is the limit
        echo"way to a thousand : $var<br>";
        $var+=50; //increase the var by 50
    }

echo"<br>";
    echo"........................................do.....while loop..............................................";
    echo"<br>";
    $var2=3;
do{
    echo"My number is : $var2<br>";
    $var2+=2;
}while($var2<=30);