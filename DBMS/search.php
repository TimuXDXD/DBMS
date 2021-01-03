<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preload" href="css/search.css" as="style">
    <link rel="stylesheet"  type="text/css" href="css/search.css">
    <title>販賣車輛管理系統-搜尋</title>
  </head>
  <body>
    <header>
      <div class="top_menu">
        <nav>
          <a href="home.html">首頁</a>
        </nav>
        <nav>
          <a href="search.php">搜尋</a>
        </nav>
        <nav>
          編輯
          <ul>
            <li><a href="manage.php">管理商品</a></li>
            <li><a href="add.php">新增商品</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <center>
      <div class="main">
        <form action="" method="post">
          <div class="input_search">
            <input type="text" id="keyword" name="keyword" value="" placeholder="請輸入關鍵字..." maxlength="15">
            <button type="submit" name="button"><img src="images/search_icon.png" alt="search"></button>
          </div>
          <div class="advanced_search">
            <p>進階查詢</p>
            <label for="branches">品牌：</label>
            <select id="branches" name="branches" onchange="this.form.submit()">
              <option value="" selected></option>
              <option value="Volvo">Volvo</option>
              <option value="Toyota">Toyota</option>
              <option value="Mclaren">McLaren</option>
              <option value="Saab">Saab</option>
              <option value="Fiat">Fiat</option>
              <option value="Audi">Audi</option>
            </select>
            <br>
            <label for="models">型號：</label>
            <select id="models" name="models" onchange="this.form.submit()">
              <option value="" selected></option>
              <option value="V90-T5">V90-T5</option>
              <option value="S90-T8">S90-T8</option>
              <option value="XC90-T8">XC90-T8</option>
              <option value="V60-T8">V60-T8</option>
              <option value="86 2.0 MT Brembo">86 2.0 MT Brembo</option>
              <option value="Yaris Crossover 1.5 豪華">Yaris Crossover 1.5 豪華</option>
              <option value="Sienna 3.5 Limited">Sienna 3.5 Limited</option>
              <option value="Camry 2.5 豪華">Camry 2.5 豪華</option>
              <option value="720 S V8">720 S V8</option>
              <option value="765 LT V8">765 LT V8</option>
              <option value="570 S Spider V8">570 S Spider V8</option>
              <option value="GT V8">GT V8</option>
              <option value="9-3 Convertible INDEP.Griffin 2.0T">9-3 Convertible INDEP.Griffin 2.0T</option>
              <option value="9-3 Sport Saden Aero Griffin 2.0T FWD">9-3 Sport Saden Aero Griffin 2.0T FWD</option>
              <option value="9-3 X Griffin 2.0T XWD">9-3 X Griffin 2.0T XWD</option>
              <option value="9-5 Sedan Aero 2.8TS XWD">9-5 Sedan Aero 2.8TS XWD</option>
              <option value="500X Sport">500X Sport</option>
              <option value="500 Abrath">500 Abrath</option>
              <option value="500 1.2">500 1.2</option>
              <option value="A4 Avant RS4">A4 Avant RS4</option>
              <option value="A7 Sportback RS7">A7 Sportback RS7</option>
              <option value="R8 Coupe V10 Performace">R8 Coupe V10 Performace</option>
              <option value="A5 Sportback RS5">A5 Sportback RS5</option>
            </select>
            <br>
            <label for="power">馬力：</label>
            <select id="power" name="power" onchange="this.form.submit()">
              <option value="" selected></option>
              <option value="1">100ps含以下</option>
              <option value="2">101ps~200ps</option>
              <option value="3">201ps~300ps</option>
              <option value="4">301ps~400ps</option>
              <option value="5">401ps~500ps</option>
              <option value="6">501ps含以上</option>
            </select>
            <br>
            <label for="cc">公升數：</label>
            <select id="cc" name="cc" onchange="this.form.submit()">
              <option value="" selected></option>
              <option value="1">500cc含以下</option>
              <option value="2">501cc~600cc</option>
              <option value="3">601cc~1200cc</option>
              <option value="4">1201cc~1800cc</option>
              <option value="5">1801cc~2400cc</option>
              <option value="6">2401cc~3000cc</option>
              <option value="7">3001cc~4200cc</option>
              <option value="8">4200cc~5400cc</option>
              <option value="9">5401cc~6600cc</option>
              <option value="10">6601cc~7800cc</option>
              <option value="11">7801cc含以上</option>
            </select>
            <br>
            <label for="price">價格：</label>
            <select id="price" name="price" onchange="this.form.submit()">
              <option value="" selected></option>
              <option value="1">50萬以下</option>
              <option value="2">50萬~100萬</option>
              <option value="3">100萬~150萬</option>
              <option value="4">150萬~200萬</option>
              <option value="5">200萬~300萬</option>
              <option value="6">300萬~500萬</option>
              <option value="7">500萬~1000萬</option>
              <option value="8">1000萬以上</option>
            </select>
          </div>
          <script type="text/javascript">
            document.getElementById('keyword').value = "<?php echo $_POST['keyword'];?>";
            document.getElementById('branches').value = "<?php echo $_POST['branches'];?>";
            document.getElementById('models').value = "<?php echo $_POST['models'];?>";
            document.getElementById('power').value = "<?php echo $_POST['power'];?>";
            document.getElementById('cc').value = "<?php echo $_POST['cc'];?>";
            document.getElementById('price').value = "<?php echo $_POST['price'];?>";
          </script>
        </form>
        <div class="result">
          <?php include 'search_keyword.php'; ?>
        </div>
      </div>
    </center>
  </body>
</html>
