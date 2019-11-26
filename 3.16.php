<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.16</title>

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
                        echo "<h3 class='text-center'>৩.১৬ - অ্যারের ইউটিলিটি ফাংশনস - খুবই জরুরী - ওয়াক, ম্যাপ এবং ফিল্টার</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
echo "<h5>Square of Array Walk</h5>";
echo "Total amount / item is: ".count($numbers)."<br>";

function square($n){
    printf("Square of %d is %d <br/>",$n, $n*$n);
}

array_walk($numbers,'square');


echo "<h5>Main / Org array</h5>";

echo "<xmp>";
print_r($numbers);
echo "</xmp>";

echo "<h5>Cube of Array Map</h5>";
function cube($m){
    return $m*$m*$m;
}

$newArray = array_map('cube', $numbers);
echo "<xmp>";
print_r($newArray);
echo "</xmp> <br>";


echo "<h5>Array Filter</h5>";
echo "<h5>Array Filter Even Numbers</h5>";
function even($o){
    return $o%2==0;
}
$evenArray2 = array_filter( $numbers,'even'); // callback function
echo "<xmp>";
print_r($evenArray2);
echo "</xmp>";

echo "<h5>Array Filter Odd Numbers</h5>";
function odd($o){
    return $o%2==1;
}
$oddArray2 = array_filter( $numbers,'odd'); // callback function
echo "<xmp>";
print_r($oddArray2);
echo "</xmp>";

$persons = array('sumon','sujon','kabir','selim','roni','jamal','kamal','sayma','rohima','samira','monika','sayam');

function filfterByS($name){
    return $name[0]=='s';
}
$newPersons = array_filter($persons, 'filfterByS');
echo "<h5>Name array</h5>";
echo "<xmp>";
print_r($persons);
echo "</xmp>";

echo "<h5>Name array array_filter by s</h5>";
echo "<xmp>";
print_r($newPersons);
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

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
echo "<h5>Square of Array Walk</h5>";
echo "Total amount / item is: ".count($numbers)."<br>";

function square($n){
    printf("Square of %d is %d <br/>",$n, $n*$n);
}

array_walk($numbers,'square');


echo "<h5>Main / Org array</h5>";

echo "<xmp>";
print_r($numbers);
echo "</xmp>";

echo "<h5>Cube of Array Map</h5>";
function cube($m){
    return $m*$m*$m;
}

$newArray = array_map('cube', $numbers);
echo "<xmp>";
print_r($newArray);
echo "</xmp> <br>";


echo "<h5>Array Filter</h5>";
echo "<h5>Array Filter Even Numbers</h5>";
function even($o){
    return $o%2==0;
}
$evenArray2 = array_filter( $numbers,'even'); // callback function
echo "<xmp>";
print_r($evenArray2);
echo "</xmp>";

echo "<h5>Array Filter Odd Numbers</h5>";
function odd($o){
    return $o%2==1;
}
$oddArray2 = array_filter( $numbers,'odd'); // callback function
echo "<xmp>";
print_r($oddArray2);
echo "</xmp>";

$persons = array('sumon','sujon','kabir','selim','roni','jamal','kamal','sayma','rohima','samira','monika','sayam');

function filfterByS($name){
    return $name[0]=='s';
}
$newPersons = array_filter($persons, 'filfterByS');
echo "<h5>Name array</h5>";
echo "<xmp>";
print_r($persons);
echo "</xmp>";

echo "<h5>Name array array_filter by s</h5>";
echo "<xmp>";
print_r($newPersons);
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