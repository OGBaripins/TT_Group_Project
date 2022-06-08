<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="cssFiles/page_style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Main page</title>

    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {
                accordion: true
            });
        });

        function set_cookie(val) {
            document.cookie = "category=" + val;
        }

        function buyItems() {
            document.cookie = "cart=";
            document.cookie = "bought=true";
            window.location.href = "checkOut.php";
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Check Out</title>
</head>

<body>
    <!--TOP BAR-->
    <?php require 'side_cart.php';?>
    <div class="logo-text">
        <span class="normalText-medium">
            <marquee>&#128176;Shopping here is basically stealing!&#128176;</marquee>
        </span>
    </div>
    <!--CATEGORY BAR-->
    <div class="navbar">
        <a class="normalText-small" href="main_page.php" onclick="set_cookie('all');">Home</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('ComputerRead');">Computers</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('PhoneRead');">Phones</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('Photo_techRead');">Photo Tech</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('SportsRead');">Sports</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('TV_audioRead');">TV/Audio</a>
        <a class="normalText-small" href="category.php" onclick="set_cookie('ToolsRead');">Tools</a>
    </div>
    <!--ITEM LIST-->
    <br>
    <br>
    <div class="container">
        
        <div class="row" id="ContentBar">
            <?php include "get_products.php" ?>
        </div>
        <div class="row" id="ContentBar">
            <button type="button" class="actionButton" onclick="buyItems()">Purchase Items</button>
        </div>
        <h4 <?php if ($_COOKIE['bought'] == 'false') {
                echo "hidden";
            } ?> class="normalText-medium"><?php echo("You have purchased the selected items for "); echo("{$_COOKIE['money']}"); echo("$"); ?></h4>
    </div>


</body>

</html>