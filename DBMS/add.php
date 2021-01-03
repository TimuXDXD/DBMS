<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preload" href="css/add.css" as="style">
    <link rel="stylesheet"  type="text/css" href="css/add.css">
    <title>販賣車輛管理系統</title>
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
      <h1>新增商品</h1>
      <form action="Cars_Add.php" method="post">
        <table class="main">
          <tr>
            <td>
              <label for="brand_name">品牌：</label>
              <input size="10" type="text" name="brand_name" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="model">車型：</label>
              <input size="35" type="text" name="model" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cc">公升數：</label>
              <input size="5" type="text" name="cc" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="power">馬力：</label>
              <input size="5" type="text" name="power" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="price">價格：</label>
              <input size="15" type="text" name="price" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="date">交易時間：</label>
              <input size="10" type="text" name="date" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="branch">販賣門市：</label>
              <input size="10" type="text" name="branch" value="">
            </td>
          </tr>
          <tr class="foot">
            <td>
              <button type="submit" name="save">儲存</button>
            </td>
          </tr>
        </table>
      </form>
    </center>
  </body>
</html>
