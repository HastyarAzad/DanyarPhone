<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../sell/sell.css">
  <link rel="stylesheet" href="../index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>پێشانگای دانیار</title>
</head>
<body>
  <header>
    <img src="../picture.jpg" alt="image" onclick="imgClick()">
    <div class="button-container">
      <button onclick="reportButton()" id="report-button" class="buttons btn">ڕاپۆرت</button>
      <button onclick="sellButton()" id="sell-button" class="buttons btn">فرۆشتن</button>
      <button onclick="stockButton()" id="stock-button" class="buttons btn">کۆگا</button>
      <button onclick="buyButton()" id="buy-button" class="buttons btn">کڕین</button>
    </div>
    <h3>پێشانگای دانیار</h3>
  </header>

  <main>
    <div class="left-div">
      <div class="items-menu" id="items-menu">
        
      </div>
      <div id="action-button-container">
        <button id="sell" class="action-buttons btn" onclick="addItem()">sell</button>
        <button id="clear" class="action-buttons btn" onclick="clearItems()">clear</button>
      </div>
    </div>
    <div class="right-div">
      <div class="info-boxes">
        <h1>ناوی کاڵا</h1>
        <input type="text" value="کەناڵی روداو" readonly> 
      </div>
      <div class="info-boxes">
        <h1>جۆری کاڵا</h1>
        <input type="text" value="کەناڵی روداو" readonly> 
      </div>
      <div class="info-boxes">
        <h1>کۆمپانیا</h1>
        <input type="text" value="کەناڵی روداو" readonly> 
      </div>
      <div class="info-boxes">
        <h1>نرخی کاڵا</h1>
        <input type="number" value="898680" readonly> 
      </div>
      <div class="info-boxes">
        <h1>کۆدی کاڵا</h1>
        <input type="number" value="898768" readonly> 
      </div>
    </div>
  </main>
  
  <script src="../jquery-3.5.1.js"></script>
  <script src="../button_links1.js"></script>
  <script src="../sell/sell.js"></script>


</body>
</html>