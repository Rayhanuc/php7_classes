<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.17</title>

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
                        echo "<h3 class='text-center'>৩.১৭ - অ্যারের ইউটিলিটি ফাংশনস - খুবই জরুরী - অ্যারে রিডিউস</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$numbers = array(1,2,3,4,5,6,7,8,9,10);
echo "<h5>Square of Array Walk</h5>";

function sum($oldValue=0, $newValue){
    return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum');


echo "<h5>Main / Org array</h5>";

echo "<xmp>";
print_r($numbers);
echo "</xmp><br/>";

echo $sum;


echo "<h5>Odd numbers</h5>";

function sum2($oldValue, $newValue){
    if ($newValue%2==0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum2 = array_reduce($numbers, 'sum2');
echo "Odd number is: ".$sum2;


echo "<h5>Even numbers</h5>";

function sum3($oldValue, $newValue){
    if ($newValue%2==1) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum3 = array_reduce($numbers, 'sum3');
echo "Even number is: ".$sum3;

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

$numbers = array(1,2,3,4,5,6,7,8,9,10);
echo "<h5>Square of Array Walk</h5>";

function sum($oldValue=0, $newValue){
    return $oldValue + $newValue;
}

$sum = array_reduce($numbers, 'sum');


echo "<h5>Main / Org array</h5>";

echo "<xmp>";
print_r($numbers);
echo "</xmp><br/>";

echo $sum;


echo "<h5>Odd numbers</h5>";

function sum2($oldValue, $newValue){
    if ($newValue%2==0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum2 = array_reduce($numbers, 'sum2');
echo "Odd number is: ".$sum2;


echo "<h5>Even numbers</h5>";

function sum3($oldValue, $newValue){
    if ($newValue%2==1) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum3 = array_reduce($numbers, 'sum3');
echo "Even number is: ".$sum3;



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