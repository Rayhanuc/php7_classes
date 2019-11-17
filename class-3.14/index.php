<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.14</title>

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
                        echo "<h3 class='text-center'>৩.১৪ - ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারেতে সার্চ করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$fruits2 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');
$numbers = array(11,2,56,3,4,1,'77',5,56,9,68,17,5);                        
/* echo "<h5>Main Array </h5>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। sort<br></h5>";
sort($fruits); */
$looking_item = '77';
// in_array(প্রথমে যে টিকে খুচ্ছি সেটা, পরে যেখান থেকে খুচ্ছি সেটা বা সেই এরে টা।) true ব্যবহার করলে কোন টাইপের ভেলুকে খুচ্ছেন সেটা একদম স্ট্রিক্টলি খুজবে।
if(in_array($looking_item,$numbers,true)){
    echo "{$looking_item} is found<br>";
}else {
    echo "{$looking_item} is not found<br>";
}
$offset = array_search($looking_item,$numbers);
echo $looking_item." Position in array is: ".$offset;

echo "<br>";
if (key_exists('b',$fruits2)) {
    echo "key b is exists";
}else {
    echo "key b is not exists";
}

echo "<br>";
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
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


$fruits2 = array('a'=>'apple', 'b' => 'banana', 'g'=>'orange', 'plum', 'dates', 'mango');
$numbers = array(11,2,56,3,4,1,'77',5,56,9,68,17,5);                        
/* echo "<h5>Main Array </h5>";
echo "<xmp>";
print_r($fruits);
echo "</xmp>";
echo "<h5>a - z ক্রম বিন্যাস করে সাজানো। sort<br></h5>";
sort($fruits); */
$looking_item = '77';
// in_array(প্রথমে যে টিকে খুচ্ছি সেটা, পরে যেখান থেকে খুচ্ছি সেটা বা সেই এরে টা।) true ব্যবহার করলে কোন টাইপের ভেলুকে খুচ্ছেন সেটা একদম স্ট্রিক্টলি খুজবে।
if(in_array($looking_item,$numbers,true)){
    echo "{$looking_item} is found<br>";
}else {
    echo "{$looking_item} is not found<br>";
}
$offset = array_search($looking_item,$numbers);
echo $looking_item." Position in array is: ".$offset;

echo "<br>";
if (key_exists('b',$fruits2)) {
    echo "key b is exists";
}else {
    echo "key b is not exists";
}

echo "<br>";
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
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