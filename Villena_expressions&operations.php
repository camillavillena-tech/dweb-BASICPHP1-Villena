<?php include 'includes/header.php'; ?>
<?php
$name = 'Camilla';
$best_sellers = ['Chocolate', 'Strawberry', 'Biscoff', 'Vanilla'];
$items_price = 10;
$items_bought = 10;
$subtotal = $items_price * $items_bought;
$tax = ($subtotal / 100) * 20;
$total = $subtotal + $tax;

if ($items_bought >=10){
    $output = "Wow! You are amazing! Thank you for buying a big amount of treats!";
}else if($items_bought >=5){
    $output = "You bought a good amount of treats!";

}else{
    $output ="A small amount of treats but we appreciate it!";
}

$candy_choice = "Strawberry";
switch ($candy_choice) {
    case "Chocolate":
        $candy_msg = "Chocolate is our best seller!";
        break;
    case "Strawberry":
        $candy_msg = "Strawberry is the second best seller and has a sweet flavor";
        break;
    case "Biscoff":
        $candy_msg = "Biscoff has a rich caramel flavor!";
        break;
    case "Vanilla":
        $candy_msg = "Vanilla is a classic flavor";
        break;
    default:
        $candy_msg = "Hmp! This is not available. Pick again!";
}
?>

    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>

    
    <h2>Best Sellers</h2>
    <ul>
        <li><?= $best_sellers[0] ?></li>
        <li><?= $best_sellers[1] ?></li>
        <li><?= $best_sellers[2] ?></li>
        <li><?= $best_sellers[3] ?></li>
    </ul>
    <h2>Shopping Summary</h2>
    <p>Items Bought: <?= $items_bought ?></p>
    <p>Price per Item: <?= $items_price ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Tax (20%): <?= $tax ?></p>
    <p>Total: <?= $total ?></p>

    <h2>Purchase Message</h2>
    <p><?= $output ?></p>

    <h2>Flavor Information</h2>
    <p><?= $candy_msg ?></p>
<?php include 'includes/footer.php'; ?>