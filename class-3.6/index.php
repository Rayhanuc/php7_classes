<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.6</title>

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
                        echo "<h3 class='text-center'>৩.৬ - অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '15',
    'class' => 8,
    'section' => 'B',
);
echo "<xmp>";
print_r($student);
echo "</xmp>";

echo $student['fname']." ".$student['lname']."<br>";

printf("%s %s<br/>",$student['fname'],$student['lname']);

echo join(", ",$student)."<br/>";
$serialized = serialize($student);

echo $serialized."<br/>";
$newstudent = unserialize($serialized);
print_r($newstudent);
echo "<br/>";
$jsondata = json_encode($student);
echo $jsondata;

$students3 = json_decode($jsondata, true);
echo "<br/>";
print_r($students3);


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

$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '15',
    'class' => 8,
    'section' => 'B',
);
echo "<xmp>";
print_r($student);
echo "</xmp>";

echo $student['fname']." ".$student['lname']."<br>";

printf("%s %s<br/>",$student['fname'],$student['lname']);

echo join(", ",$student)."<br/>";
$serialized = serialize($student);

echo $serialized."<br/>";
$newstudent = unserialize($serialized);
print_r($newstudent);
echo "<br/>";
$jsondata = json_encode($student);
echo $jsondata;

$students3 = json_decode($jsondata, true);
echo "<br/>";
print_r($students3);

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