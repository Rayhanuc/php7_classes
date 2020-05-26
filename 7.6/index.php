<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 7.6</title>

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
                        echo "<h3 class='text-center'>7.6 - Processing data in files in different ways</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$filename = "D:/xampp/htdocs/php7_classes/7.6/assets/files/f6.txt";

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


$fp = fopen($filename,"w");
foreach($students as $student){
  $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
  fwrite($fp,$data);
}
fclose($fp);



/*$fp = fopen($filename,"w");
foreach($students as $student){
  $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
  fwrite($fp,$data);

  fputcsv($fp, $student);
}
fclose($fp);*/




/*
$fp = fopen($filename,"r");
    while($data = fgets($fp)) {
    $student = explode(",",$data);
    echo "<xmp>";
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
    echo "</xmp>";
}
fclose($fp);*/


/*$fp = fopen($filename,"r");
while($student = fgetcsv($fp)) {
    echo "<xmp>";
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
    echo "</xmp>";
}
fclose($fp);*/

/*$student = array(
    'fname' => 'Shojol',
    'lname' => 'Kumar',
    'age' => 17,
    'class' => 8,
    'roll' => 15,
);

$fp = fopen($filename,"a");
fputcsv($fp, $student);
fclose($fp);
*/

$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename,"w");
foreach ($data as $line) {
    fwrite($fp, $line);
}

fclose($fp);

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

$filename = "D:/xampp/htdocs/php7_classes/7.6/assets/files/f6.txt";

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


$fp = fopen($filename,"w");
foreach($students as $student){
  $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
  fwrite($fp,$data);
}
fclose($fp);



/*$fp = fopen($filename,"w");
foreach($students as $student){
  $data = sprintf("%s, %s, %s, %s, %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
  fwrite($fp,$data);

  fputcsv($fp, $student);
}
fclose($fp);*/




/*
$fp = fopen($filename,"r");
    while($data = fgets($fp)) {
    $student = explode(",",$data);
    echo "<xmp>";
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
    echo "</xmp>";
}
fclose($fp);*/


/*$fp = fopen($filename,"r");
while($student = fgetcsv($fp)) {
    echo "<xmp>";
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
    echo "</xmp>";
}
fclose($fp);*/

/*$student = array(
    'fname' => 'Shojol',
    'lname' => 'Kumar',
    'age' => 17,
    'class' => 8,
    'roll' => 15,
);

$fp = fopen($filename,"a");
fputcsv($fp, $student);
fclose($fp);
*/

$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename,"w");
foreach ($data as $line) {
    fwrite($fp, $line);
}

fclose($fp);

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