<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.20</title>

        <!-- bootstrap css link -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- style css link -->
        <link href="assets/css/class-style.css" rel="stylesheet">
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
                        echo "<h3 class='text-center'>৩.২০ - অ্যারে শাফল করা এবং র‍্যান্ডম নাম্বার নিয়ে আলোচনা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$numbers = range(40,72);
echo "Total numbers: ".count($numbers);
echo "<xmp>";
print_r($numbers);
echo "</xmp>";

echo "<br>";
$random = mt_rand(0,32);

echo "Random Number is: ".$random."<br>";
echo "Random Number is: ".$numbers[$random]."<br>";


$random = mt_rand(0,32);

echo "Random Number is: ".$numbers[$random]."<br>";

$numbers2 = range(40,72);
$random2 = mt_rand(0,32);
$luck = $numbers2[$random2];
if($luck%2 == 0){
    echo "Head";
}else {
    echo "Tail";
}

$numbers3 = range(40,72);

echo "<h5>shuffle function applied</h5>";
shuffle($numbers3);
echo "<xmp>";
print_r($numbers3);
echo "</xmp>";

$randomNumber = $numbers3[3];
echo $randomNumber;

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

$numbers = range(40,72);
echo "Total numbers: ".count($numbers);
echo "<xmp>";
print_r($numbers);
echo "</xmp>";

echo "<br>";
$random = mt_rand(0,32);

echo "Random Number is: ".$random."<br>";
echo "Random Number is: ".$numbers[$random]."<br>";


$random = mt_rand(0,32);

echo "Random Number is: ".$numbers[$random]."<br>";

$numbers2 = range(40,72);
$random2 = mt_rand(0,32);
$luck = $numbers2[$random2];
if($luck%2 == 0){
    echo "Head";
}else {
    echo "Tail";
}

$numbers3 = range(40,72);

echo "<h5>shuffle function applied</h5>";
shuffle($numbers3);
echo "<xmp>";
print_r($numbers3);
echo "</xmp>";

$randomNumber = $numbers3[3];
echo $randomNumber;


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