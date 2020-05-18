<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 7.1</title>

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
                        echo "<h3 class='text-center'>7.1 - Read data from files</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$filename = "D:/xampp/htdocs/php7_classes/7.1/assets/files/f1.txt";
if(is_readable($filename)){
    $fp = fopen($filename, 'r');
    /* $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>"; */

    while($line = fgets($fp)){
        echo $line."<br/>";
    }
    rewind($fp);
    // fseek($fp,7);
    fseek($fp,-1, SEEK_END);
    while($line = fgets($fp)){
        echo $line."-<br/>";
    }


    fclose($fp);

    $data = file($filename);
    echo $data[2];
    echo "<xmp>";
    print_r($data);
    echo "</xmp>";

    echo PHP_EOL."<br/>";
    $data = file_get_contents($filename);

    echo $data;
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

$filename = "D:/xampp/htdocs/php7_classes/7.1/assets/files/f1.txt";
if(is_readable($filename)){
    $fp = fopen($filename, 'r');
    /* $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>";
    $line = fgets($fp);
    echo $line."<br/>"; */

    while($line = fgets($fp)){
        echo $line."<br/>";
    }
    rewind($fp);
    // fseek($fp,7);
    fseek($fp,-1, SEEK_END);
    while($line = fgets($fp)){
        echo $line."-<br/>";
    }


    fclose($fp);

    $data = file($filename);
    echo $data[2];
    echo "<xmp>";
    print_r($data);
    echo "</xmp>";

    echo PHP_EOL."<br/>";
    $data = file_get_contents($filename);

    echo $data;
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