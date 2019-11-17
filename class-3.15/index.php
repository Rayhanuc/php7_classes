<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.15</title>

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
                        echo "<h3 class='text-center'>৩.১৫ - দুইটি ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারের ডিফারেন্স এবং ইন্টারসেকশন</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array(
    "a" => "apple",
    "b" => "banana",
    "c" => "lemon",
);

$fruits2 = array(
    "d" => "pineapple",
    "b" => "malta",
    "g" => "grapes",
    "e" => "lemon",
);


$common_number = array_intersect($numbers1, $numbers2);

echo "<xmp>";
print_r($common_number);
echo "</xmp>";

// It will find only same value
// $common_fruits = array_intersect($fruits1, $fruits2);

// it find the same key and value 
$common_fruits = array_intersect_assoc($fruits1, $fruits2);

echo "<xmp>";
print_r($common_fruits);
echo "</xmp>";

/* 
এরের মধ্যে যে ইলিমেন্ট গুলি মিল নেই 
বি.দ্র: প্রথম এরে টাকেই মেইন বেইস এরে হিসেবে ধরবে।
*/
$diff_number = array_diff($numbers1, $numbers2);

// $diff_fruits = array_diff($fruits1, $fruits2);
$diff_fruits = array_diff($fruits1, $fruits2);
echo "<xmp>";
print_r($diff_fruits);
echo "</xmp>";


// কি সহ কোনটা কোনটা মিল আছে ও সব দেখাবে
// $diff_fruits = array_diff($fruits1, $fruits2);
$diff_fruits2 = array_diff_assoc($fruits1, $fruits2);
echo "<xmp>";
print_r($diff_fruits2);
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


$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array(
    "a" => "apple",
    "b" => "banana",
    "c" => "lemon",
);

$fruits2 = array(
    "d" => "pineapple",
    "b" => "malta",
    "g" => "grapes",
    "e" => "lemon",
);


$common_number = array_intersect($numbers1, $numbers2);

echo "<xmp>";
print_r($common_number);
echo "</xmp>";

// It will find only same value
// $common_fruits = array_intersect($fruits1, $fruits2);

// it find the same key and value 
$common_fruits = array_intersect_assoc($fruits1, $fruits2);

echo "<xmp>";
print_r($common_fruits);
echo "</xmp>";

/* 
এরের মধ্যে যে ইলিমেন্ট গুলি মিল নেই 
বি.দ্র: প্রথম এরে টাকেই মেইন বেইস এরে হিসেবে ধরবে।
*/
$diff_number = array_diff($numbers1, $numbers2);

// $diff_fruits = array_diff($fruits1, $fruits2);
$diff_fruits = array_diff($fruits1, $fruits2);
echo "<xmp>";
print_r($diff_fruits);
echo "</xmp>";


// কি সহ কোনটা কোনটা মিল আছে ও সব দেখাবে
// $diff_fruits = array_diff($fruits1, $fruits2);
$diff_fruits2 = array_diff_assoc($fruits1, $fruits2);
echo "<xmp>";
print_r($diff_fruits2);
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