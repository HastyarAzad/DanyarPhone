var buttonCount = 0;

function addItem(){
  var div = document.createElement('div');
  div.id = 'table-item';
  buttonCount++;
  div.innerHTML = 
    '<button onClick="deleteItem(this.id)" id="item-remove' + buttonCount +'" class="button">X</button>'+
    '<div class="item-attributes"><input type="date" style="font-size: 17px; font-weight: bolder;" class="date-input"></div>'+
    '<div class="item-attributes"><input type="text" value="123456" readonly></div>'+
    '<div class="item-attributes"><input type="number" id="price" placeholder="نرخ..."></div>'+
    '<div class="item-attributes"><span>ناوی کاڵا</span></div>';

  document.getElementById("items-menu").appendChild(div);
  var x = document.getElementsByClassName("date-input");
  
  for(let i = 0; i < x.length; i++) {
    x[i].valueAsDate = new Date();
    x[i].readOnly = true;
  }
}

function clearItems(){
  document.getElementById("items-menu").innerHTML = '';
}

function deleteItem(clicked_id){
  var x = document.getElementById(clicked_id);
  x.parentNode.parentNode.removeChild(x.parentNode);
}
