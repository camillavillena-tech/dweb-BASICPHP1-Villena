<?php
$name = 'Camilla';
$favorites = ['Strawberry', 'Chocolate', 'Coffee',];
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Echo Shorthand</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is: <?= $favorites[0] ?>. </p>
</body>
</html>