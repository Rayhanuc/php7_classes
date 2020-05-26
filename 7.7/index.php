<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 7.7</title>

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
                        echo "<h3 class='text-center'>7.7 - Processing data using serialized arrays in the file</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$filename = "D:/xampp/htdocs/php7_classes/7.7/assets/files/f7.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'Nikil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
    array(
        'fname' => 'Komola',
        'lname' => 'Kanto',
        'age' => 14,
        'class' => 9,
        'roll' => 18,
    ),
);

$student = array(
    'fname' => 'Shojol',
    'lname' => 'Kumar',
    'age' => 17,
    'class' => 8,
    'roll' => 15,
);

// Data input
/*$data = serialize($students);
file_put_contents($filename,$data, LOCK_EX);*/

// Data pick
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// array_push($allStudents, $student);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename,$data, LOCK_EX);

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

$filename = "D:/xampp/htdocs/php7_classes/7.7/assets/files/f7.txt";

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'Nikil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
    array(
        'fname' => 'Komola',
        'lname' => 'Kanto',
        'age' => 14,
        'class' => 9,
        'roll' => 18,
    ),
);

$student = array(
    'fname' => 'Shojol',
    'lname' => 'Kumar',
    'age' => 17,
    'class' => 8,
    'roll' => 15,
);

// Data input
/*$data = serialize($students);
file_put_contents($filename,$data, LOCK_EX);*/

// Data pick
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// array_push($allStudents, $student);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename,$data, LOCK_EX);



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