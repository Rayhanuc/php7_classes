<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.21</title>

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
                        echo "<h3 class='text-center'>৩.২১ - অ্যাসোসিয়েটিভ অ্যারে শাফলিং এর সমস্যা এবং সমাধান</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$fruits = array(
    'a' => 'Array',
    'b' => 'Banana',
    'c' => 'Cherry',
    'd' => 'Dates',
    'g' => 'Grape',
);

echo "<h5>Shuffle</h5>";
shuffle($fruits);
echo "<xmp>";
print_r($fruits);
echo "</xmp>";

$key = array_rand($fruits);

echo "Key: ".$key."<br/>";
echo $fruits[$key];
$fruits2 = array(
    'a' => 'Array',
    'b' => 'Banana',
    'c' => 'Cherry',
    'd' => 'Dates',
    'g' => 'Grape',
);
$_fruits2 = $fruits2;

shuffle($_fruits2);

echo "<xmp>";
print_r($_fruits2);
echo "</xmp>";

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

$fruits = array(
    'a' => 'Array',
    'b' => 'Banana',
    'c' => 'Cherry',
    'd' => 'Dates',
    'g' => 'Grape',
);

echo "<h5>Shuffle</h5>";
shuffle($fruits);
echo "<xmp>";
print_r($fruits);
echo "</xmp>";

$key = array_rand($fruits);

echo "Key: ".$key."<br/>";
echo $fruits[$key];
$fruits2 = array(
    'a' => 'Array',
    'b' => 'Banana',
    'c' => 'Cherry',
    'd' => 'Dates',
    'g' => 'Grape',
);
$_fruits2 = $fruits2;

shuffle($_fruits2);

echo "<xmp>";
print_r($_fruits2);
echo "</xmp>";




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