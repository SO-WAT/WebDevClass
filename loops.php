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
echo"<h1>While Loop Class Assignment</h1>";
echo"<br>";
$var=20; //my loop starts here
    while($var<=500){  //this is the limit
        echo"way to a thousand : $var<br>";
        $var+=50; //increase the var by 50
    }

echo"<br>";
    echo"........................................do.....while loop..............................................";
    echo"<br>";
    echo"<h1>Do.....While Class Assignment</h1>";
    $var2=3; //initial counter
do{
    echo"My number is : $var2<br>";
    $var2+=2;// increament counter
}while($var2<=30); //test counter


echo"<br>";// //include the 3 counters inside
echo",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,FOR LOOP,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,";
echo"<br>";

for ($nambari=-2;$nambari<=10;$nambari+=2){
    echo"Now you have achieved $nambari<br>";

}

echo"<br>";
for ($namb=10;$namb>=-2;$namb-=2){
    echo"Well, this looks like it $namb<br>";

}
echo"<br>";

echo ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,foreach loop********************************************************";
echo"<br>";
$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
$class=array("Ruth","Christine","Collins","Diana","Lesley");
$arr=array("Emobilis",456,678,67.98,true,false,null);
var_dump($class);
echo"<br>";
var_dump($arr);
echo"<br>";

echo $class[0];
$class[3]="Nishy";
echo"<br>";
echo $class[3];
echo"<br>";
foreach($class as $names){
    echo"$names<br>";
}







echo"<br>";
//        Associative Array
$age=array("Erick"=>30,"Kelvin"=>21,"Quinter"=>19);
echo"Erick is".$age['Erick']."Years";










