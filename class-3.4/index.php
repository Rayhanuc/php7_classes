<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.4</title>

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
                        echo "<h3 class='text-center'>৩.৪ - স্ট্রিং থেকে অ্যারে এবং অ্যারে থেকে স্ট্রিং, মাল্টিপল ডেলিমিটার</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$vegetables = explode(', ','brinjal, brocolli, carrot, capsicam, cauliflower');
// delimeter ', '
var_dump($vegetables);

echo $vegetables[0];

echo "<br>";

$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;
echo "<br>";
echo count($vegetables);

echo "<br>";
// when need multiple delimeter
$vegetables2 = preg_split('/(, |,)/','brinjal, brocolli, carrot, capsicam, cauliflower,potato, sweet-potato,onion,ginger, lentil');
print_r($vegetables2);
echo "<br>";
echo count($vegetables2);


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


$vegetables = explode(', ','brinjal, brocolli, carrot, capsicam, cauliflower');
// delimeter ', '
var_dump($vegetables);

echo $vegetables[0];

echo "<br>";

$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;
echo "<br>";
echo count($vegetables);

echo "<br>";
// when need multiple delimeter
$vegetables2 = preg_split('/(, |,)/','brinjal, brocolli, carrot, capsicam, cauliflower,potato, sweet-potato,onion,ginger, lentil');
print_r($vegetables2);
echo "<br>";
echo count($vegetables2);


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