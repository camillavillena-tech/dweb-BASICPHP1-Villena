<?php
declare(strict_types=1);

$IceCreamStock = [
    //Only each piece
    "Chocolate" => ["price" => 52, "stock" => 12],
    "Strawberry" => ["price" => 68, "stock" => 15],
    "Biscoff" => ["price" => 74, "stock" => 9],
    "Vanilla" => ["price" => 35, "stock" => 15],

    //Bundles
    "Chocolate Bundle (4 pieces)" => ["price" => 170, "stock" => 10],
    "Chocolate Bundle (8 pieces)" => ["price" => 350, "stock" => 6],
    "Strawberry Bundle (4 pieces)" => ["price" => 250, "stock" => 4],
    "Strawberry Bundle (8 pieces)" => ["price" => 500, "stock" => 8],
    "Biscoff Bundle (4 pieces)" => ["price" => 270, "stock" => 9],
    "Biscoff Bundle (8 pieces)" => ["price" => 570, "stock" => 5],
    "Vanilla Bundle (4 pieces)" => ["price" => 120, "stock" => 25],
    "Vanilla Bundle (8 pieces)" => ["price" => 250, "stock" => 9],
];

$tax_rate = 12; 

// Reorder
function get_reorder_message($stock): String {
    return ($stock< 10) ? "Yes" : "No";
}
//total Stock
function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

//  Calculates tax 
function get_tax_due(float $price, int $quantity, int $taxPercent = 0): float {
    $total = $price * $quantity;
    return $total * ($taxPercent / 100);
}
?>

<?php include 'includes/header.php'; ?>


 <table>
    <tr>
        <th>Ice Cream Product</th>
        <th>Stock Items</th>
        <th>Re-order</th>
        <th>Total Stock Value</th>
        <th>Total Tax</th>
    </tr>

    <?php foreach ($IceCreamStock as $product => $data){
        $price = $data["price"];
        $stock = $data["stock"];
        
        $stockavail = get_reorder_message($stock);
        $value = get_total_value($price, $stock);
        $tax = get_tax_due($price, $stock, $tax_rate);
    ?>

    <tr>
        <td><?= $product ?></td>
        <td><?= $stock ?></td>
        <td><?= $stockavail ?></td>
        <td>₱<?= $value ?></td>
        <td>₱<?= $tax ?></td>
    </tr>
<?php
    }
?>
</table>
<?php include 'includes/footer.php'; ?>
