<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.7</title>

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
                        echo "<h3 class='text-center'>১.৭ - পিএইচপিতে যোগ বিয়োগ গুন ভাগ</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
// + Plus
$a = 12;
$b = $a + 13;
echo "\n<br/>";
echo $b;
echo "\n<br/>";
$c = 15;
$c += 16;
echo $c;
echo "\n<br/>";
$d = 45;
$d = $d+15;
echo $d;
echo "\n<br/>";
$e = 18;
$e2 = $e +27;
echo $e, "\n<br/>", $e2;
// - Minus
echo "\n<br/>";
$f = 56;
$f2 = $f-25;
echo $f,"\n<br/>",$f2;
echo "\n<br/>";
// Multiply *
$g = 5*6;
echo $g;
// divide 
echo "\n<br/>";
$h = 56 / 6; // slash two types. One is forward slash / and another is backward slash \.
echo $h;
echo "\n<br/>";
// % modulas
$i = 67;
$j = 13;
echo $i%$j;
echo "\n<br/>";
$k = (16-7) * 45;
echo $k;
echo "\n<br/>";
$l = (24-4) / (7-2);
echo $l;
echo "\n<br/>";
$m = 56;
$m += 5; // means $m = $m + 5;
echo $m;
echo "\n<br/>";
$n = "Hello ";
$n .= "There";
echo $n;
echo "\n<br/>";
$o = 17;
$o++;
echo $o; // $o += 1; $o = $o + 1;
echo "\n<br/>";
$p = 17;
$p--;
echo $p; // $p -= 1; $p = $p - 1;
echo "\n<br/>";
// + - * / Arithmetic Operators
$number1 = 12;
$number2 = 6;
$number3 = $number1 / $number2;
echo $number3;
// php code end

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
// + Plus
$a = 12;
$b = $a + 13;
echo "\n<br/>";
echo $b;
echo "\n<br/>";
$c = 15;
$c += 16;
echo $c;
echo "\n<br/>";
$d = 45;
$d = $d+15;
echo $d;
echo "\n<br/>";
$e = 18;
$e2 = $e +27;
echo $e, "\n<br/>", $e2;
// - Minus
echo "\n<br/>";
$f = 56;
$f2 = $f-25;
echo $f,"\n<br/>",$f2;
echo "\n<br/>";
// Multiply *
$g = 5*6;
echo $g;
// divide 
echo "\n<br/>";
$h = 56 / 6; // slash two types. One is forward slash / and another is backward slash \.
echo $h;
echo "\n<br/>";
// % modulas
$i = 67;
$j = 13;
echo $i%$j;
echo "\n<br/>";
$k = (16-7) * 45;
echo $k;
echo "\n<br/>";
$l = (24-4) / (7-2);
echo $l;
echo "\n<br/>";
$m = 56;
$m += 5; // means $m = $m + 5;
echo $m;
echo "\n<br/>";
$n = "Hello ";
$n .= "There";
echo $n;
echo "\n<br/>";
$o = 17;
$o++;
echo $o; // $o += 1; $o = $o + 1;
echo "\n<br/>";
$p = 17;
$p--;
echo $p; // $p -= 1; $p = $p - 1;
echo "\n<br/>";
// + - * / Arithmetic Operators
$number1 = 12;
$number2 = 6;
$number3 = $number1 / $number2;
echo $number3;
// php code end
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