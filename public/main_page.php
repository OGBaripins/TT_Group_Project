<?php require_once('category.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/page_style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

        function set_product_cookie(val) {
            document.cookie = "product=" + val;
        }

        set_cookie('all');
        set_product_cookie("");
        document.cookie = "bought=false";

        if ($_COOKIE['category'] != "all") {
            document.cookie = "category=all";
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <script>
    </script>
    <!--TOP BAR-->
    <?php require 'side_cart.php' ?>
    <div class="logo-text ">
        <span class="normalText-medium">
            <marquee>&#128176;Shopping here is basically stealing!&#128176;</marquee>
        </span>
    </div>
    <!--CATEGORY BAR-->
    <div class="navbar overlay-navbar">
        <div class=<?php active_link("all") ?>>
            <a class="normalText-small" href="main_page.php" onclick="set_cookie('all');"> Home</a>
        </div>
        <div class=<?php active_link("ComputerRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('ComputerRead');">Computers</a>
        </div>
        <div class=<?php active_link("PhoneRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('PhoneRead');">Phones</a>
        </div>
        <div class=<?php active_link("Photo_techRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('Photo_techRead');">Photo Tech</a>
        </div>
        <div class=<?php active_link("SportsRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('SportsRead');">Sports</a>
        </div>
        <div class=<?php active_link("TV_audioRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('TV_audioRead');">TV/Audio</a>
        </div>
        <div class=<?php active_link("ToolsRead") ?>>
            <a class="normalText-small" href="category.php" onclick="set_cookie('ToolsRead');">Tools</a>
        </div>
    </div>

    <br></br>
    <br></br>
    <div class="container">
        <div class="row">
            <?php include "../src/get_products.php" ?>
        </div>
    </div>

</body>

</html>