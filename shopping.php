<?php include 'includes/header.php'; ?>

<?php
$name = 'Camilla';
$best_sellers = ['Chocolate', 'Strawberry', 'Biscoff', 'Vanilla'];

$items_price = 10;
$items_bought = 10;

$subtotal = $items_price * $items_bought;
$tax = $subtotal * 0.20;
$total = $subtotal + $tax;

// Purchase message
if ($items_bought >= 10) {
    $output = "Wow! You are amazing! Thank you for buying a big amount of treats!";
} elseif ($items_bought >= 5) {
    $output = "You bought a good amount of treats!";
} else {
    $output = "A small amount of treats but we appreciate it!";
}

// Ice cream choice message
$icecream_choice = "Strawberry";

switch ($icecream_choice) {
    case "Chocolate":
        $icecream_msg = "Chocolate is our best seller!";
        break;
    case "Strawberry":
        $icecream_msg = "Strawberry is the second best seller and has a sweet flavor.";
        break;
    case "Biscoff":
        $icecream_msg = "Biscoff has a rich caramel flavor!";
        break;
    case "Vanilla":
        $icecream_msg = "Vanilla is a classic flavor.";
        break;
    default:
        $icecream_msg = "Hmp! This is not available. Pick again!";
}
?>

<h2>Welcome <?= htmlspecialchars($name) ?></h2>

<h2>Best Sellers</h2>
<ul>
    <?php foreach ($best_sellers as $flavor): ?>
        <li><?= htmlspecialchars($flavor) ?></li>
    <?php endforeach; ?>
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
<p><?= $icecream_msg ?></p>

<?php include 'includes/footer.php'; ?>
