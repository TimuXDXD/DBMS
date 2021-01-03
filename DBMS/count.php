<?php
  include 'db_conn.php';

  $query = ("SELECT count(ID) FROM Cars WHERE 1");
  $stmt = $db->prepare($query);
  $error = $stmt->execute();
  $result = $stmt->fetchAll();

  echo '<span class="count">(數量共計'.$result[0]['count(ID)'].'件)</span>';
?>
