<?php
//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

include_once "../../config/Database.php";
include_once "../../models/Computers.php";
include_once "../../models/Phones.php";
include_once "../../models/Photo_tech.php";
include_once "../../models/Sports.php";
include_once "../../models/Tools.php";
include_once "../../models/TV_audio.php";

//Finding a String with SKU code
$body = file_get_contents('php://input');
preg_match('/"sku".*/', $body, $matches);

$matchStr = $matches[0];
$skuCode = substr($matchStr, 7, -2);

checkDatabase($skuCode);

// Computers: SKU = KKL 00000
// Phones: SKU = HJO 00000
// Photo Tech: SKU = PED 00000
// Sports: SKU = QZC 00000
// Tools: SKU = MIP 00000
// TV, Audio: SKU = LEC 00000


function checkDatabase($code)
{
    $database = new Database();
    $db = $database->connect();

    //Choosing in wich table the data will be inserted to

    if (substr($code, 0, -5) == "KKL") {
        get_single_entree(new Computers($db));
    };
    if (substr($code, 0, -5) == "HJO") {
        get_single_entree(new Phones($db));
    };
    if (substr($code, 0, -5) == "PED") {
        get_single_entree(new Photo_tech($db));
    }
    if (substr($code, 0, -5) == "QZC") {
        get_single_entree(new Sports($db));
    };
    if (substr($code, 0, -5) == "MIP") {
        get_single_entree(new Tools($db));
    };
    if (substr($code, 0, -5) == "LEC") {
        get_single_entree(new TV_audio($db));
    } else {
        return;
    };
}


//Data removing function
function get_single_entree($product)
{

    $data = json_decode(file_get_contents("php://input"));

    $product->sku = $data->sku;

    $result = $product->get_single();
    $num  = $result->rowCount();

    if ($num >= 0) {
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
