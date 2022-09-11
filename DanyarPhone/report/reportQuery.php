<?php
  include '../connection.php';
  $idate = $_POST['initial_date'];
  $fdate = $_POST['final_date'];
  
  $querry = "SELECT * FROM `buy` WHERE `date` BETWEEN '".$idate."' AND '".$fdate."'";

  $result = mysqli_query($connection, $querry);



  while ($row = mysqli_fetch_array($result)) {
    echo '<tr role="row" class="odd">';
      echo '<td>' . $row["code"] . '</td>';
      echo '<td>' . $row["item_number"] . '</td>';
      echo '<td>' . $row["item_selling_price"] . ' </td>';
      echo '<td>' . $row["item_price"] . '</td>';
      echo '<td>' . $row["date"] . '</td>';
      echo '<td>' . $row["company"] . '</td>';
      echo '<td>' . $row["item_type"] . ' </td>';
      echo '<td>' . $row["item_name"] . '</td>';
      echo '<td></td>';
    echo '</tr>';
  }








?>



