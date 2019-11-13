<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.4</title>

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
                        echo "<h3 class='text-center'>১.৪ - পিএইচপিতে আউটপুট প্রিন্ট করা নিয়ে বিস্তারিত</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

/*
Integer Int
Double / Float
Boolean bool
String string
Null
Array
Object
Resource
*/
echo "Hello";
echo "\n<br/>";
echo 123;

$name = "Earth";
echo "\n<br/>";
var_dump($name);
echo "\n<br/>";
$age = 12;
var_dump($age);
echo "\n<br/>";
$amount = 45.36254;
var_dump($amount);
echo "\n<br/>";
$null = null;
var_dump($null);
echo "\n<br/>";

$name1 = "Rayhan";
$name2 = "Uddin";
$name3 = "Chowdhury";
var_dump($name1, $name2, $name3);
echo "\n<br/>";
// Boolean
$result = true;
var_dump($result);
echo "\n<br/>";
$earth = "Earth";
echo "We are leaving on {$earth}";
echo "\n<br/>"; 
printf("We are leaving on %s",$earth);
echo "\n"; 
$fname = "Isaac";
$lname = "Newton";
printf("His %sName is %s %s","Full", $fname, $lname);
echo "\n<br/>"; 
echo "His
Name
is
{$fname} {$lname}";
echo "\n<br/>"; 

$planet1 = "Mercury";
$planet2 = "Jupiter";
// %s = string
// Option Method 1
echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n<br/>";
// Option Method 2
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} \n<br/>";
// Option Method 3
printf("The smallest planet is %s and the biggest planet is %s.\n", strtoupper($planet1), strrev($planet2));

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
                        /*
                        Integer Int
                        Double / Float
                        Boolean bool
                        String string
                        Null
                        Array
                        Object
                        Resource
                        */
                        echo "Hello";
                        echo "\n<br/>";
                        echo 123;

                        $name = "Earth";
                        echo "\n<br/>";
                        var_dump($name);
                        echo "\n<br/>";
                        $age = 12;
                        var_dump($age);
                        echo "\n<br/>";
                        $amount = 45.36254;
                        var_dump($amount);
                        echo "\n<br/>";
                        $null = null;
                        var_dump($null);
                        echo "\n<br/>";

                        $name1 = "Rayhan";
                        $name2 = "Uddin";
                        $name3 = "Chowdhury";
                        var_dump($name1, $name2, $name3);
                        echo "\n<br/>";
                        // Boolean
                        $result = true;
                        var_dump($result);
                        echo "\n<br/>";
                        $earth = "Earth";
                        echo "We are leaving on {$earth}";
                        echo "\n<br/>"; 
                        printf("We are leaving on %s",$earth);
                        echo "\n"; 
                        $fname = "Isaac";
                        $lname = "Newton";
                        printf("His %sName is %s %s","Full", $fname, $lname);
                        echo "\n<br/>"; 
                        echo "His
                        Name
                        is
                        {$fname} {$lname}";
                        echo "\n<br/>"; 

                        $planet1 = "Mercury";
                        $planet2 = "Jupiter";
                        // %s = string
                        // Option Method 1
                        echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n<br/>";
                        // Option Method 2
                        echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} \n<br/>";
                        // Option Method 3
                        printf("The smallest planet is %s and the biggest planet is %s.\n", strtoupper($planet1), strrev($planet2));
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