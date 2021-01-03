<?php
  include 'db_conn.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $keyword = $_POST["keyword"];
    $brand_name = $_POST["branches"];
    $model = $_POST["models"];
    $power = $_POST["power"];
    $cc = $_POST["cc"];
    $price = $_POST["price"];
  }

  if(isset($_POST['button']) or isset($_POST['branches']) or isset($_POST['models']) or isset($_POST['power']) or isset($_POST['cc']) or isset($_POST['price'])){
        $first = 1;
        $query = "SELECT * FROM Cars WHERE ";
        if(!empty($keyword) and $first){
          $first = 0;
          $query .=  "(ID LIKE '%$keyword%' OR
                  brand_name LIKE '%$keyword%' OR
                  model LIKE '%$keyword%' OR
                  power LIKE '%$keyword%' OR
                  cc LIKE '%$keyword%' OR
                  price LIKE '%$keyword%' OR
                  date LIKE '%$keyword%' OR
                  branch LIKE '%$keyword%')";
        }
        if(!empty($brand_name)){
          if(!$first)
            $query .= ' AND ';
          else
            $first = 0;
          $query .= "brand_name = '$brand_name'";
        }
        if(!empty($model)){
          if(!$first)
            $query .= ' AND ';
          else
            $first = 0;
          $query .= "model = '$model'";
        }

        if(!empty($power)){
          if(!$first)
            $query .= ' AND ';
          else
            $first = 0;
          switch ($power) {
            case 1:
              $query .= 'power <= 100';
              break;
            case 2:
              $query .= 'power > 100 AND power <= 200';
              break;
            case 3:
              $query .= 'power > 200 AND power <= 300';
              break;
            case 4:
              $query .= 'power > 300 AND power <= 400';
              break;
            case 5:
              $query .= 'power > 400 AND power <= 500';
              break;
            case 6:
              $query .= 'power > 500';
              break;
            default:
              break;
          }
        }

        if(!empty($cc)){
          if(!$first)
            $query .= ' AND ';
          else
            $first = 0;
          switch ($cc) {
            case 1:
              $query .= 'cc <= 500';
              break;
            case 2:
              $query .= 'cc > 500 AND cc <= 600';
              break;
            case 3:
              $query .= 'cc > 600 AND cc <= 1200';
              break;
            case 4:
              $query .= 'cc > 1200 AND cc <= 1800';
              break;
            case 5:
              $query .= 'cc > 1800 AND cc <= 2400';
              break;
            case 6:
              $query .= 'cc > 2400 AND cc <= 3000';
              break;
            case 7:
              $query .= 'cc > 3000 AND cc <= 4200';
              break;
            case 8:
              $query .= 'cc > 4200 AND cc <= 5400';
              break;
            case 9:
              $query .= 'cc > 5400 AND cc <= 6600';
              break;
            case 10:
              $query .= 'cc > 6600 AND cc <= 7800';
              break;
            case 11:
              $query .= 'cc > 7800';
              break;
            default:
              break;
          }
        }

        if(!empty($price)){
          if(!$first)
            $query .= ' AND ';
          else
            $first = 0;
          switch ($price) {
            case 1:
              $query .= 'price <= 500000';
              break;
            case 2:
              $query .= 'price > 500000 AND price <= 1000000';
              break;
            case 3:
              $query .= 'price > 1000000 AND price <= 1500000';
              break;
            case 4:
              $query .= 'price > 1500000 AND price <= 2000000';
              break;
            case 5:
              $query .= 'price > 2000000 AND price <= 3000000';
              break;
            case 6:
              $query .= 'price > 3000000 AND price <= 5000000';
              break;
            case 7:
              $query .= 'price > 5000000 AND price <= 10000000';
              break;
            case 8:
              $query .= 'price > 10000000';
              break;
            default:
              break;
          }
        }

        if($first)
          $query .= '0';
        $query .= ";";

        // echo $query;
        $stmt = $db->prepare($query);
        $error = $stmt->execute();
        $result = $stmt->fetchAll();

       if(!empty($result)){
         echo "<table class='result_table'>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Brand name</th>
                    <th>Model</th>
                    <th>Power</th>
                    <th>cc</th>
                    <th>Price(TWD)</th>
                    <th>Date</th>
                    <th>Branch</th>
                  </tr>
                </thead>
                <tbody>";
         for($i=0; $i<count($result); $i++){
           echo "<tr>";
           echo "<td>".$result[$i]['ID'].'</td>'.
                "<td>".$result[$i]['brand_name'].'</td>'.
                "<td>".$result[$i]['model'].'</td>'.
                "<td>".$result[$i]['power'].'</td>'.
                "<td>".$result[$i]['cc'].'</td>'.
                "<td>".$result[$i]['price'].'</td>'.
                "<td>".$result[$i]['date'].'</td>'.
                "<td>".$result[$i]['branch'].'</td>';
            echo "</tr>";
         }
         echo "</tbody></table>";
       }
       else{
         echo '未搜尋到相關結果';
       }
  }

  $db = null;

?>
