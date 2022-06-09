<script>
    function logout() {
        window.location.href = "index.php";
    }

    function goCheckOut() {
        document.cookie = "category=cart";
        window.location.href = "checkOut.php";
    }
</script>

<div class="row damn-daniel" id="TopBar">
    <div class="col right">
        <div>
            <button type="button" class="actionButton normalText-small m-t-8" onclick="logout()">Logout</button>
        </div>
    </div>
    <div class="col right">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">shopping_cart</i></div>
                <div class="collapsible-body">
                    <ul>
                        <?php
                        $comb_price = 0;
                        $cartArr = explode(",", $_COOKIE['cart']);
                        $url = "localhost/TT_Group_Project/src/php_api/api/product/get_single.php";

                        $curl = curl_init();
                        for ($i = 0; $i < count($cartArr); $i++) {
                            if (strlen($cartArr[$i]) != 8) {
                                continue;
                            }
                            curl_setopt($curl, CURLOPT_URL, $url);
                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                            #curl_setopt($curl, CURLOPT_POST, 1);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                            $data = array("sku" => "{$cartArr[$i]}");
                            $data_string = json_encode($data);

                            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

                            $resp = curl_exec($curl);
                            $arr = json_decode($resp, true);
                            echo "<li class='normalText-small'>{$arr["data"][0]["name"]} - {$arr["data"][0]["price"]}$</li>";
                            $comb_price = $comb_price + (int)$arr["data"][0]["price"];
                        }
                        echo "<li class='normalText-medium center-text'>Price: {$comb_price}$</li>";
                        setcookie('money', $comb_price);
                        curl_close($curl);
                        ?>
                    </ul>
                    <br></br>
                    <button type="button" class="actionButton" onclick="goCheckOut()">Check out</button>
                </div>
            </li>
        </ul>
    </div>
</div>