<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>پێشانگای دانیار</title>
  <style>
    header{
      flex-direction: column-reverse;
      height: 100vh;
      align-items: center;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .button-container{
      flex-direction: column-reverse;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .buttons{
      width: 100%;
      height: 100px;
    }
  </style>
</head>
<body>
  <header>
    <img src="picture.jpg" alt="image">
    <div class="button-container">
      <button onclick="reportButton()" id="report-button" class="buttons btn">ڕاپۆرت</button>
      <button onclick="sellButton()" id="sell-button" class="buttons btn">فرۆشتن</button>
      <button onclick="stockButton()" id="stock-button" class="buttons btn">کۆگا</button>
      <button onclick="buyButton()" id="buy-button" class="buttons btn">کڕین</button>
    </div>
    <h3>پێشانگای دانیار</h3>
  </header>

  <script src="index1.js">
  </script>

</body>
</html>