<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 6.5</title>

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
                        echo "<h3 class='text-center'>6.5 - Breaking a string into tokens - tokenization</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$string = "Hello World, How are you?";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode(" ", $string);
echo "<xmp>";
print_r($parts);
echo "</xmp>";
echo PHP_EOL."<br/>";

$original = join(" ", $parts);

echo $original;

echo PHP_EOL."<br/>";
$original2 = implode(" ", $parts);

echo $original2;

echo PHP_EOL."<br/>";
echo "<xmp>";
$parts2 = str_split($string);
print_r($parts2);
echo "</xmp>";

$parts3 = strtok($string, " ,");
while ($parts3 !== false) {
    echo $parts3.PHP_EOL."<br/>"; // iterator
    $parts3 = strtok(" ,");
}

echo PHP_EOL."<br/>";
$parts4 = strtok($string2, " ,");
while ($parts4 !== false) {
    echo $parts4.PHP_EOL."<br/>"; // iterator
    $parts4 = strtok(" ,");
}


echo PHP_EOL."<br/>";
$parts5 = preg_split("/ |,/",$string);
echo "<xmp>";
print_r($parts5);
echo "</xmp>";

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

$string = "Hello World, How are you?";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode(" ", $string);
echo "<xmp>";
print_r($parts);
echo "</xmp>";
echo PHP_EOL."<br/>";

$original = join(" ", $parts);

echo $original;

echo PHP_EOL."<br/>";
$original2 = implode(" ", $parts);

echo $original2;

echo PHP_EOL."<br/>";
echo "<xmp>";
$parts2 = str_split($string);
print_r($parts2);
echo "</xmp>";

$parts3 = strtok($string, " ,");
while ($parts3 !== false) {
    echo $parts3.PHP_EOL."<br/>"; // iterator
    $parts3 = strtok(" ,");
}

echo PHP_EOL."<br/>";
$parts4 = strtok($string2, " ,");
while ($parts4 !== false) {
    echo $parts4.PHP_EOL."<br/>"; // iterator
    $parts4 = strtok(" ,");
}


echo PHP_EOL."<br/>";
$parts5 = preg_split("/ |,/",$string);
echo "<xmp>";
print_r($parts5);
echo "</xmp>";

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