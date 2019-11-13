<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.1</title>

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
                        echo "<h3 class='text-center'>৩.১ - অ্যারে পরিচিতি</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$n = "12";

$students = array(
    "rahim",
    "Karim",
    123,
    "monir"
);
echo "<h5>another type of arry writing system</h5>";
$students = [
    "rahim",
    "Karim",
    123,
    "monir"
];
var_dump($students)."<br>";

// How many element in this array. It will count it.
echo "Elements have in this array : ".count($students)."<br>";

echo $students[0]."<br>";
echo $students[1]."<br>";
echo $students[2]."<br>";
echo $students[3]."<br>";


echo "<h5>For loop start for this array</h5>";
// for loop
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."<br/>";
}

echo "<h5>Invert for loop count</h5>";
// invert for loop count
$n = count($students);
for($i=$n-1;$i>=0;$i--){
    echo $students[$i]."<br/>";

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

$n = "12";

$students = array(
    "rahim",
    "Karim",
    123,
    "monir"
);
// echo "<h5>another type of arry writing system</h5>";
$students = [
    "rahim",
    "Karim",
    123,
    "monir"
];
var_dump($students)."<br>";

// How many element in this array. It will count it.
echo "Elements have in this array : ".count($students)."<br>";

echo $students[0]."<br>";
echo $students[1]."<br>";
echo $students[2]."<br>";
echo $students[3]."<br>";


echo "<h5>For loop start for this array</h5>";
// for loop
$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."<br/>";
}

echo "<h5>Invert for loop count</h5>";
// invert for loop count
$n = count($students);
for($i=$n-1;$i>=0;$i--){
    echo $students[$i]."<br/>";
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