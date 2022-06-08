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

        function goCheckOut() {
            window.location.href = "checkOut.php";
        }

        function set_cookie(val) {
            document.cookie = "category=" + val;
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<!-- test cpmment -->

<body>
    <!--TOP BAR-->
    <?php require 'side_cart.php' ?>
    <div class="logo-text">
        <span class="text text-center">
            <marquee>&#128176;Shopping here is basically stealing!&#128176;</marquee>
        </span>
    </div>
    <!--CATEGORY BAR-->
    <div class="navbar">
        <a href="main_page.php" onclick="set_cookie('all');"> Home</a>
        <a href="category.php" onclick="set_cookie('ComputerRead');">Computers</a>
        <a href="category.php" onclick="set_cookie('PhoneRead');">Phones</a>
        <a href="category.php" onclick="set_cookie('Photo_techRead');">Photo Tech</a>
        <a href="category.php" onclick="set_cookie('SportsRead');">Sports</a>
        <a href="category.php" onclick="set_cookie('TV_audioRead');">TV/Audio</a>
        <a href="category.php" onclick="set_cookie('ToolsRead');">Tools</a>
    </div>
    <!--PRODUCT LIST-->
    <br></br>
    <br></br>
    <div class="container">
        <div class="row">
            <?php include "get_prod.php" ?>
        </div>
    </div>

</body>

</html>