<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../buy/buy.css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="../rudawregular2.ttf">
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
    <form action="buyquery.php" accept-charset="utf-8" method="POST" class="ajax">
      <div class="info-insert-box">
        <h1>ناوی کاڵا</h1>
        <input name="itemName" list="options" id="itemName" class="selection" placeholder="هەڵبژێرە" autocomplete="off">
        <datalist id="options">
          <?php include 'getItemName.php' ?>
        </datalist>
      </div>

      <div class="info-insert-box">
        <h1>جۆری کاڵا</h1>
        <input name="itemType" list="options1" id="itemType" class="selection" placeholder="هەڵبژێرە" autocomplete="off">
        <datalist id="options1">
          <?php include 'getItemType.php' ?>
        </datalist>
      </div>

      <div class="info-insert-box">
        <h1>کۆمپانیا</h1>
        <input name="company" id="company" class="inputs" type="text" autocomplete="off">
      </div>

      <div class="info-insert-box">
        <h1>نرخی کاڵا</h1>
        <input name="item_price" id="item_price" class="inputs" type="number" autocomplete="off">
      </div>

      <div class="info-insert-box">
        <h1>ژمارەی کاڵا</h1>
        <input name="item_number" id="item_number" class="inputs" type="number" autocomplete="off">
      </div>

      <div class="info-insert-box">
        <h1>بەروار</h1>
        <input name="date" id="date" type="date">
        <script>
          document.getElementById("date").valueAsDate = new Date();
        </script>
      </div>

      <div class="info-insert-box">
        <h1>کۆدی کاڵا</h1>
        <input name="code" id="code" class="inputs" type="number"  autocomplete="off">
      </div>

      <div class="info-insert-box">
        <h1>نرخی فرۆشتن</h1>
        <input name="item_selling_price" id="item_selling_price" class="inputs" type="number" autocomplete="off">
      </div>

      <div class="button-box">
        <input type="submit" value="خەزنکردن" class="action-buttons btn" style=" margin-left: 0;"></input>
        <button type="button" onclick="clearButton()" class="action-buttons btn">سڕینەوە</button>
      </div>
    </form>
  </main>


  <script src="../jquery-3.5.1.js"></script>
  <script src="../button_links1.js"></script>
  <script src="../buy/buy.js" charset="UTF-8"></script>
</body>

</html>