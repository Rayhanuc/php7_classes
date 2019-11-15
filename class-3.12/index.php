<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.12</title>

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
                        echo "<h3 class='text-center'>৩.১২ - কয়েকটি অ্যারে কে একসাথে যোগ করা (খুবই ইম্পর্ট্যান্ট)</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
// $fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
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

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3, null, true);

$newFruits = array_merge($newFruits1, $newFruits2);
 
echo "<h5>Merge two array in one</h5>"; 
echo "<xmp>";
print_r($newFruits1);
echo "</xmp>";
echo "<xmp>";
print_r($newFruits2);
echo "</xmp>";
echo "<xmp>";
print_r($newFruits);
echo "</xmp>";


$newFruitsPlus = $newFruits1 + $newFruits2;

echo "<xmp>";
print_r($newFruitsPlus);
echo "</xmp>";
echo "<br/>";
$fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random_array2 = [
    "a" => 12,
    "b" => 45,
    "c" => 34,
    "d" => 22,
    "e" => 77,
    "f" => 31,
    12 => 78,
    "g" => 25,
    
];

$r1 = array_slice($random_array2,0,2, true);
$r2 = array_slice($random_array2,4,null,true);
$r3 = array("j"=>45,"k"=>12);

$randomData = array_splice($random_array2,2,2);
$randomDataCorrectWay = $r1+$r2+$r3;;




echo "<xmp>";
print_r($random_array2);
echo "</xmp>";
echo "<xmp>";
print_r($randomData);
echo "</xmp>";
echo "<xmp>";

print_r($randomDataCorrectWay);
// print_r($random_array2);
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
// $fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
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

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3, null, true);

$newFruits = array_merge($newFruits1, $newFruits2);
 
echo "<h5>Merge two array in one</h5>"; 
echo "<xmp>";
print_r($newFruits1);
echo "</xmp>";
echo "<xmp>";
print_r($newFruits2);
echo "</xmp>";
echo "<xmp>";
print_r($newFruits);
echo "</xmp>";


$newFruitsPlus = $newFruits1 + $newFruits2;

echo "<xmp>";
print_r($newFruitsPlus);
echo "</xmp>";
echo "<br/>";
$fruits2 = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random_array2 = [
    "a" => 12,
    "b" => 45,
    "c" => 34,
    "d" => 22,
    "e" => 77,
    "f" => 31,
    12 => 78,
    "g" => 25,
    
];

$r1 = array_slice($random_array2,0,2, true);
$r2 = array_slice($random_array2,4,null,true);
$r3 = array("j"=>45,"k"=>12);

$randomData = array_splice($random_array2,2,2);
$randomDataCorrectWay = $r1+$r2+$r3;;




echo "<xmp>";
print_r($random_array2);
echo "</xmp>";
echo "<xmp>";
print_r($randomData);
echo "</xmp>";
echo "<xmp>";

print_r($randomDataCorrectWay);
// print_r($random_array2);
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