<?php
$item = "Chocolate Ice Cream";
$stock = 20;
$wanted = "8";     
$price = "23"; 
$subtotal = $wanted * $price; 
$free_icecream = false;
$total = $subtotal + $free_icecream;
$coupon = true;
$free_coupon = $coupon;
?>
<?php include 'includes/header.php'; ?>

<h2>Type Juggling</h2>
<p>Item: <?= $item ?></p>
<p>Stock available: <?= $stock ?></p>
<p>Quantity that customer requested: <?= $wanted ?></p>
<p>Do we have enough stock? <?= ($wanted <= $stock) ? 'Yes' : 'No' ?></p>
<p>Price per item: <?= $price ?></p>
<p>Subtotal: <?= $subtotal ?></p>

<p>Total (+ free small sundae): <?= $total ?></p>

<p>Is coupon valid? <?= $free_coupon ? 'true' : 'false' ?></p>

<?php include 'includes/footer.php'; ?>
