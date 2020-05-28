<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 7.8</title>

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
                        echo "<h3 class='text-center'>7.8 - Processing Jason format data in the file</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$filename = "D:/xampp/htdocs/php7_classes/7.8/assets/files/f8.txt";

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

/*$encodedData = json_encode($students);
file_put_contents($filename, $encodedData, LOCK_EX);*/

$data = file_get_contents($filename);
// $allStudents = json_decode($data,true);
$allStudents = json_decode($data);
print_r($allStudents);
echo "<br/>";
// echo $allStudents[0]['fname'];
echo $allStudents[0]->fname;

// echo $allStudents[0]->fname;

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

$filename = "D:/xampp/htdocs/php7_classes/7.8/assets/files/f8.txt";

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

/*$encodedData = json_encode($students);
file_put_contents($filename, $encodedData, LOCK_EX);*/

$data = file_get_contents($filename);
// $allStudents = json_decode($data,true);
$allStudents = json_decode($data);
print_r($allStudents);
echo "<br/>";
// echo $allStudents[0]['fname'];
echo $allStudents[0]->fname;

// echo $allStudents[0]->fname;

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