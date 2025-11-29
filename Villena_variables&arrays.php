<?php
$name = 'Camilla';
$best_sellers = ['Chocolate', 'Strawberry', 'Biscoff', 'Vanilla']
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Expressions & Operations</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <h2>Best Sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
    </ul>
</body>
</html>