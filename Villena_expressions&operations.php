<?php
$name = 'Camilla';
$best_sellers = ['Chocolate', 'Strawberry', 'Biscoff', 'Vanilla'];
$items_price = '10';
$items_bought = '10';
$subtotal = $item_price * $items_bought;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;

if ($items_bought >=10){
    $output = "Wow! You are amazing! Thank you for buying a big amount of treats!";
}else if($items_bought >=5){
    $output = "You bought a good amount of treats!";

}else{
    $output ="A small amount of treats but we appreciate it!";
}
?>


<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?> </p>
    <p>Cost per pack: <?= $cost ?> </p>
    <p>Subtotal: <?= $subtotal ?> </p>
    <p>Tax: <?= $tax ?></p>
    <p>Total: <?= $total ?> </p>
</body>
</html>