<?php
  include '../connection.php';

  $querry = "SELECT distinct item_name FROM `stock`";
  
  $data = $connection->query($querry);

  while($row = mysqli_fetch_array($data)){
    echo '<option value="'.$row['item_name'].'" >'.$row['item_name'].'</option>';
  }

?>