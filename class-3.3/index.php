<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.3</title>

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
                        echo "<h3 class='text-center'>৩.৩ - অ্যাসোসিয়েটিভ অ্যারে নিয়ে বিস্তারিত আলোচনা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// Associative arrays

$students = [
    '12' => 'Hasan',
    '13' => 'Karim',
    '20' => 'Jalal'
];

echo $students[13]."<br/>";


$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam, cauliflower',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];


echo count($foods);
echo "<br>";
echo $foods['vegetables'];
$count_food = count($foods); 
echo "<br>";
/*for ($j=0; $j < $count_food; $j++) { 
    echo $foods[$j];
}*/

foreach ($foods as $key => $value) {
    echo $key." = ".$value."<br/>";
    /*echo $key."<br/>";
    echo $value."<br/>";*/
}



echo "<br>";
echo "<br>";
echo "<br>";
$foods2 = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam, cauliflower',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];
// associative array element add array in array
// $foods2['drinks'] = $foods2['drinks'].", orange juice";

// another way to add
$foods2['drinks'] .= ", orange juice";

// Another way to show array and key
$array_keys = array_keys($foods2);
$array_values = array_values($foods2);
print_r($array_keys);
echo "<br>";
print_r($array_values);
echo "<br>";


for ($j=0; $j < count($array_keys); $j++) { 
    $keys = $array_keys[$j];
    echo $keys.", ";
}
echo "<br>";

for ($j=0; $j < count($array_values); $j++) { 
    $values = $array_values[$j];
    echo $values."<br>";
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

// Associative arrays

$students = [
    '12' => 'Hasan',
    '13' => 'Karim',
    '20' => 'Jalal'
];

echo $students[13]."<br/>";


$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam, cauliflower',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];


echo count($foods);
echo "<br>";
echo $foods['vegetables'];
$count_food = count($foods); 
echo "<br>";
/*for ($j=0; $j < $count_food; $j++) { 
    echo $foods[$j];
}*/

foreach ($foods as $key => $value) {
    echo $key." = ".$value."<br/>";
    /*echo $key."<br/>";
    echo $value."<br/>";*/
}



echo "<br>";
echo "<br>";
echo "<br>";
$foods2 = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicam, cauliflower',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];
// associative array element add array in array
// $foods2['drinks'] = $foods2['drinks'].", orange juice";

// another way to add
$foods2['drinks'] .= ", orange juice";

// Another way to show array and key
$array_keys = array_keys($foods2);
$array_values = array_values($foods2);
print_r($array_keys);
echo "<br>";
print_r($array_values);
echo "<br>";


for ($j=0; $j < count($array_keys); $j++) { 
    $keys = $array_keys[$j];
    echo $keys.", ";
}
echo "<br>";

for ($j=0; $j < count($array_values); $j++) { 
    $values = $array_values[$j];
    echo $values."<br>";
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