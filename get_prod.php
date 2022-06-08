<?php

$curl = curl_init();
$das_cookie = $_COOKIE['category'];
$all_prod_arr = ['ComputerRead', 'PhoneRead', 'Photo_techRead', 'SportsRead', 'TV_audioRead', 'ToolsRead'];

if ($das_cookie === 'all') {

    for ($i = 0; $i < count($all_prod_arr); $i++) {
        curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/php_api/api/product/{$all_prod_arr[$i]}.php");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output1 = curl_exec($curl);
        sendData($output1);
    }
    curl_close($curl);
} else {

    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/php_api/api/product/{$das_cookie}.php");
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
            
            <div>
                <table>
                    <tr>
                    <td>{$arr['data'][$i]['name']}</td>
                    <td><p>{$arr['data'][$i]['price']}$</p></td>
                    </tr>
                </table>
                <img src='Product_Pictures/{$arr['data'][$i]['image_path']}.png'
                    class='img-fluid' />
            </div>
            <div class='overlay'>
                <a href='product.php' class='btn btn-unique' onclick=\"set_product_cookie('{$arr['data'][$i]['sku']}');\"> {$arr['data'][$i]['sku']}</a>
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
