<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 6.6</title>

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
                        echo "<h3 class='text-center'>6.6 - How search string in string</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$string = "Quick brown Fox fox jumps over the lazy dog";
$offset = strpos($string,"Quick");
echo "Full string:- ".$string."<br/>";
echo '12 position letter is: '.$string[12]."<br/>";

echo "fox position start number is: ".strpos($string, 'Fox')."<br/>";
echo "fox position start number is: ".stripos($string, 'fox',13)."<br/>";
echo "Quick position start number is: ".$offset."<br/>";

if($offset !== false){
    echo "Quick word is found."."<br/>";
}else {
    echo "Quick word is not found."."<br/>";
}

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

$string = "Quick brown Fox fox jumps over the lazy dog";
$offset = strpos($string,"Quick");
echo "Full string:- ".$string."<br/>";
echo '12 position letter is: '.$string[12]."<br/>";

echo "fox position start number is: ".strpos($string, 'Fox')."<br/>";
echo "fox position start number is: ".stripos($string, 'fox',13)."<br/>";
echo "Quick position start number is: ".$offset."<br/>";

if($offset !== false){
    echo "Quick word is found."."<br/>";
}else {
    echo "Quick word is not found."."<br/>";
}

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