<?php
    function Delete($_data){
        $_new = json_decode($_data, true);
        include "db_conn.php";

        $query = ("UPDATE Sells set
                sell=(SELECT sell FROM Sells
                      WHERE brand_name=(SELECT brand_name FROM Cars
                                          WHERE ID = '".$_new['id']."')) - 1
                WHERE brand_name=(SELECT brand_name FROM Cars WHERE ID = '".$_new['id']."');");
        // echo $query;
        $stmt= $db->prepare($query);
        $result = $stmt->execute();

        $query = ('DELETE FROM Cars WHERE ID='.$_new["id"]);
        $stmt = $db->prepare($query);
        $result = $stmt->execute();
    }

    if(isset($_POST['delete'])){
      $id = $_POST['delete'];
      $data = json_encode(array("id" => $id));
      Delete($data);
      header('Location: manage.php');
      exit();
     }

?>
