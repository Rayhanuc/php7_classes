<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 2.7</title>

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
                        echo "<h3 class='text-center'>২.৭ - রিকার্সন এবং রিকার্সিভ ফাংশন</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// recursion
echo "<h5>Recursive Function</h5>";
function printN($i){
    if ($i>=10) {
        return;
    }
    echo $i."<br>";
    $i++;
    printN($i);
}

printN(0);
echo "<br>";
echo "<br>";
echo "<h5>Another method</h5>";
function printNumber($counter, $end) {
    if ($counter>=$end) {
        return;
    }

    echo $counter."<br>";
    $counter++;
    printNumber($counter, $end);
}

printNumber(21,37);
echo "<br>";
echo "<br>";
echo "<h5>Another method</h5>";
echo "Stepping is 3<br>";
function printNumber2($counter2, $end2, $stepping) {
    if ($counter2>=$end2) {
        return;
    }

    echo $counter2."<br>";
    $counter2 +=$stepping;
    printNumber2($counter2, $end2, $stepping);
}

printNumber2(21,37,3);

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

// recursion
echo "<h5>Recursive Function</h5>";
function printN($i){
    if ($i>=10) {
        return;
    }
    echo $i."<br>";
    $i++;
    printN($i);
}

printN(0);
echo "<br>";
echo "<br>";
echo "<h5>Another method</h5>";
function printNumber($counter, $end) {
    if ($counter>=$end) {
        return;
    }

    echo $counter."<br>";
    $counter++;
    printNumber($counter, $end);
}

printNumber(21,37);
echo "<br>";
echo "<br>";
echo "<h5>Another method</h5>";
echo "Stepping is 3<br>";
function printNumber2($counter2, $end2, $stepping) {
    if ($counter2>=$end2) {
        return;
    }

    echo $counter2."<br>";
    $counter2 +=$stepping;
    printNumber2($counter2, $end2, $stepping);
}

printNumber2(21,37,3);

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