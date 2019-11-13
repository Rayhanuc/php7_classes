<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.29</title>

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
                        echo "<h3 class='text-center'>১.২৯ - লুপ দিয়ে ফিবোনাচ্চি সিরিজ প্রিন্ট করা
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$veryold = 0;
$old = 1;
$new = 1;


for ($i=0; $i < 10; $i++) { 
    echo $veryold." ";
    $old = $new;
    $new = $old + $veryold;

    $veryold = $old;
    echo "\n<br/>";
}

/*
How does it work
Formula
o = n
n = o + v
v = 0


initial
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2
3rd loop
v = 2
o = 2
n = 3

4th loop
v = 3
o = 3
n = 5

5th loop
v = 5
o = 5
n = 8

7th loop
v = 8
o = 8
n = 13

8th loop
v = 13
o = 13
n = 21

9th loop
v = 21
o = 21
n = 31

10th loop
v = 31
o = 31
n = 34

*/

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
    
$veryold = 0;
$old = 1;
$new = 1;


for ($i=0; $i < 10; $i++) { 
    echo $veryold." ";
    $old = $new;
    $new = $old + $veryold;

    $veryold = $old;
    echo "\n<br/>";
}

/*
How does it work

Formula
o = n
n = o + v
v = 0



initial
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2
3rd loop
v = 2
o = 2
n = 3

4th loop
v = 3
o = 3
n = 5

5th loop
v = 5
o = 5
n = 8

7th loop
v = 8
o = 8
n = 13

8th loop
v = 13
o = 13
n = 21

9th loop
v = 21
o = 21
n = 31

10th loop
v = 31
o = 31
n = 34

*/

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