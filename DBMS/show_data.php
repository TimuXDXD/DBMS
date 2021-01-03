<?php
  include 'db_conn.php';

  $query = ("SELECT * FROM Cars WHERE 1");
  $stmt = $db->prepare($query);
  $error = $stmt->execute();
  $result = $stmt->fetchAll();

  echo "<tr>
          <th>ID</th>
          <th>Brand name</th>
          <th>Model</th>
          <th>Power</th>
          <th>cc</th>
          <th>Price(TWD)</th>
          <th>Date</th>
          <th>Branch</th>
          <th></th>
          <th></th>
        </tr>";

  for($i=0; $i<count($result); $i++){
    echo '<tr>';
    echo '<td>'.$result[$i]['ID'].'</td>'.
         '<td>'.$result[$i]['brand_name'].'</td>'.
         '<td>'.$result[$i]['model'].'</td>'.
         '<td>'.$result[$i]['power'].'</td>'.
         '<td>'.$result[$i]['cc'].'</td>'.
         '<td>'.$result[$i]['price'].'</td>'.
         '<td>'.$result[$i]['date'].'</td>'.
         '<td>'.$result[$i]['branch'].'</td>'.
         '<td><button name="edit" onclick=submitForm("edit.php") value="'.$result[$i]['ID'].'">編輯</button></td>'.
         '<td><button name="delete" type="submit" value="'.$result[$i]['ID'].'">刪除</button></td>';
    echo '</tr>';
  }

  $db = null;
?>
