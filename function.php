<?php
function hesabu(){      //creating a function
    $num=56;
    $num1=67;

    echo$num / $num1;

}
hesabu();       //calling a function

echo"<br>";

echo pi(); //inbuilt function

//now let us creat a function with some arguments
echo"<br>";
function explorer($jina,$miaka){
    echo"$jina ,alizaliwa $miaka <br>";
}
explorer("Erick","1980");
explorer("Ruth","1994");
explorer("Wesley","2005");
explorer("Bianca","2000");

echo"<br>";
echo"<br>";
function counties($number,$population,$mainactivity){
    echo"County $number has $population people, with $mainactivity being their main source of income <br>";
}

counties("001","10M","tourism");
counties("022","15,000,000","business");
counties("035","6M","tea farming");
counties("034","2M","pastrolism");
counties("042","10M","fishing");


//echo"County $number has $population, $mainactivity being their main source of income";






















