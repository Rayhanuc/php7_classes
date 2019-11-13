<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.9</title>

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
                        echo "<h3 class='text-center'>১.৯ - বিভিন্ন রকমের নাম্বার সিস্টেম নিয়ে আলোচনা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
$n = 12;
$o = 012;

$h = 0x1B;

printf("The Number is %d and %d and %d \n", $n, $o, $h);
// echo "\n";
printf("The binary equvalent of %d is %b \n",1212,1212);
// echo "\n";
printf("The hexadecimal equvalent of %d is small letter %x capital letter %X \n",1212,1212,1212);
printf("The Octal equvalent of %d is %o \n",65536,65536);
printf("Octal %o = Decimal %d \n",0200000,0200000);
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
$n = 12;
$o = 012;

$h = 0x1B;

printf("The Number is %d and %d and %d \n<br/>", $n, $o, $h);
// echo "<br/>\n";
printf("The binary equvalent of %d is %b \n<br/>",1212,1212);
// echo "<br/>\n";
printf("The hexadecimal equvalent of %d is small letter %x capital letter %X \n<br/>",1212,1212,1212);
printf("The Octal equvalent of %d is %o \n<br/>",65536,65536);
printf("Octal %o = Decimal %d \n<br/>",0200000,0200000);
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