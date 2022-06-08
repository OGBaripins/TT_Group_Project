<script>
    function buyProduct() {
        document.cookie = "product=";
        console.log("product=");
        window.location.href = "category.php";
    }
</script>

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
        if ($_COOKIE['product'] != "") { // FOR SINGLE PRODUCT
            if ($arr['data'][$i]['sku'] == $_COOKIE['product']) {
                echo ("
                    <div class='row'>
                        <div class='col s5 singleItem'>
                            <img src='Product_Pictures/{$arr['data'][$i]['image_path']}.png'
                            class='img-fluid singleProduct' />
                        </div>
                        <div class='col s1'></div>
                        <div class='col s6 descriptionBox'>
                            <table>
                                <tr><td class='normalText-big'>{$arr['data'][$i]['name']}<td></tr>
                                <tr><td class='normalText-small'>Price: {$arr['data'][$i]['price']}$</td></tr>
                                <tr><td class='normalText-small'>Available Quantity: {$arr['data'][$i]['quantity']}</td></tr>
                                <tr><td class='normalText-small'>Available Quantity: {$arr['data'][$i]['sku']}</td></tr>
                            </table>
                            <br>
                            <a class='actionBuyButton normalText-small' onclick='buyProduct()' data-abc='true'> Buy now </a>
                            <div class='price-wrap'>
                                <small class='text-center normalText-small'>(Free shipping)</small>
                            </div>
                        <div>
                            <h3 class='normalText-big'>{$arr['data'][$i]['name']}</h3>
                            <br>
                            <h5 class='normalText-medium'>Price: {$arr['data'][$i]['price']}$</h5>
                            <br>
                            <h5 class='normalText-medium'>Quantity: {$arr['data'][$i]['quantity']}</h5>
                        </div>
                    </div>
                ");
                break;
            }
        } else { // FOR ALL PRODUCTS IN CATEGORY
            echo ("
            <div class='col sp1 item'>
                <div>
                    <table>
                        <tr>
                        <td class='normalText-small'>{$arr['data'][$i]['name']}</td>
                        <td class='normalText-small'><p>{$arr['data'][$i]['price']}$</p></td>
                        </tr>
                    </table>
                    <img src='Product_Pictures/{$arr['data'][$i]['image_path']}.png'
                        class='img-fluid' />
                </div>
                <div class='overlay'>
                    <a href='product.php' class='btn btn-unique normalText-medium' onclick=\"set_product_cookie('{$arr['data'][$i]['sku']}');\"> {$arr['data'][$i]['sku']}</a>
                </div>
            </div>
            ");
        }
        // product data : id; name; sku; price; quantity; image_path;
    }
}
