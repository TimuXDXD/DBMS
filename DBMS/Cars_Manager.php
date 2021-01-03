<?php
    include "Cars_Add.php";
    include "Cars_Edit.php";
    include "Cars_Delete.php";

    $mode = $_POST["mode"];

    $dom = new DOMDocument();
    $dom->load('manage.php');
    $data = $dom->getElementById('')

    switch ($mode){
        case "Add":
            $_id = $_POST['id'];
            $_brand_name = $_POST["brand name"];
            $_model = $_POST["model"];
            $_power = $_POST["power"];
            $_cc = $_POST["cc"];
            $_price = $_POST["price"];
            $_date = $_POST["date"];
            $_branch = $_POST["branch"];
            $_data = json_encode(
                array(  "id" => $_id,
                        "brand name" => $_brand_name,
                        "model" => $_model,
                        "power" => $_power,
                        "cc" => $_cc,
                        "price" => $_price,
                        "date" => $_date,
                        "branch" => $_branch
                )
            );
            Add(json_encode($_data));
            break;

        case "Edit":
            $_id = $_POST["id"];
            $_brand_name = $_POST["brand name"];
            $_model = $_POST["model"];
            $_power = $_POST["power"];
            $_cc = $_POST["cc"];
            $_price = $_POST["price"];
            $_date = $_POST["date"];
            $_branch = $_POST["branch"];
            $_data = json_encode(
                array(  "id" => $_id,
                        "brand name" => $_brand_name,
                        "model" => $_model,
                        "power" => $_power,
                        "cc" => $_cc,
                        "price" => $_price,
                        "date" => $_date,
                        "branch" => $_branch
                )
            );
            Edit(json_encode($_data));
            break;

        case "Delete":
            $_id = $_POST["id"];
            $_data = json_encode(array("id" => $_id));
            Delete($_data);
            break;

        default:
            echo "error";
            break;
    }

?>
