<?php
  include 'db_conn.php';

  if(isset($_POST['edit'])){
    $id = $_POST['edit'];
    $query = ("SELECT * FROM Cars WHERE ID = $id");
    $stmt = $db->prepare($query);
    $error = $stmt->execute();
    $result = $stmt->fetchAll();

    echo '<tr>
            <td>
              <label for="brand_name">品牌：</label>
              <input size="10" type="text" name="brand_name" value="'.$result[0]['brand_name'].'">
            </td>
        </tr>
        <tr>
          <td>
            <label for="model">車型：</label>
            <input size="35" type="text" name="model" value="'.$result[0]['model'].'">
          </td>
        </tr>
        <tr>
          <td>
            <label for="cc">公升數：</label>
            <input size="5" type="text" name="cc" value="'.$result[0]['cc'].'">
          </td>
        </tr>
        <tr>
          <td>
            <label for="power">馬力：</label>
            <input size="4" type="text" name="power" value="'.$result[0]['power'].'">
          </td>
        </tr>
        <tr>
          <td>
            <label for="price">價格：</label>
            <input size="15" type="text" name="price" value="'.$result[0]['price'].'">
          </td>
        </tr>
        <tr>
          <td>
            <label for="date">交易時間：</label>
            <input size="10" type="text" name="date" value="'.$result[0]['date'].'">
          </td>
        </tr>
        <tr>
          <td>
            <label for="branch">販賣門市：</label>
            <input size="10" type="text" name="branch" value="'.$result[0]['branch'].'">
          </td>
        </tr>
        <tr class="foot">
          <td>
            <button type="submit" name="save" value="'.$result[0]['ID'].'">儲存</button>
          </td>
        </tr>';
  }
?>
