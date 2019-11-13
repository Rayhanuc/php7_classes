<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.13</title>

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
                        echo "<h3 class='text-center'>১.১৩ - ইফ এলস, লিপ ইয়ার এবং কিভাবে জটিল কন্ডিশন গুলো শর্টকাটে লেখা যায়</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start


// 1 - divisible by 4 ? এটা কি ৪ দিয়ে বিভাজ্য কিনা?
// 2 - divisible by 100 ? এটা কি ১০০ দিয়ে বিভাজ্য কিনা?
// 3 - divisible by 400 ? এটা কি ৪০০ দিয়ে বিভাজ্য কিনা?

$year = 2019;
// Condition method one
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} else if($year % 4 == 0) {
    echo "{$year} is a leap year";
}else {
   echo "{$year} is not a leap year"; 
}

echo "\n<br/>";
// Condition method two
if($year % 4 == 0 && ($year % 100 !=0 || $year % 400==0)){
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year"; 
}

// year = 2000
/*if (true && (false || true) {
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year"; 
}*/

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

// 1 - divisible by 4 ? এটা কি ৪ দিয়ে বিভাজ্য কিনা?
// 2 - divisible by 100 ? এটা কি ১০০ দিয়ে বিভাজ্য কিনা?
// 3 - divisible by 400 ? এটা কি ৪০০ দিয়ে বিভাজ্য কিনা?

$year = 2019;
// Condition method one
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} else if($year % 4 == 0) {
    echo "{$year} is a leap year";
}else {
   echo "{$year} is not a leap year"; 
}

echo "\n<br/>";
// Condition method two
if($year % 4 == 0 && ($year % 100 !=0 || $year % 400==0)){
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year"; 
}

// year = 2000
/*if (true && (false || true) {
    echo "{$year} is a leap year";
}else {
    echo "{$year} is not a leap year"; 
}*/


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