<?php
$name = 'Camilla';
$favorites = ['Strawberry', 'Chocolate', 'Coffee',];
?>

<?php include 'includes/header.php'; ?>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of ice cream is: <?= $favorites[0] ?>. </p>
<?php include 'includes/footer.php'; ?>