<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 6.7</title>

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
                        echo "<h3 class='text-center'>6.7 - Search and replace strings inside strings</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start



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

$string = "Quick Brown brown Fox fox jumps over the lazy dog";
// If case insensitive can use str_replace();
$replacedString = str_replace('brown', 'Brown', $string);
echo $replacedString;
echo PHP_EOL."<br/>";
echo "<h4 style='color:green;'>Original String: </h4>".($string);
echo PHP_EOL."<br/>";
// If case sensitive can use str_replace();
$replacedString2 = str_ireplace('brown', 'red', $string, $count);
echo "case sensitive: {$replacedString2}" ;
echo PHP_EOL."<br/>";
echo "Total replacement word: {$count}";

echo PHP_EOL."<br/>";
// multiple replacement case insensitive
$multireplacement = str_replace(array('brown','fox'), array('red','cat'), $string, $count);
echo $multireplacement;

echo PHP_EOL."<br/>";
$string2 = "Quick Brown brown Fox fox jumps over the lazy dog";
// multiple replacement case sensitive
$multireplacement2 = str_ireplace(array('brown','fox','dog'), array('red','cat','hen'), $string, $count);
echo "multiple replacement case sensitive: {$multireplacement2}";
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