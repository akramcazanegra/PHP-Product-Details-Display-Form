<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $product_id = $_POST['products'];
    $products = [
        1 => ["name" => "Produit 1", "price" => 10],
        2 => ["name" => "Produit 2", "price" => 20],
        3 => ["name" => "Produit 3", "price" => 30]
    ];
    $product_name = $products[$product_id]["name"];
    $product_price = $products[$product_id]["price"];

    echo "<h2>Récapitulatif de la commande</h2>";
    echo "Nom : $name<br>";
    echo "<table border='1'>";
    echo "<tr><th>Produit</th><th>Prix</th></tr>";
    echo "<tr><td>$product_name</td><td>$product_price €</td></tr>";
    echo "</table>";
    echo "Total à payer : $product_price €";
}
?>
