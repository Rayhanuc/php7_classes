<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.2</title>

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
                        echo "<h3 class='text-center'>৩.২ - অ্যারে ম্যানিপুলেশন</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$students = [
    "rahim",
    "Karim",
    123,
    "monir"
];

// array is not immutable // can't modify
// array is mutable // can modify.
$students[2] = "shafik";
$n = count($students);
for($i= 0; $i<$n; $i++){
    echo $students[$i]."\n<br/>";
}

// array first element will hide
$student = array_pop($students);


// array last element will hide
$student = array_shift($students);
// echo $student."<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$n = count($students);
for($i= 0; $i<$n; $i++){
    echo $students[$i]."\n<br/>";
}


$students2 = [
    "rahim",
    "Karim",
    123,
    "monir"
];

$students2[2] = "Bishal";
$students2[] = "jamal";
// at the last new data add in array
array_push($students2, "kamal");



// new element add in first of array
array_unshift($students2,"Ali");
array_unshift($students2,"Aiob");
array_unshift($students2,"Salina");
// echo $student."<br>";

echo "<br>";
echo "<br>";
echo "<br>";


$n = count($students2);
for($i= 0; $i<$n; $i++){
    echo $students2[$i]."\n<br/>";
}


/*array_shift();
array_unshift();
array_pop();
array_push();*/

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

$students = [
    "rahim",
    "Karim",
    123,
    "monir"
];

// array is not immutable // can't modify
// array is mutable // can modify.
$students[2] = "shafik";
$n = count($students);
for($i= 0; $i<$n; $i++){
    echo $students[$i]."\n<br/>";
}

// array first element will hide
$student = array_pop($students);


// array last element will hide
$student = array_shift($students);
// echo $student."<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$n = count($students);
for($i= 0; $i<$n; $i++){
    echo $students[$i]."\n<br/>";
}


$students2 = [
    "rahim",
    "Karim",
    123,
    "monir"
];

$students2[2] = "Bishal";
$students2[] = "jamal";
// at the last new data add in array
array_push($students2, "kamal");



// new element add in first of array
array_unshift($students2,"Ali");
array_unshift($students2,"Aiob");
array_unshift($students2,"Salina");
// echo $student."<br>";

echo "<br>";
echo "<br>";
echo "<br>";


$n = count($students2);
for($i= 0; $i<$n; $i++){
    echo $students2[$i]."\n<br/>";
}


/*array_shift();
array_unshift();
array_pop();
array_push();*/


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