<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.13</title>

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
                        echo "<h3 class='text-center'>৩.১৩ - ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারে সর্টিং</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
echo "<h5>Main Array </h5>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। sort<br></h5>";
sort($fruits);

echo "<xmp>";
print_r($fruits);
echo "</xmp>";


$numbers = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>Main numbers </h5>";
echo "<xmp>";
print_r($numbers);
echo "</xmp>";
echo "<h5>1 - 100 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
sort($numbers);

echo "<xmp>";
print_r($numbers);
echo "</xmp>";


$fruits2 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');
echo "<h5>Main Array</h5>";
echo "<xmp>";
print_r($fruits2);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। এবং কি গুলি সংরক্ষিত asort</h5><br>";
asort($fruits2);

echo "<xmp>";
print_r($fruits2);
echo "</xmp>";


$numbers2 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>1 - 100 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
asort($numbers2);

echo "<xmp>";
print_r($numbers2);
echo "</xmp>";
$countn = count($numbers2);

echo "<h5>after for loop like main array no change</h5><br>";
for ($i=0; $i < $countn; $i++) { 
    echo $numbers2[$i]."<br>";
}

echo "<h5>foreach loop</h5><br>";
foreach ($numbers2 as $number2) {
    echo $number2."<br>";
}

$numbers3 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
arsort($numbers3);

echo "<xmp>";
print_r($numbers3);
echo "</xmp>";

$numbers4 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস সাজানো বিপরীত দিক থেকে। <em>rsort</em></h5><br>";
rsort($numbers4);

echo "<xmp>";
print_r($numbers4);
echo "</xmp>";

$fruits3 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');

echo "<h5>কি গুলিকে সংরক্ষণ করে a - z ক্রম বিন্যাস করে সাজানো। <em>ksort</em><br></h5>";
ksort($fruits3);

echo "<xmp>";
print_r($fruits3);
echo "</xmp>";

echo "<h5>foreach loop</h5><br>";
foreach ($fruits3 as $fruit3) {
    echo $fruit3."<br>";
}

$fruits4 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');

echo "<h5>কি গুলিকে সংরক্ষণ করে reverse z - 1 ক্রম বিন্যাস করে সাজানো। <em>krsort</em><br></h5>";
krsort($fruits4);

echo "<xmp>";
print_r($fruits4);
echo "</xmp>";

$numbers5 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস সাজানো বিপরীত দিক থেকে। <em>rsort</em></h5><br>";
rsort($numbers5);

echo "<xmp>";
print_r($numbers5);
echo "</xmp>";

$numbers6 = array(11,2,56,3,4,1,77,5,7,5,2,3,8,8,111,22,33,44,55,66,77,777,56,9,68,17,5);
echo "<h5>1 - 100 ক্রম বিন্যাস সাজানো string হিসেবে। <em>SORT_STRING</em></h5><br>";
echo "Total numbers is : ".count($numbers6);
sort($numbers6,SORT_STRING);

echo "<xmp>";
print_r($numbers6);
echo "</xmp>";

echo "<h5> SORT CASE INSENSITIVE <em>\" SORT_STRING | SORT_FLAG_CASE \"</em></h5><br>";
$random = array("apple","Apple","banana","Banana","Pineapple"); 
sort($random, SORT_STRING | SORT_FLAG_CASE);
echo "<xmp>";
print_r($random);
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
echo "<h5>Main Array </h5>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। sort<br></h5>";
sort($fruits);

echo "<xmp>";
print_r($fruits);
echo "</xmp>";


$numbers = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>Main numbers </h5>";
echo "<xmp>";
print_r($numbers);
echo "</xmp>";
echo "<h5>1 - 100 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
sort($numbers);

echo "<xmp>";
print_r($numbers);
echo "</xmp>";


$fruits2 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');
echo "<h5>Main Array</h5>";
echo "<xmp>";
print_r($fruits2);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। এবং কি গুলি সংরক্ষিত asort</h5><br>";
asort($fruits2);

echo "<xmp>";
print_r($fruits2);
echo "</xmp>";


$numbers2 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>1 - 100 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
asort($numbers2);

echo "<xmp>";
print_r($numbers2);
echo "</xmp>";
$countn = count($numbers2);

echo "<h5>after for loop like main array no change</h5><br>";
for ($i=0; $i < $countn; $i++) { 
    echo $numbers2[$i]."<br>";
}

echo "<h5>foreach loop</h5><br>";
foreach ($numbers2 as $number2) {
    echo $number2."<br>";
}

$numbers3 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস করে সাজানো। sort</h5><br>";
arsort($numbers3);

echo "<xmp>";
print_r($numbers3);
echo "</xmp>";

$numbers4 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস সাজানো বিপরীত দিক থেকে। <em>rsort</em></h5><br>";
rsort($numbers4);

echo "<xmp>";
print_r($numbers4);
echo "</xmp>";

$fruits3 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');

echo "<h5>কি গুলিকে সংরক্ষণ করে a - z ক্রম বিন্যাস করে সাজানো। <em>ksort</em><br></h5>";
ksort($fruits3);

echo "<xmp>";
print_r($fruits3);
echo "</xmp>";

echo "<h5>foreach loop</h5><br>";
foreach ($fruits3 as $fruit3) {
    echo $fruit3."<br>";
}

$fruits4 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');

echo "<h5>কি গুলিকে সংরক্ষণ করে reverse z - 1 ক্রম বিন্যাস করে সাজানো। <em>krsort</em><br></h5>";
krsort($fruits4);

echo "<xmp>";
print_r($fruits4);
echo "</xmp>";

$numbers5 = array(11,2,56,3,4,1,77,5,56,9,68,17,5);
echo "<h5>100 - 1 ক্রম বিন্যাস সাজানো বিপরীত দিক থেকে। <em>rsort</em></h5><br>";
rsort($numbers5);

echo "<xmp>";
print_r($numbers5);
echo "</xmp>";

$numbers6 = array(11,2,56,3,4,1,77,5,7,5,2,3,8,8,111,22,33,44,55,66,77,777,56,9,68,17,5);
echo "<h5>1 - 100 ক্রম বিন্যাস সাজানো string হিসেবে। <em>SORT_STRING</em></h5><br>";
echo "Total numbers is : ".count($numbers6);
sort($numbers6,SORT_STRING);

echo "<xmp>";
print_r($numbers6);
echo "</xmp>";

echo "<h5> SORT CASE INSENSITIVE <em>\" SORT_STRING | SORT_FLAG_CASE \"</em></h5><br>";
$random = array("apple","Apple","banana","Banana","Pineapple"); 
sort($random, SORT_STRING | SORT_FLAG_CASE);
echo "<xmp>";
print_r($random);
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