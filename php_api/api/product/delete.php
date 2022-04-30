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
    echo $code;
    $database = new Database();
    $db = $database->connect();

    //Choosing in wich table the data will be inserted to

    if (substr($code, 0, -5) == "KKL") {
        echo json_encode(
            array("Computer is being deleted from the Database")
        );
        deleteData(new Computers($db));
    };
    if (substr($code, 0, -5) == "HJO") {
        echo json_encode(
            array("Phone is being deleted from the Database")
        );
        deleteData(new Phones($db));
    };
    if (substr($code, 0, -5) == "PED") {
        echo json_encode(
            array("Photo Tech is being deleted from the Database")
        );
        deleteData(new Photo_tech($db));
    }
    if (substr($code, 0, -5) == "QZC") {
        echo json_encode(
            array("Sports EQuipment is being deleted from the Database")
        );
        deleteData(new Sports($db));
    };
    if (substr($code, 0, -5) == "MIP") {
        echo json_encode(
            array("Tools are being deleted from the Database")
        );
        deleteData(new Tools($db));
    };
    if (substr($code, 0, -5) == "LEC") {
        echo json_encode(
            array("TV, Audio Tech is being deleted from the Database")
        );
        deleteData(new TV_audio($db));
    } else {
        return;
    };
}


//Data removing function
function deleteData($product)
{


    $data = json_decode(file_get_contents("php://input"));

    $product->sku = $data->sku;

    if ($product->delete()) {
        echo json_encode(
            array("Product removed")
        );
    } else {
        echo json_encode(
            array("Product was not removed")
        );
    }
}
