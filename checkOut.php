<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="page_style.css" />
    <link href="css/prism.css" rel="stylesheet">


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, { accordion: true });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Check Out</title>
</head>

<body>
    <!--TOP BAR-->
    <div class="row" id="TopBar">
        <div class="col right">
            <div>
                <button type="button" class="submitBtn" onclick="logout()">Logout</button>
            </div>
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
    <!--ITEM LIST-->
    <div class="row" id="ContentBar">
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
        <div class="col s3">
            <!--Item-->
            <h5>Asus Laptop with 500GB HDD 8GB RAM</h5>
            <p class="text-primary">$499</p>
            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1571750967/Ecommerce/ef192a21ec96.jpg"
                alt="item" class="img-fluid" />
        </div>
    </div>
</body>

</html>