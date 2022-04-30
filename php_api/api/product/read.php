<?php
//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "../../config/Database.php";
include_once "../../models/Computers.php";
include_once "../../models/Phones.php";
include_once "../../models/Photo_tech.php";
include_once "../../models/Sports.php";
include_once "../../models/Tools.php";
include_once "../../models/TV_audio.php";;

$database = new Database();
$db = $database->connect();

// Function that displays all of the needed info from DB
function fetchData($product)
{
    $result = $product->read();
    $num  = $result->rowCount();

    if ($num > 0) {
        $prod_arr = array();
        $prod_arr["data"] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $product_item = array(
                "id" => $id,
                "name" => $name,
                "sku" => $sku,
                "price" => $price,
                "quantity" => $quantity,
                "image_path" => $image_path,
            );

            array_push($prod_arr["data"], $product_item);
        }

        echo json_encode($prod_arr);
    } else {
        echo json_encode(
            array("message" => "No Posts Found")
        );
    }
}
