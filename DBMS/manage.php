<!DOCTYPE html>
<html lang="zh-Hant-TW" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preload" href="css/manage.css" as="style">
    <link rel="stylesheet"  type="text/css" href="css/manage.css">
    <script src="js/manager.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <h1>管理商品</h1>
        <form id="main_form" action="" method="post">
          <table id="main" class="main">
          </table>
        </form>
    </center>
    <?php  include 'Cars_Delete.php';?>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#main').load('show_data.php');
      });
    </script>
  </body>
</html>
