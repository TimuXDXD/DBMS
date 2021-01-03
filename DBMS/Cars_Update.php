<?php
    function Update($_data){
        $_new = json_decode($_data, true);
        include "db_conn.php";
        $query = ('UPDATE Cars set brand_name="'.$_new['brand_name'].
                '",model="'.$_new['model'].
                '",power='.$_new['power'].
                ',cc='.$_new['cc'].
                ',price='.$_new['price'].
                ',date="'.$_new['date'].
                '",branch="'.$_new['branch'].
                '" WHERE ID="'.$_new['id'].'"');
        $stmt= $db->prepare($query);
        $result = $stmt->execute();
    }

    if(isset($_POST["save"])){
      $id = $_POST["save"];
      $brand_name = $_POST["brand_name"];
      $model = $_POST["model"];
      $power = $_POST["power"];
      $cc = $_POST["cc"];
      $price = $_POST["price"];
      $date = $_POST["date"];
      $branch = $_POST["branch"];
      $data = json_encode(
          array(  "id" => $id,
                  "brand_name" => $brand_name,
                  "model" => $model,
                  "power" => $power,
                  "cc" => $cc,
                  "price" => $price,
                  "date" => $date,
                  "branch" => $branch
          )
      );

      Update($data);
    }
    header("Location: manage.php");
    exit();
?>
