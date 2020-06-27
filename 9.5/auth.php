<?php
session_start([
    'cookie_lifetime' => 300 // 300 means 300 / 60 = 5 minutes
]);

$error = false;
// session_destroy();

$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
$fp = fopen("./data/users.txt","r");
if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == sha1($password)) {
            $_SESSION['loggedin'] = ture;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header('location:index.php');
        }
    }
    if(!$_SESSION['loggedin']) {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location:index.php');    
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 9.5</title>


        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

        <style>
            body {
                margin-top: 30px;
            }
            .height {
              margin-top: 40px;
            }
        </style>

    </head>
    <body>

        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <h2>Simple Auth Example</h2>
                    </div>
                </div>
                <div class="height"></div>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <?php
                        // echo sha1("rabbit")."<br>";
                        if (true == $_SESSION['loggedin']) {
                            echo "Hello Admin, Welcome!";
                        }else {
                            echo "Hello Stranger, Logon Below";
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <?php
                        if ($error) {
                            echo "<blockquote>Username and Password didn't match</blockquote>";
                        }

                        if (false == $_SESSION['loggedin']) :
                        ?>
                        <div class="height"></div>
                        <form method="POST">
                            <?php if(empty($username)):?>
                            <label for="username">Username</label>
                            <?php endif;?>
                            <input type="text" name="username" id="username">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                            <button type="submit" class="button-primary" name="submit">Log In</button>
                        </form>
                        <?php
                        else :
                        ?>
                        <div class="height"></div>
                        <form action="auth.php" method="POST">
                            <input type="hidden" name="logout" value="1">
                            <button type="submit" class="button-primary" name="submit">Log Out</button>
                        </form>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>



        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
