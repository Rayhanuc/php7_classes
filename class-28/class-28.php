<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.28</title>

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
                        echo "<h3 class='text-center'>১.২৮ - লুপের মাঝে কন্টিনিউ এবং ব্রেক
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo PHP_EOL."<br/>";

    if ($i==6) {
        break;
    }
}

echo("=====================<br/>");

for ($i=20; $i < 50; $i++) { 

    if ($i%13==0) {
        echo $i;
        echo PHP_EOL."<br/>";
        break;
    }
}

echo("=====================<br/>");    

for ($i=20; $i < 40; $i++) { 

    if ($i<27) {
        continue; // goto a;
    }
    echo $i;
    echo PHP_EOL."<br/>";

// a:'';
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
    
for ($i=0; $i < 10; $i++) { 
    echo $i;
    echo PHP_EOL."<br/>";

    if ($i==6) {
        break;
    }
}

echo("=====================<br/>");

for ($i=20; $i < 50; $i++) { 

    if ($i%13==0) {
        echo $i;
        echo PHP_EOL."<br/>";
        break;
    }
}

echo("=====================<br/>");    

for ($i=20; $i < 40; $i++) { 

    if ($i<27) {
        continue; // goto a;
    }
    echo $i;
    echo PHP_EOL."<br/>";

// a:'';
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