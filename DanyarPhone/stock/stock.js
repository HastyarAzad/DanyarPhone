function tableSorter(key) {
  var table = document.getElementsByClassName("table-body");
  var first_item, second_item, switching, rows, shouldSwitch, i;
  switching = true;
  while (switching) {
    rows = table[0].rows;
    switching = false;
    for (i = 0; i < rows.length; i++) {
      shouldSwitch = false;
      first_item = rows[i].getElementsByTagName("TD")[key];
      second_item = rows[i + 1].getElementsByTagName("TD")[key];
      if (first_item.innerHTML.toLowerCase() > second_item.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function searchAndfilter(id, col_no) {

  var input, filter, table, tr, td, i, txtValue, addStyle = true;
  input = document.getElementById(id);
  filter = input.value.toUpperCase();
  table = document.getElementById("table-body");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[col_no];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function deleteItem(id) {


  var selected = document.getElementById(id);
  var row = selected.parentNode.parentNode;

  var data = {};
  data['code'] = row.cells[0].innerHTML;
  data['item_number'] = row.cells[1].innerHTML;
  data['item_selling_price'] = row.cells[2].innerHTML;
  data['item_price'] = row.cells[3].innerHTML;
  data['date'] = row.cells[4].innerHTML;
  data['company'] = row.cells[5].innerHTML;
  data['item_type'] = row.cells[6].innerHTML;
  data['item_name'] = row.cells[7].innerHTML;
  
  if (confirm(row.cells[7].innerHTML + " will be removed")) {
    $.ajax({
      url: "deleteRow.php",
      type: "post",
      data: data,
      success: function(responce) {
        if (responce == 'success') {
          row.parentNode.removeChild(row);
        }
      }
    });
  }




  // for (var i = 0; i < table.rows.length; i++) {

  //   var row = [];


  //   for (var j = 0; j < table.rows[i].cells.length - 1; j++) {

  //     // row.push({
  //     //   key: table.rows[i].cells[j].innerHTML,
  //     //   value: table.rows[i].cells[j].innerHTML
  //     // });
  //     var x = table.rows[i].cells[j].innerHTML;
  //     row[x] = x;

  //     // result += (row[j].key);
  //     // console.log(x);
  //     console.log(row);
  //     // row[table.rows[i].cells[j].innerHTML] = table.rows[i].cells[j].innerHTML;
  //   }

  //   // alert(row[6].key);
  //   // alert(result);



  // }
}