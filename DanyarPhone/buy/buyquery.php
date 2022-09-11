<?php
include '../connection.php';

$itemName = strtolower($_POST["itemName"]);
$itemType = strtolower($_POST["itemType"]);
$company = strtolower($_POST["company"]);
$item_price = $_POST["item_price"];
$item_number = $_POST["item_number"];
$date = $_POST["date"];
$code = $_POST["code"];
$item_selling_price = $_POST["item_selling_price"];

include '../stock/update_stock.php';

// $querry = "INSERT INTO `buy` (`id`, `item_name`, `item_type`, `company`, `item_price`, `item_number`, `date`, `code`, `item_selling_price`) VALUES (NULL, '" . $itemName . "', '" . $itemType . "', '" . $company . "', '" . $item_price . "', '" . $item_number . "', '" . $date . "', '" . $code . "', '" . $item_selling_price . "');";

// if ($connection->query($querry) === TRUE) {
//   echo "<br> New record created successfully in sell table";
// } else {
//   echo "Error: " . $querry . "<br>" . $connection->error;
// }
