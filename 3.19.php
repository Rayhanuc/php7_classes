<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.19</title>

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
                        echo "<h3 class='text-center'>৩.১৯ - রেঞ্জ ফাংশনের ব্যবহার এবং স্টেপিং - খুবই ইন্টারেস্টিং</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// $numbers = array(12,13,14,15,16,17,18,19,20);
$numbers = array();
echo "<h5>for loop applied</h5>";
for($i=12;$i<21;$i++){
    array_push($numbers, $i);
}

echo "<xmp>";
print_r($numbers);
echo "</xmp><br/>";

echo "<h5>range function applied</h5>";
// range(কতথেকে শুরু হবে, কত পর্যন্ত চলবে, কত করে বাড়বে);
$numbers2 = range(12,20,2);

echo "<xmp>";
print_r($numbers2);
echo "</xmp>";

echo "<h5>foreach loop applied 0-50 step 7</h5>";
foreach(range(0,50,7) as $evenNumber){
    if($evenNumber>0){
        echo $evenNumber."\n<br>";
    }
}

echo "<h5>foreach loop applied 0-60 step 11</h5>";
foreach(range(0,60,11) as $number){
    if($number>0){
        echo $number."\n<br>";
    }
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

// $numbers = array(12,13,14,15,16,17,18,19,20);
$numbers = array();
echo "<h5>for loop applied</h5>";
for($i=12;$i<21;$i++){
    array_push($numbers, $i);
}

echo "<xmp>";
print_r($numbers);
echo "</xmp><br/>";

echo "<h5>range function applied</h5>";
// range(কতথেকে শুরু হবে, কত পর্যন্ত চলবে, কত করে বাড়বে);
$numbers2 = range(12,20,2);

echo "<xmp>";
print_r($numbers2);
echo "</xmp>";

echo "<h5>foreach loop applied 0-50 step 7</h5>";
foreach(range(0,50,7) as $evenNumber){
    if($evenNumber>0){
        echo $evenNumber."\n<br>";
    }
}

echo "<h5>foreach loop applied 0-60 step 11</h5>";
foreach(range(0,60,11) as $number){
    if($number>0){
        echo $number."\n<br>";
    }
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