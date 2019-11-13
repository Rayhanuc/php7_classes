<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 2.9</title>

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
                        echo "<h3 class='text-center'>২.৯ - পিএইচপিতে ভ্যারিয়েবল স্কোপ (খুবই ইম্পর্ট্যান্ট)</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

echo "<h5>Global scope</h5>";
$name = "Earth";

function doSomething(){
    /*global $name;
    echo $name;*/
    echo $GLOBALS['name'];
}

doSomething();
echo "<br>";
// 2nd method


echo "<h5>Local scope</h5>";
function doSomething2(){
    global $name;
    $name = "Earth2"; // Local scope
}
doSomething2();
echo $name;
echo "<br>";

// echo "<h5>Local scope</h5>";
function doSomething3(){
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doSomething3();
doSomething3();
echo "<br>";

echo "<h5>Static scope</h5>";
function doSomething4(){
    static $i;

    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doSomething4();
doSomething4();
doSomething4();
doSomething4();
doSomething4();
doSomething4();
echo "<br>";


echo "<h5>Extra</h5>";
function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doExtra();
doExtra();
doSomething4();
doExtra();
doExtra();
doExtra();
doSomething4();
doExtra();
doExtra();
echo "<br>";

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


echo "<h5>Global scope</h5>";
$name = "Earth";

function doSomething(){
    /*global $name;
    echo $name;*/
    echo $GLOBALS['name'];
}

doSomething();
echo "<br>";
// 2nd method


echo "<h5>Local scope</h5>";
function doSomething2(){
    global $name;
    $name = "Earth2"; // Local scope
}
doSomething2();
echo $name;
echo "<br>";

// echo "<h5>Local scope</h5>";
function doSomething3(){
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doSomething3();
doSomething3();
echo "<br>";

echo "<h5>Static scope</h5>";
function doSomething4(){
    static $i;

    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doSomething4();
doSomething4();
doSomething4();
doSomething4();
doSomething4();
doSomething4();
echo "<br>";


echo "<h5>Extra</h5>";
function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "<br>";
}
doExtra();
doExtra();
doSomething4();
doExtra();
doExtra();
doExtra();
doSomething4();
doExtra();
doExtra();
echo "<br>";

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