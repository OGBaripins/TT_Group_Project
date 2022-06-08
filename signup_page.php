<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!-- ||WHAT DO WE DO WITH THESE??|| -->
<?php
$isHidden = True;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $isHidden = False;
    } else {
        $url = "localhost/TT_Group_Project/php_api/api/product/create.php";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $data = <<<DATA
                {  
                "username": "{$_POST['username']}",
                "passwd": "{$_POST['password']}",
                "e_mail": "{$_POST['email']}"
                }
                DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);
        curl_close($curl);
        sleep(2);
        header("Location: index.php");
        return;
    }
}
?>
<html>

<head>
    <title>Login Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="cssFiles/loginAndSingIn.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3 class="normalText-big">Sign Up</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control normalText-small" name="username" placeholder="username" id="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control normalText-small" name="password" placeholder="password" id="password">
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control normalText-small" name="email" placeholder="email" id="email">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="submitBtn normalText-medium"">Sign up</button>
                            <h4 <?php if ($isHidden) {
                                    echo "hidden";
                                } ?> class=" err-message normalText-medium">Username/Password/e-mail was not provided<h4>
                                    <!-- <script>
                                function goMainPage() {
                                    if (document.getElementById("username").value == "") {
                                        alert("PLEASE INSERT A USERNAME!");
                                    } else if (document.getElementById("password").value == "") {
                                        alert("PLEASE INSERT A PASSWORD!");
                                    } else if (document.getElementById("email").value == "") {
                                        alert("PLEASE INSERT AN EMAIL!");
                                    }
                                    if (document.getElementById("email").value == "") { // check @
                                        alert("PLEASE INSERT AN EMAIL!");
                                    } else if (document.getElementById("email").value == "") { // check .
                                        alert("PLEASE INSERT AN EMAIL!");
                                    } else {
                                        window.location.href = "index.html";
                                    }
                                }
                            </script> -->

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>