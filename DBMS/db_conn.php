<?php
  $user = 'root';
  $password = '0000';
  try {
    $db = new PDO('mysql:host=localhost;dbname=Penis;charset=utf8',$user,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  } catch (PDOException $e) {
    Print "ERROR!: ".$e->getMessage();
    die();
  }
?>
