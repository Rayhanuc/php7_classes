<?php
session_start([
    'cookie_lifetime' => 300 // 300 means 300 / 60 = 5 minutes
]);

$error = false;

// session_destroy();

if (isset($_POST['username']) && isset($_POST['password']) ) {
    // if ('admin' == $_POST['username'] && 'rabbit' == $_POST['password']) {
    if ('admin' == $_POST['username'] && '6d0ebbbdce32474db8141d23d2c01bd9628d6e5f' == sha1($_POST['password'])) {
        $_SESSION['loggedin'] = true;
    }else {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if (isset($_POST['logout'])) {
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 9.3</title>


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
                            echo "<blockquote>Username and Passowrd didn't match</blockquote>";
                        }

                        if (false == $_SESSION['loggedin']) :
                        ?>
                        <div class="height"></div>
                        <form method="POST">
                            <label for="username">Username</label>
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
