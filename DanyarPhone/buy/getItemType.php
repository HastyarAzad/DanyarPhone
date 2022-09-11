<?php
  include '../connection.php';

  $querry = "SELECT distinct item_type FROM `stock`";
  
  $data = $connection->query($querry);

  while($row = mysqli_fetch_array($data)){
    echo '<option value="'.$row['item_type'].'" >'.$row['item_type'].'</option>';
  }

?>