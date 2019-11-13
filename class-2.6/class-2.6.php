<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 2.6</title>

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
                        echo "<h3 class='text-center'>২.৬ - একটা বড় ফাংশনকে ছোট ফাংশনে ভাগ করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// Normal Way to do
function doTheLargeTask(){
    echo "Step A Done<br>";
    echo "Step B Done<br>";
    echo "Step C Done<br>";
    echo "Step D Done<br>";
    echo "Step E Done<br>";
    echo "Step F Done<br>";
}

doTheLargeTask();
echo "<br>";
echo "<br>";
echo "<br>";

// Right Way to do
function doTaskA(){
    echo "Step A Done<br>";
}
function doTaskB(){
    echo "Step B Done<br>";
}
function doTaskC(){
    echo "Step C Done<br>";
}
function doTaskD(){
    echo "Step D Done<br>";
}
function doTaskE(){
    echo "Step E Done<br>";
}
function doTaskF(){
    echo "Step F Done<br>";
}
function doTheLargeTask2(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
    doTaskF();
}

doTheLargeTask2();

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

// Normal Way to do
function doTheLargeTask(){
    echo "Step A Done<br>";
    echo "Step B Done<br>";
    echo "Step C Done<br>";
    echo "Step D Done<br>";
    echo "Step E Done<br>";
    echo "Step F Done<br>";
}

doTheLargeTask();
echo "<br>";
echo "<br>";
echo "<br>";

// Right Way to do
function doTaskA(){
    echo "Step A Done<br>";
}
function doTaskB(){
    echo "Step B Done<br>";
}
function doTaskC(){
    echo "Step C Done<br>";
}
function doTaskD(){
    echo "Step D Done<br>";
}
function doTaskE(){
    echo "Step E Done<br>";
}
function doTaskF(){
    echo "Step F Done<br>";
}
function doTheLargeTask2(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
    doTaskF();
}

doTheLargeTask2();


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