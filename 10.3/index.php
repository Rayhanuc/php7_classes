<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 10.3</title>

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
                        echo "<h3 class='text-center'>10.3 - Create a Unix timestamp for any day month month year and create a GMT timestamp</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

echo time()."<br>";
echo mktime(0,0,0,12,1,2020)."<br>";
date_default_timezone_set('Asia/Dhaka')."<br>";
echo mktime(0,0,0,12,1,2020)."<br>";
echo gmmktime(0,0,0,12,1,2020)."<br>";
echo (77200-59200)/(60*60)."<br>";

echo (mktime(0,0,0,12,10,2020) - mktime(0,0,0,11,28,2020))/(24*60*60)." Days";

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

echo time()."<br>";
echo mktime(0,0,0,12,1,2020)."<br>";
date_default_timezone_set('Asia/Dhaka')."<br>";
echo mktime(0,0,0,12,1,2020)."<br>";
echo gmmktime(0,0,0,12,1,2020)."<br>";
echo (77200-59200)/(60*60)."<br>";

echo (mktime(0,0,0,12,10,2020) - mktime(0,0,0,11,28,2020))/(24*60*60)." Days";


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