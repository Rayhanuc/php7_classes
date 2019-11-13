<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 2.5</title>

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
                        echo "<h3 class='text-center'>২.৫ - ফাংশনে আনলিমিটেড আর্গুমেন্ট অ্যাক্সেপ্ট করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// Type indicate only in php 7 v
function sum(int $x = 0,int $y = 0,int $z = 0):int {
    return $x+$y+$z;
}
echo sum(8);
echo "<br>";


function sum2(int ...$numbers):int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }

    return $result;
}
echo sum2(8,5,7,3,1,9);
echo "<br>";


function sum3($x,$y, int ...$numbers):int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }

    return $result;
}
echo sum3(8,5,7,3,1,9);

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
// Type indicate only in php 7 v
function sum(int $x = 0,int $y = 0,int $z = 0):int {
    return $x+$y+$z;
}
echo sum(8);
echo "<br>";


function sum2(int ...$numbers):int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }

    return $result;
}
echo sum2(8,5,7,3,1,9);
echo "<br>";


function sum3($x,$y, int ...$numbers):int {
    $result = 0;
    for ($i=0; $i < count($numbers); $i++) { 
        $result += $numbers[$i];
    }

    return $result;
}
echo sum3(8,5,7,3,1,9);

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