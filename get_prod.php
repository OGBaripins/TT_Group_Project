<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/TT_Group_Project/php_api/api/product/{$_COOKIE['category']}");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$output1 = curl_exec($curl);

curl_close($curl);

sendData($output1);

function sendData($arr)
{
    $arr = json_decode($arr, true);

    for ($i = 0; $i < count($arr['data']); $i++) {
        echo ("
        <div class='col sp3 item'>
            <div class='d-flex justify-content-between align-items-center p-2'>
                <h4>{$arr['data'][$i]['name']}</h4>
                <p class='text-primary'>{$arr['data'][$i]['price']}</p>
                <img src='https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg'
                    alt='camera' class='img-fluid' />
                <div class='overlay d-flex align-items-center justify-content-center'>
                    <a href='detail.html' class='btn btn-unique' data-abc='true'>View Details</a>
                </div>
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
