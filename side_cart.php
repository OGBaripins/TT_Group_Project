<script>
    function logout() {
        window.location.href = "index.php";
    }

    function goCheckOut() {
        document.cookie = "category=cart";
        window.location.href = "checkOut.php";
    }
</script>

<div class="row" id="TopBar">
    <div class="col right">
        <div>
            <button type="button" class="actionButton" onclick="logout()">Logout</button>
        </div>
    </div>
    <div class="col right">
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><i class="material-icons">shopping_cart</i></div>
                <div class="collapsible-body">
                    <ul>
                        <?php include("cart_script.php") ?>
                    </ul>
                    <br></br>
                    <button type="button" class="actionButton" onclick="goCheckOut()">Check out</button>
                </div>
            </li>
        </ul>
    </div>
</div>