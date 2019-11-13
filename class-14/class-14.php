<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.14</title>

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
                        echo "<h3 class='text-center'>১.১৪ - নেস্টেড ইফ এলস এবং কোডের রিডেবিলিটি</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// Method one
if (true) {
    if (true) {
        if (true) {
            echo "Helllo";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}
echo "\n<br>";


// Method two
$condition1 = true;
$condition2 = false;
$condition3 = false;
if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}

echo "\n<br>";

// php code or any kind of code should be readable

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
}elseif($condition1 && $condition2) {
    echo "no 1";
}elseif($condition1) {
    echo "no 2";
}else {
    echo "no 3";
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
// Method one
if (true) {
    if (true) {
        if (true) {
            echo "Helllo";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}
echo "\n<br>";


// Method two
$condition1 = true;
$condition2 = false;
$condition3 = false;
if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello";
        }else {
            echo "no 1";
        }
    }else {
        echo "no 2";
    }
}else {
    echo "no 3";
}

echo "\n<br>";

// php code or any kind of code should be readable

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
}elseif($condition1 && $condition2) {
    echo "no 1";
}elseif($condition1) {
    echo "no 2";
}else {
    echo "no 3";
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