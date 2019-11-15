<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.11</title>

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
                        echo "<h3 class='text-center'>৩.১১ - অ্যারেকে কাটাকাটি করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random_array = [
    "a" => 12,
    "b" => 45,
    "c" => 34,
    "d" => 22,
    "e" => 77,
    "f" => 31,
    12 => 78,
    "g" => 25,
    
];

$newFruits = array("jackfruit","tamarind");

$someFruits = array_splice($fruits,2,2);
$someFruits2 = array_splice($fruits2,-5,2,$newFruits);

echo "<h5>Full array</h5>"; 
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>Full Associative array</h5>"; 
echo "<xmp>";
print_r($random_array);
echo "</xmp>";


echo "<xmp>";
print_r($someFruits);
echo "</xmp>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<xmp>";
print_r($fruits2);
echo "</xmp>";
echo "<xmp>";
print_r($someFruits2);
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

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random_array = [
    "a" => 12,
    "b" => 45,
    "c" => 34,
    "d" => 22,
    "e" => 77,
    "f" => 31,
    12 => 78,
    "g" => 25,
    
];

$newFruits = array("jackfruit","tamarind");

$someFruits = array_splice($fruits,2,2);
$someFruits2 = array_splice($fruits2,-5,2,$newFruits);

echo "<h5>Full array</h5>"; 
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>Full Associative array</h5>"; 
echo "<xmp>";
print_r($random_array);
echo "</xmp>";


echo "<xmp>";
print_r($someFruits);
echo "</xmp>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<xmp>";
print_r($fruits2);
echo "</xmp>";
echo "<xmp>";
print_r($someFruits2);
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