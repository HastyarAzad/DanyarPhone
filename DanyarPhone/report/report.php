<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../report/report.css">
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
    <div class="first-div">
      <form action="reportQuery.php" method="POST" class="ajax first-div">
        <h1>کاتەکە هەڵبژێرە</h1>

        <div class="date-picker-container">
          <input name="final_date" type="date" id="final_date" class="input-date">
          <h3>: بۆ بەرواری</h3>
          <input name="initial_date" type="date" id="initial_date" class="input-date">
          <h3>: لە بەرواری</h3>
        </div>
        <input type="submit" value="دروستکردن" class="generate btn" onclick="generateTable()">
      </form>
    </div>
    <div class="parent-table-container">
      <table class="table">
        <thead class="table-head">
          <tr>
            <th onclick="tableSorter(0)">کۆد</th>
            <th onclick="tableSorter(1)">دانە</th>
            <th onclick="tableSorter(2)">نرخی فرۆشتن</th>
            <th onclick="tableSorter(3)">نرخ</th>
            <th onclick="tableSorter(4)">بەروار</th>
            <th onclick="tableSorter(5)">کۆمپانیا</th>
            <th onclick="tableSorter(6)">جۆری کاڵا</th>
            <th onclick="tableSorter(7)">ناوی کاڵا</th>
            <th onclick="tableSorter(8)">ژمارە</th>
          </tr>

          <tr>
            <th><input onkeyup="searchAndfilter(this.id,0)" id="code" type="number" placeholder="کۆد"></th>
            <th><input onkeyup="searchAndfilter(this.id,1)" id="no" type="number" placeholder="دانە"></th>
            <th><input onkeyup="searchAndfilter(this.id,2)" id="sell-price" type="number" placeholder="نرخی فرۆشتن"></th>
            <th><input onkeyup="searchAndfilter(this.id,3)" id="price" type="number" placeholder="نرخ"></th>
            <th><input onkeyup="searchAndfilter(this.id,4)" id="date" type="text" placeholder="بەروار"></th>
            <th><input onkeyup="searchAndfilter(this.id,5)" id="company" type="text" placeholder="کۆمپانیا"></th>
            <th><input onkeyup="searchAndfilter(this.id,6)" id="type" type="text" placeholder="جۆری کاڵا"></th>
            <th><input onkeyup="searchAndfilter(this.id,7)" id="name" type="text" placeholder="ناوی کاڵا"></th>
            <th><input onkeyup="searchAndfilter(this.id,8)" id="number" type="text" placeholder="ژمارە" readonly></th>
          </tr>
        </thead>
        <tbody class="table-body insert_data" id="table-body">
        </tbody>
      </table>
    </div>
  </main>

  <script src="../jquery-3.5.1.js"></script>
  <script src="../report/report1.js"></script>
  <script src="../button_links1.js"></script>

</body>

</html>