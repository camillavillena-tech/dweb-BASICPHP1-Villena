<?php
$name = 'Camilla';
$best_sellers = ['Chocolate', 'Strawberry', 'Biscoff', 'Vanilla']
?>

<?php include 'includes/header.php'; ?>
    <h2>Welcome <?= $name ?></h2>
    <h2> Our Best Sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
    </ul>
<?php include 'includes/footer.php'; ?>