<?php
$item = "Chocolate Candy";
$stock = 20;
$wanted = "8";     
$price = "23"; 
$subtotal = $wanted * $price; 
$free_candy = false;
$total = $subtotal + $free_candy;
$coupon = true;
$free_coupon = $coupon;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Type Juggling</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Type Juggling</h2>
<p>Item: <?= $item ?></p>
<p>Stock available: <?= $stock ?></p>
<p>Quantity that customer requested: <?= $wanted ?></p>
<p>Do we have enough stock? <?= ($wanted <= $stock) ? 'Yes' : 'No' ?></p>
<p>Price per item: <?= $price ?></p>
<p>Subtotal: <?= $subtotal ?></p>

<p>Total (+ free candy): <?= $total ?></p>

<p>Is coupon valid? <?= $free_coupon ? 'true' : 'false' ?></p>

</body>
</html>
