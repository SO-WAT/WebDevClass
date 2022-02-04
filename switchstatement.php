<?php
// #case sensitive

$myfruit="Bananas";

switch ($myfruit){

    case"Oranges":
        echo "I have some sweet oranges";
        break;
    case "Water Melon":
        echo"I find them very waterly";
        break;
    case "Bananas":
        echo"I dislike bananas";
        break;
        case "Mangoes";
        echo"Mangoes are very succulent";
        break;
    default:
        echo"No Fruit in the dessert listed above";



}

echo"<br>";

echo"..............................................................................switch...........................................................................";
echo"<br>";
echo"<br>";
echo"<h1>Switch Statement Assignment</h1>";
$Brand="Asus";
switch ($Brand){
    case "Sumsung":
        echo"Sumsung - This is becoming an absolute computer brand but a very strong phone accessory";
    case"Toshiba":
        echo"Toshiba - I only know this as a television brand";
    case"Hp":
        echo"Hp - This is predominantly it! A whole revolution";
    case"Dell":
        echo"Dell - I cant disregard this as a common brand as well";
    case"Asus":
        echo" Asus - This I know to be a very sleek one. I have loved those that I've seen so far";
        break;
    default:
        echo"Non of the above - The rest should be termed as quite unpopular";
}

