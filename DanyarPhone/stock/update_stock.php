<?php
header('Content-Type: text/html; charset=utf-8');
$querry2 = "SELECT * FROM `stock`WHERE `item_name` = '" . $itemName . "'AND `item_type` = '" . $itemType . "'AND `company` = '" . $company . "'AND `item_price` = '" . $item_price . "'AND `code` = '" . $code . "'AND `item_selling_price` = '" . $item_selling_price . "';";

mysqli_set_charset( $connection,'utf8');
$data = $connection->query($querry2);
// print_r(mysqli_num_rows($data));

if (mysqli_num_rows($data)) {
  // update the data
  $row = mysqli_fetch_array($data);
  print_r($row['item_number']);
  $x = $row['item_number'] + $item_number;
  $querry3 = "UPDATE `stock`SET `item_number` = '" . $x . "'WHERE `item_name` = '" . $itemName . "'AND `item_type` = '" . $itemType . "'AND`company` = '" . $company . "'AND `item_price` = '" . $item_price . "'AND `code` = '" . $code . "'AND `item_selling_price` = '" . $item_selling_price . "'";
  mysqli_set_charset( $connection,'utf8');
  if ($connection->query($querry3) === TRUE) {
    echo "The record updated successfully in stock table";
  } else {
    echo "Error: " . $querry3 . "<br>" . $connection->error;
  }
} else {
  // create a new data
  echo "Current character set is: " . $connection -> character_set_name();

  $querry1 = "INSERT INTO `stock` (`id`, `item_name`, `item_type`, `company`, `item_price`, `item_number`, `date`, `code`, `item_selling_price`) VALUES (NULL, '" . $itemName . "', '" . 
  $itemType . "', '" . $company . "', '" . $item_price . "', '" . $item_number . "', '" . $date . "', '" . $code . "', '" . $item_selling_price . "');";
  mysqli_set_charset($connection,'utf8');
  if ($connection->query($querry1) === TRUE) {
    echo "New record created successfully in stock table";
  } else {
    echo "Error: " . $querry1 . "<br>" . $connection->error;
  }
}
