<?php

include '../connection.php';

$itemName = strtolower($_POST["item_name"]);
$itemType = strtolower($_POST["item_type"]);
$company = strtolower($_POST["company"]);
$item_price = $_POST["item_price"];
$item_number = $_POST["item_number"];
$date = $_POST["date"];
$code = $_POST["code"];
$item_selling_price = $_POST["item_selling_price"];

$query = "DELETE FROM `stock` WHERE `item_name` = '" . $itemName . "'AND `item_type` = '" . $itemType . "'AND `company` = '" . $company . "'AND `item_price` = '" . $item_price . "'AND `code` = '" . $code . "'AND `item_selling_price` = '" . $item_selling_price . "';";

if($connection->query($query)){
  echo 'success';
}else{
  echo "Error: " . $query . "<br>" . $connection->error;
}
?>