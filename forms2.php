<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introductory Forms</title>
    <style>
        body{
            text-align: center;
            background-color: cadetblue;
        }
        h1{
            font-family: Bahnschrift;
        }
    </style>

</head>
<body>

<h1>Place Order Here</h1>

<form action="order.php" method="get">
    <label for="jina">User Name</label><br>
    <input type="text"name="Jina"id="jina"><br>
    <label for="order">What to Order</label><br>
<!--    <input type="button" value="Yes"><br>-->
<!--    <input type="button"value="No"><br>-->
    <input type="text"name="kuku"id="order"><br>
    <label for="loc">Enter Location</label><br>
    <input type="text"name="uko"id="loc"><br>
    <label for="nambari">Phone Number</label><br>
    <input type="number"name="namba"id="nambari"><br>
    <label for="coupon">Enter Code</label><br>
    <input type="text"name="Msq123"id="coupon"><br>


    <input type="submit"value="Place Order"><br><br>







</form>

</body>
</html>
