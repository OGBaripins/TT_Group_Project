<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "read.php";
include_once "../../config/Database.php";
include_once "../../models/Photo_tech.php";

$database = new Database();
$db = $database->connect();

fetchData(new Photo_tech($db));
