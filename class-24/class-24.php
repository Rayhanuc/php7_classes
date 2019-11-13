<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.24</title>

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
                        echo "<h3 class='text-center'>১.২৪ - ফর লুপ দিয়ে কোন নাম্বারের ফ্যাক্টোরিয়াল বের করা
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// 5 factorial 5*4*3*2*1
// 6 factorial 6*5*4*3*2*1
$n = 6;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $n, $factorial);
echo "<br/>";
$n = 3;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $n, $factorial);
echo "<br/>";

// Another method for this kinkd of work
$n = 8;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial *= $i;
}
printf("Factorial of %d is %d", $n, $factorial);

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
    
// 5 factorial 5*4*3*2*1
// 6 factorial 6*5*4*3*2*1
$n = 6;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $n, $factorial);
echo "<br/>";
$n = 3;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial = $factorial * $i;
}
printf("Factorial of %d is %d", $n, $factorial);
echo "<br/>";

// Another method for this kinkd of work
$n = 8;
for ($i=$n, $factorial=1; $i>1; $i--) { 
    $factorial *= $i;
}
printf("Factorial of %d is %d", $n, $factorial);



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