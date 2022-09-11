function clearButton() {

  var options = document.getElementsByClassName("selection");
  var inputs = document.getElementsByClassName("inputs");
  for (let index = 0; index < options.length; index++) {
    options[index].value = null;
  }

  for (let index = 0; index < inputs.length; index++) {
    inputs[index].value = null;
  }

  setDate();

}




$('form.ajax').on('submit', function() {
    
  if (form_validate() == 1) {

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
      success: function(responce) {
        
        alert(responce);
        clearButton();
      }

    });
    
  }

  return false;

});

function form_validate() {
  
  var itemName = document.getElementById('itemName');
  var itemType = document.getElementById('itemType');
  var company = document.getElementById('company');
  var item_price = document.getElementById('item_price');
  var item_number = document.getElementById('item_number');
  var date = document.getElementById('date').valueAsDate.getDate();
  var code = document.getElementById('code');
  var item_selling_price = document.getElementById('item_selling_price');
  var current_date = new Date().getDate();
  
  
  var x = (date >= current_date);
  
  if((itemName.value == '') || (itemType.value == '') || (company.value == '') || (item_price.value == '') || (item_number.value == '') || (code.value == '') || (item_selling_price.value == '')){
    alert('fill in all the fields');
    return 2;
  }else{
    return 1;
  }

}

function setDate() {
  document.getElementById("date").valueAsDate = new Date();
}