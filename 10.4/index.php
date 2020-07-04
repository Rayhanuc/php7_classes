<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 10.4</title>

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
                        echo "<h3 class='text-center'>10.4 - Creating a UNIX timestamp from a string (date parsing) and finding a human readable difference between two dates
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

echo mktime(0,0,0,12,12,1980)."<br>";
echo strtotime("12 December, 1980")."<br>";
echo time()."<br>";
echo strtotime("now")."<br>";
echo strtotime("+3days")."<br>";
echo (strtotime("+2weeks 7days 24 hours 86400 seconds")-strtotime("now"))/(86400)."<br>"; // 1 day = 86400

echo date('H:i:s A',strtotime('13 August 2005 11:12:05 PM'));

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

echo mktime(0,0,0,12,12,1980)."<br>";
echo strtotime("12 December, 1980")."<br>";
echo time()."<br>";
echo strtotime("now")."<br>";
echo strtotime("+3days")."<br>";
echo (strtotime("+2weeks 7days 24 hours 86400 seconds")-strtotime("now"))/(86400)."<br>"; // 1 day = 86400

echo date('H:i:s A',strtotime('13 August 2005 11:12:05 PM'));


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