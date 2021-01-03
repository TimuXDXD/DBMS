<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preload" href="css/edit.css" as="style">
    <link rel="stylesheet"  type="text/css" href="css/edit.css">
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
      <h1>修改商品</h1>
      <form action="Cars_Update.php" method="post">
        <table class="main">
            <?php include 'Cars_Edit.php';?>
        </table>
      </form>
    </center>
  </body>
</html>
