<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 10.1</title>

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
                        echo "<h3 class='text-center'>10.1 - Working with time in PHP, microtime and benchmarking</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

/*echo time()."<br/>";
echo date('d/m/y')."<br/>";
echo date('d/F/Y');*/

// unix epoch
// unix timestamp
// echo microtime(true)."<br/>";
// var_dump(microtime(false))."<br/>";

// $mt = microtime(true);
// printf("%10.18f",$mt);

$startTime = microtime(true);
factorial(1000);
sleep(3);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

function factorial($n) {
    $result = 1;
    for ($i = 1; $i<=$n; $i++){
        $result *=$i;
    }
    return $result;
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

/*echo time()."<br/>";
echo date('d/m/y')."<br/>";
echo date('d/F/Y');*/

// unix epoch
// unix timestamp
// echo microtime(true)."<br/>";
// var_dump(microtime(false))."<br/>";

// $mt = microtime(true);
// printf("%10.18f",$mt);

$startTime = microtime(true);
factorial(1000);
sleep(3);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

function factorial($n) {
    $result = 1;
    for ($i = 1; $i<=$n; $i++){
        $result *=$i;
    }
    return $result;
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