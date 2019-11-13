<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 2.2</title>

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
                        echo "<h3 class='text-center'>২.২ - ফাংশন প্যারামিটারের টাইপ হিন্টিং বা টাইপ চেক</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
functions.php code:
==============
*/
// one parameter can use only
function factorial($n){// parameter
    if (gettype($n)!="integer") {
        return "invalid type";
    }

    $result = 1;
    for($i=$n;$i>1;$i--){
        $result *= $i;
    }

    return $result;
}
==============

include_once "functions.php";
$x = 6;
echo "Factorial of {$x} is ".factorial($x);
echo "<br>";

$y = 10;
echo "Factorial of {$y} is ".factorial($y);
echo "<br>";

$z = 12;
echo "Factorial of {$z} is ".factorial($z);
echo "<br>";


$a = "abcd";
echo "Factorial of {$a} is ".factorial($a);
echo "<br>";


$b = "5";
echo "Factorial of \"{$b}\" is ".factorial($b);



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
include_once "functions.php";
$x = 6;
echo "Factorial of {$x} is ".factorial($x);
echo "<br>";

$y = 10;
echo "Factorial of {$y} is ".factorial($y);
echo "<br>";

$z = 12;
echo "Factorial of {$z} is ".factorial($z);
echo "<br>";


$a = "abcd";
echo "Factorial of {$a} is ".factorial($a);
echo "<br>";


$b = "5";
echo "Factorial of \"{$b}\" is ".factorial($b);

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