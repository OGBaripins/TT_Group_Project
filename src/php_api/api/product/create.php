<?php
//Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With");

include_once "../../config/Database.php";
include_once "../../models/Computers.php";
include_once "../../models/Phones.php";
include_once "../../models/Photo_tech.php";
include_once "../../models/Sports.php";
include_once "../../models/Tools.php";
include_once "../../models/TV_audio.php";
include_once "../../models/Users.php";


//Finding a String with SKU code
$body = file_get_contents('php://input');

if (preg_match('/"username".*/', $body, $matches)) {
    $database = new Database();
    $db = $database->connect();
    putUserData(new Users($db));
    return;
}

preg_match('/"sku".*/', $body, $matches);

$matchStr = $matches[0];
$skuCode = substr($matchStr, 7, -3);

checkDatabase($skuCode);

function checkDatabase($code)
{
    $database = new Database();
    $db = $database->connect();

    //Choosing in wich table the data will be inserted to

    if (substr($code, 0, -5) == "KKL") {
        echo json_encode(
            array("Computer is being added to Database")
        );
        putData(new Computers($db));
    };
    if (substr($code, 0, -5) == "HJO") {
        echo json_encode(
            array("Phone is being added to Database")
        );
        putData(new Phones($db));
    };
    if (substr($code, 0, -5) == "PED") {
        echo json_encode(
            array("Photo Tech is being added to Database")
        );
        putData(new Photo_tech($db));
    }
    if (substr($code, 0, -5) == "QZC") {
        echo json_encode(
            array("Sports EQuipment is being added to Database")
        );
        putData(new Sports($db));
    };
    if (substr($code, 0, -5) == "MIP") {
        echo json_encode(
            array("Tools are being added to Database")
        );
        putData(new Tools($db));
    };
    if (substr($code, 0, -5) == "LEC") {
        echo json_encode(
            array("TV, Audio Tech is being added to Database")
        );
        putData(new TV_audio($db));
    } else {
        return;
    };
}

function putData($product)
{

    $data = json_decode(file_get_contents("php://input"));

    $product->name = $data->name;
    $product->price = $data->price;
    $product->sku = $data->sku;
    $product->quantity = $data->quantity;
    $product->image_path = $data->image_path;

    if ($product->create()) {
        return;
    }
}

function putUserData($user)
{

    $data = json_decode(file_get_contents("php://input"));

    $user->username = $data->username;
    $user->passwd = $data->passwd;
    $user->e_mail = $data->e_mail;

    if ($user->create()) {
        return;
    }
}
