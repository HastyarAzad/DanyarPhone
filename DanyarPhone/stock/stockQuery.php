<?php

  include '../connection.php';
  $index = 0;
  mysqli_set_charset($connection,'utf8');
  $querry = "SELECT * FROM `stock` WHERE 1";
  
  $data = $connection->query($querry);

    while($row = mysqli_fetch_array($data)){
      $index ++;
      echo '<tr id="hi">';

        echo "<td>" . $row['code'] . "</td>";
        echo "<td>" . $row['item_number'] . "</td>";
        echo "<td>" . $row['item_selling_price'] . "</td>";
        echo "<td>" . $row['item_price'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['company'] . "</td>";
        echo "<td>" . $row['item_type'] . "</td>";
        echo "<td>" . $row['item_name'] . "</td>";
        echo "<td>" . '<button onClick="deleteItem(this.id)" id="item-remove' . $index . '" tabindex="-1" class="button">X</button>' . "</td>";

      echo "</tr>";
    }
?>