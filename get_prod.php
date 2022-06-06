<?php

$curl = curl_init();
$das_cookie = $_COOKIE['category'];
$all_prod_arr = ['ComputerRead', 'PhoneRead', 'Photo_techRead', 'SportsRead', 'TV_audioRead', 'ToolsRead'];

if ($das_cookie === 'all') {

    for ($i = 0; $i < count($all_prod_arr); $i++) {
<<<<<<< HEAD
        curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/TT_Group_Project/php_api/api/product/{$all_prod_arr[$i]}.php");
=======
        curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/php_api/api/product/{$all_prod_arr[$i]}.php");
>>>>>>> 25feb6efc5a96347c958c52e044d41bc8180640b
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output1 = curl_exec($curl);
        sendData($output1);
    }
    curl_close($curl);
} else {

<<<<<<< HEAD
    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/TT_Group_Project/php_api/api/product/{$das_cookie}.php");
=======
    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/php_api/api/product/{$das_cookie}.php");
>>>>>>> 25feb6efc5a96347c958c52e044d41bc8180640b
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output1 = curl_exec($curl);

    curl_close($curl);

    sendData($output1);
}



function sendData($arr)
{
    $arr = json_decode($arr, true);
    for ($i = 0; $i < count($arr['data']); $i++) {
        echo ("
        <div class='col sp1 item'>
        <div class='overlay'>
                <a href='product.php' class='btn btn-unique' data-abc='true'>View Details</a>
            </div>
            <div>
                <table class='margin-bottom '>
                    <tr>
                    <td>{$arr['data'][$i]['name']}</td>
                    <td><p>{$arr['data'][$i]['price']}$</p></td>
                    </tr>
                </table>
                <img src='https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg'
                    class='img-fluid' />
            </div>
            
        </div>
        
        ");
        // echo "
        // <tr>
        //     <td>{$arr['data'][$i]['id']}</td>
        //     <td>{$arr['data'][$i]['name']}</td>
        //     <td>{$arr['data'][$i]['sku']}</td>
        //     <td>{$arr['data'][$i]['price']}</td>
        //     <td>{$arr['data'][$i]['quantity']}</td>
        //     <td>{$arr['data'][$i]['sku']}</td>
        //     <td>{$arr['data'][$i]['image_path']}</td>
        // </tr>";
    }
}

function checkUsers($username, $passwd)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/TT_Group_Project/php_api/api/product/UsersRead.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output1 = curl_exec($curl);

    curl_close($curl);

    $arr = json_decode($output1, true);

    for ($i = 0; $i < count($arr['data']); $i++) {
        echo ($i['data']);
        if ($username == $arr['data'][$i]['username'] && $passwd == $arr['data'][$i]['passwd']) {
            header("Location: http://localhost/TT_Group_Project/TT_Group_Project/main_page.php");
        }
    }
    header("Location: http://localhost/TT_Group_Project/TT_Group_Project/index.php");
}
