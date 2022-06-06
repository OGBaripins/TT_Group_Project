<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="page_style.css" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <title>Main page</title>

    <link href="css/prism.css" rel="stylesheet">
    <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, {
                accordion: true
            });
        });

        function logout() {
            window.location.href = "index.html";
        }

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

<body>
    <!--TOP BAR-->
    <div class="row" id="TopBar">
        <div class="col right">
            <div>
                <button type="button" class="submitBtn" onclick="logout()">Logout</button>
            </div>
        </div>
        <div class="col right">
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">shopping_cart</i>Cart</div>
                    <div class="collapsible-body">
                        <ul>
                            <li>Baseball bat</li>
                            <li>Zhiguli</li>
                            <li>Semki</li>
                            <li>Vodka</li>
                        </ul>
                        <br></br>
                        <button type="button" class="submitBtn" onclick="goCheckOut()">Check out</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="logo-text">
        <span class="text text-center">
            <marquee>&#128176;Shopping here is basically stealing!&#128176;</marquee>
        </span>
    </div>
    <!--CATEGORY BAR-->
    <div class="navbar">
        <a href="main_page.php">Home</a>
        <a href="category.php" onclick="set_cookie('ComputerRead');">Computers</a>
        <a href="category.php" onclick="set_cookie('PhoneRead');">Phones</a>
        <a href="category.php" onclick="set_cookie('Photo_techRead');">Photo Tech</a>
        <a href="category.php" onclick="set_cookie('SportsRead');">Sports</a>
        <a href="category.php" onclick="set_cookie('TV_audioRead');">TV/Audio</a>
        <a href="category.php" onclick="set_cookie('ToolsRead');">Tools</a>
    </div>

    <div style="padding:0 16px"></div>
    <br></br>
    <br></br>
    <div class="container">
        <div class="row">
            one product
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>