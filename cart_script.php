<?php

// <li>Baseball</li>
// <li>Zhiguli</li>
// <li>Semki</li>
// <li>Vodka</li>


function addToCart($prod)
{
}

function checkoutCart()
{
}

function displayProd()
{
    $das_cookie = $_COOKIE['product'];
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/TT_Group_Project/php_api/api/get_single/{$das_cookie}");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output1 = curl_exec($curl);
    curl_close($curl);

    $arr = json_decode($output1, true);
    for ($i = 0; $i < count($arr['data']); $i++) {
        #{$arr['data'][$i]['image_path']} <- Future Image Path
        echo "
        <div class='row'>
        <div class='col s5'>
            <img src='https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg'
                alt='item' class='img-fluid' />
        </div>
        <div class='col s6 descriptionBox'>
            <table>
                <tr><td>{$arr['data'][$i]['name']}/h3><td></tr>
                <tr><td>Price: {$arr['data'][$i]['price']}</td></tr>
                <tr><td>Available Quantity: {$arr['data'][$i]['quantity']}</td></tr>
                <tr><td>SKU Code: {$arr['data'][$i]['sku']}/h3><td></tr>
            </table>
            <br>
            <a href='category.php' class='actionBuyButton' data-abc='true'> Buy now </a>
            <div class='price-wrap'>
                <small class='text-success'>(Free shipping)</small>
            
        </div> 
        
        </div>
    </div>


            
            ";
    }
}
