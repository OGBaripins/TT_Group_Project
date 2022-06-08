<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!-- ||WHAT DO WE DO WITH THESE??|| -->

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="cssFiles/loginAndSingIn.css">
</head>

<body>
    <script>
        document.cookie = "category=all";
        document.cookie = "product=";
        document.cookie = "cart=";
    </script>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3 class="normalText-big">Log in</h3>
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
                        <div class="row remember normalText-small">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submitBtn normalText-medium">Login</button>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (empty($_POST['username'])) {
                                    echo '<h4 class="err-message text-center normalText-small">ENTER A USERNAME!<h4>';
                                } else if (empty($_POST['password'])) {
                                    echo '<h4 class="err-message text-center normalText-small">ENTER A PASSWORD<h4>';
                                } else {
                                    $curl = curl_init();
                                    curl_setopt($curl, CURLOPT_URL, "localhost/TT_Group_Project/php_api/api/product/UsersRead.php");
                                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                                    $output1 = curl_exec($curl);
                                    curl_close($curl);
                                    $arr = json_decode($output1, true);
                                    for ($i = 0; $i < count($arr['data']); $i++) {
                                        if ($_POST['username'] == $arr['data'][$i]['username'] && $_POST['password'] == $arr['data'][$i]['passwd']) {
                                            header("Location: http://localhost/TT_Group_Project/main_page.php");
                                            return;
                                        }
                                    }
                                    echo '<h4 class="err-message text-center normalText-small">INCORRECT LOGIN!<h4>';
                                }
                            }
                            ?>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links normalText-small">
                        Don't have an account?<a href="signup_page.php" onclick="">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links normalText-small">
                        <a href="#" onclick="forgor()">Forgot your password?</a>
                        <script>
                            function forgor() {
                                alert("Too bad. You better remember it.");
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['submitMe'])) {

    for ($i = 0; $i < $count; $i++) {
        $name = !empty($_POST['name' . $i]) ? $_POST['name' . $i] : '-';
        $protein = !empty($_POST['protein' . $i]) ? $_POST['protein' . $i] : '-';
        $fat = !empty($_POST['fat' . $i]) ? $_POST['fat' . $i] : '-';
        $carbs = !empty($_POST['carbs' . $i]) ? $_POST['carbs' . $i] : '-';

        if ($name == '-' or $protein == 0 or $fat == 0 or $carbs == 0) {
            "<h3 id = 'normalText'>All fields have not been filled!</h3>";
            return;
        } else {
            $text = '<h3 id="normalText" >The calories for ' . $name . ' (' . $weight . 'g) are:<br>Protein: ' . ($protein * 4) * ($weight / 100) . ' kcal ;<br>Fat: ' . ($fat * 9) * ($weight / 100) . ' kcal ;<br>Carbohydrates: ' . ($carbs * 4) * ($weight / 100) . ' kcal<br>Full calories: ' . (($protein * 4) + ($fat * 9) + ($carbs * 4)) * ($weight / 100) . ' kcal ;</h3><br>';
            array_push($strings, $text);
        }
    }
    for ($i = 0; $i < count($strings); $i++) {
        echo $strings[$i];
    }
}
?>