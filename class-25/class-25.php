<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.25</title>

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
                        echo "<h3 class='text-center'>১.২৫ - স্মার্ট কোডিং ভার্সেস ডাম্ব কোডিং - কেন নিজের কোড নিজে রিভিউ করা প্রয়োজন
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// 5 factorial 5*4*3*2*1 = 120
// 6 factorial 6*5*4*3*2*1 = 720

$n = 5;
$result = 1;
for ($i=$n; $i > 1; $i--) { 
    $result *= $i;
}
echo "Factorial of {$n} is {$result}<br/>";

$o = 6;
$result = 1;
for ($i=$o; $i > 1; $i--) { 
    $result *= $i;
}
echo "Factorial of {$o} is {$result}<br/>";

// wrong way of code writing
$j=1;
for ($p=1; $p <= 20 ; $p++) { 
    $result2 = 1;
    for ($i=$p; $i > 1; $i--) { 
        $result2 *= $i;
        $j++;
    }
    echo "Factorial of {$p} is {$result2}<br/>";
}

echo "Total {$j} number of Operations \n<br/>";

$result3 = 1;
$j=1;
for($p=1;$p<=10;$p++){
    $result3 *= $p;
    $j++;
    echo "Factorial of {$p} is {$result3} \n<br/>";
}


echo "Total {$j} number of Operations \n";

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
    
// 5 factorial 5*4*3*2*1 = 120
// 6 factorial 6*5*4*3*2*1 = 720

$n = 5;
$result = 1;
for ($i=$n; $i > 1; $i--) { 
    $result *= $i;
}
echo "Factorial of {$n} is {$result}<br/>";

$o = 6;
$result = 1;
for ($i=$o; $i > 1; $i--) { 
    $result *= $i;
}
echo "Factorial of {$o} is {$result}<br/>";

// wrong way of code writing
$j=1;
for ($p=1; $p <= 20 ; $p++) { 
    $result2 = 1;
    for ($i=$p; $i > 1; $i--) { 
        $result2 *= $i;
        $j++;
    }
    echo "Factorial of {$p} is {$result2}<br/>";
}

echo "Total {$j} number of Operations \n<br/>";

$result3 = 1;
$j=1;
for($p=1;$p<=10;$p++){
    $result3 *= $p;
    $j++;
    echo "Factorial of {$p} is {$result3} \n<br/>";
}


echo "Total {$j} number of Operations \n";




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