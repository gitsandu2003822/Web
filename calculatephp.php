<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $units = $_GET['No_of_units'] ?? 0;
    $price = $_GET['Price_per_unit'] ?? 0;
    echo "Total Price: " . ($units * $price);
}
?>
