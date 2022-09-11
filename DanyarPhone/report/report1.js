
$('form.ajax').on('submit', function(event) {

  event.preventDefault();
  
  var that = $(this),
    url = that.attr('action'),
    type = that.attr('method'),
    data = {};

  that.find('[name]').each(function() {
    var that = $(this),
      name = that.attr('name'),
      value = that.val();

    data[name] = value;
  });

  $.ajax({
    url: url,
    type: type,
    data: data,
    success: function(responce){
      $('.insert_data').html(responce);
    }
  });
  
});

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

function generateTable() {
  var x = document.getElementsByClassName("parent-table-container")[0];
  x.style.display =  'block';
}