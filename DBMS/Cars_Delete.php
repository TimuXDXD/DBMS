<?php
    function Delete($_data){
        $_new = json_decode($_data, true);
        include_once "db_conn.php";
        $query = ('delete from Cars where ID='.$_new["id"]);
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }

    if(isset($_POST['delete'])){
      $id = $_POST['delete'];
      $data = json_encode(array("id" => $id));
      Delete($data);
     }
?>
