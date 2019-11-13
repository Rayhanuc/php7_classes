<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.10</title>

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
                        echo "<h3 class='text-center'>১.১০ - প্রিন্টএফ ফাংশনের জাদু</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
$fname = "Sir";
$mname = "Isaac";
$lname = "Newton";

// %s means string
printf("His name is %s %s \n<br/>",$mname,$lname); /*Argument*/
// Order by placeholder  == %2 %1 %3
printf('His name is %2$s %1$s <br/>',$mname,$lname); /*Argument*/
printf('His name is %3$s %1$s %2$s <br/>',$fname,$mname,$lname); /*Argument*/
// Method 1
printf('The binary equivalent of %1$d is %1$b <br/>',12);
// Method 2
$numaric = 12;
printf('The binary equivalent of %1$d is %1$b <br/>',$numaric);

// After point . two letter show
$n = 45.128;
printf("%.2f <br/>",$n);

// with 0 padding 4 letter print
$m = 123; // 0123
$o = 27; // 0027
echo "<h5>With 0 Print</h5>";
printf("%04d <br/>",$m);
printf("%04d <br/>",$o);


// After point . 2 number and with 0 padding before number
$p = 123.3253;
$q = 27.155;
echo "<h5>After point . 2 number and with 0 padding before number</h5>";
printf("%07.2f <br/>",$p);
printf("%07.2f <br/>",$q);

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
$fname = "Sir";
$mname = "Isaac";
$lname = "Newton";

// %s means string
printf("His name is %s %s \n<br/>",$mname,$lname); /*Argument*/
// Order by placeholder  == %2 %1 %3
printf('His name is %2$s %1$s <br/>',$mname,$lname); /*Argument*/
printf('His name is %3$s %1$s %2$s <br/>',$fname,$mname,$lname); /*Argument*/
// Method 1
printf('The binary equivalent of %1$d is %1$b <br/>',12);
// Method 2
$numaric = 12;
printf('The binary equivalent of %1$d is %1$b <br/>',$numaric);

// After point . two letter show
$n = 45.128;
printf("%.2f <br/>",$n);

// with 0 padding 4 letter print
$m = 123; // 0123
$o = 27; // 0027
echo "<h5>With 0 Print</h5>";
printf("%04d <br/>",$m);
printf("%04d <br/>",$o);


// After point . 2 number and with 0 padding before number
$p = 123.3253;
$q = 27.155;
echo "<h5>After point . 2 number and with 0 padding before number</h5>";
printf("%07.2f <br/>",$p);
printf("%07.2f <br/>",$q);

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