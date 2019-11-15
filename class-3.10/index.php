<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.10</title>

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
                        echo "<h3 class='text-center'>৩.১০ - মূল অ্যারে ঠিক রেখে অ্যারে থেকে কিছু ডেটা এক্সট্রাক্ট করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start



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
$someFruits = array_slice($fruits,2);
$someFruits2 = array_slice($fruits,2,2);
$someFruits3 = array_slice($fruits,2,-1);
$someFruits4 = array_slice($fruits,-3,2);
$someFruits5 = array_slice($fruits,3,3,true);

echo "<h5>full array</h5>";

echo "<xmp>";
print_r($fruits);
echo "</xmp>";

echo "<h5>array slice from element 3 position</h5>";
echo "<xmp>";
print_r($someFruits);
echo "</xmp>";

echo "<h5>2 element take from 3 position</h5>";
echo "<xmp>";
print_r($someFruits2);
echo "</xmp>";

echo "<h5>2 element take from after last 1 position</h5>";
echo "<xmp>";
print_r($someFruits3);
echo "</xmp>";

echo "<h5>Have taken element -3 position</h5>";
echo "<xmp>";
print_r($someFruits4);
echo "</xmp>";

echo "<h5>preserved actual arry key</h5>";
echo "<xmp>";
print_r($someFruits5);
echo "</xmp>";

echo "<br>";
echo "<h5>Associative arrays</h5>"; 
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

echo "<h5>Full Associative arrays</h5>"; 
echo "<xmp>";
print_r($random_array);
echo "</xmp>";

// $random_arrayData = array_slice($random_array,3); //for normal way
$random_arrayData = array_slice($random_array,3,null, true); //for preserved array key (null, true)

echo "<xmp>";
print_r($random_arrayData);
echo "</xmp>";

// $random_arrayData2 = array_slice($random_array,-4,3);
$random_arrayData2 = array_slice($random_array,-4,3, true); //for preserved array key (null, true)

echo "<xmp>";
print_r($random_arrayData2);
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