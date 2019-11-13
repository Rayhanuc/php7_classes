<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.31</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo "<h1 class='text-center'>PHP-7</h1> \n<br/>";
                        echo "<h3 class='text-center'>১.৩১ - নাল কোলেস অপারেটর</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// This operator will work only in PHP-7
$default_lat = 23.9;
$default_lon = 90.8;

$user_lat = 12.3;

$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;
echo "<br/>";




$default_lat2 = 23.9;
$default_lon2 = 90.8;

$user_lat2 = 14.5;

$lat2 = $user_lat2 ?? $default_lat2;
echo $lat2;

echo "<br/>";
// if statement
$default_lat3 = 45.2;
$default_lon3 = 35.9;

$user_lat3 = 18.7;

if (isset($user_lat3)) {
    $lat3= $user_lat3;
    echo $lat3;
}else{
    $lat3 = $default_lat3;
    echo $lat3;
}

// php end

                        </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-area">

                        <?php
                        echo "<h4>PHP Code Result: </h4>";
                        
// php code start

// This operator will work only in PHP-7
$default_lat = 23.9;
$default_lon = 90.8;

$user_lat = 12.3;

$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat;
echo "<br/>";




$default_lat2 = 23.9;
$default_lon2 = 90.8;

$user_lat2 = 14.5;

$lat2 = $user_lat2 ?? $default_lat2;
echo $lat2;

echo "<br/>";
// if statement
$default_lat3 = 45.2;
$default_lon3 = 35.9;

$user_lat3 = 18.7;

if (isset($user_lat3)) {
    $lat3= $user_lat3;
    echo $lat3;
}else{
    $lat3 = $default_lat3;
    echo $lat3;
}





// php end
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-area-text">
                            <p ><?php echo "© 2019 - Rayhan Uddin Chowdhury" ?></p>
                        </div>
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