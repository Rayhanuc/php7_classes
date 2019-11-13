<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.27</title>

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
                        echo "<h3 class='text-center'>১.২৭ - হোয়াইল লুপে ++ নিয়ে যেটা মাথায় রাখতে হবে
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$i = 0;
while ($i<5) {
    echo $i;
    echo PHP_EOL."<br/>";
    $i++;
}    

echo PHP_EOL."===========================<br/>";

$j = 0;
while (++$j <5) {
    echo $j;
    echo PHP_EOL."<br/>";
}    

echo PHP_EOL."===========================<br/>";

$j = 0;
while ($j++ <5) {
    echo $j;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."===========================<br/>";

/*$x = $y++;
$x = $y;
$y = $y +1;*/


$x = $y = 5;
$x = $y++;
echo $x.":".$y;

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
    
$i = 0;
while ($i<5) {
    echo $i;
    echo PHP_EOL."<br/>";
    $i++;
}    

echo PHP_EOL."===========================<br/>";

$j = 0;
while (++$j <5) {
    echo $j;
    echo PHP_EOL."<br/>";
}    

echo PHP_EOL."===========================<br/>";

$j = 0;
while ($j++ <5) {
    echo $j;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."===========================<br/>";

/*$x = $y++;
$x = $y;
$y = $y +1;*/


$x = $y = 5;
$x = $y++;
echo $x.":".$y;


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