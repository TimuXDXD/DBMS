<?php
    function Add($_data){
        $_new = json_decode($_data, true);
        include "db_conn.php";
        $query = ("INSERT INTO Cars values (
                  '".$_new['id']."',
                  '".$_new['brand_name']."',
                  '".$_new['model']."',
                  ".$_new['power'].",
                  ".$_new['cc'].",
                  ".$_new['price'].",
                  '".$_new['date']."',
                  '".$_new['branch']."');");
        // echo $query;
        $stmt= $db->prepare($query);
        $result = $stmt->execute();

        $query = ("UPDATE Sells set sell=(SELECT sell FROM Sells WHERE brand_name = '".$_new['brand_name']."') + 1,
                last_sell_date='". $_new['date'] . "',
                last_price=". $_new['price'] ."
                WHERE brand_name = '".$_new['brand_name']."';");
        // echo $query;
        $stmt= $db->prepare($query);
        $result = $stmt->execute();
    }

    include 'db_conn.php';


    if(isset($_POST["save"])){
      $query = ("SELECT ID FROM Cars WHERE 1");
      $stmt = $db->prepare($query);
      $error = $stmt->execute();
      $result = $stmt->fetchAll();

      $temp[] = null;

      for($i=0; $i<count($result); $i++){
        array_push($temp, (int)$result[$i]['ID']);
      }

      $_id = '';
      for($i=0; $i<5-strlen((string)max($temp)+1); $i++){
        $_id .= '0';
      }

      $_id .= (string)max($temp)+1;
      $_brand_name = $_POST["brand_name"];
      $_model = $_POST["model"];
      $_power = $_POST["power"];
      $_cc = $_POST["cc"];
      $_price = $_POST["price"];
      $_date = $_POST["date"];
      $_branch = $_POST["branch"];
      $_data = json_encode(
          array(  "id" => $_id,
                  "brand_name" => $_brand_name,
                  "model" => $_model,
                  "power" => $_power,
                  "cc" => $_cc,
                  "price" => $_price,
                  "date" => $_date,
                  "branch" => $_branch
          )
      );
      Add($_data);
      header("Location: manage.php");
      exit();
    }
?>
