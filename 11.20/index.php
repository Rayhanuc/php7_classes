<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.20</title>

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
                        echo "<h3 class='text-center'>11.20 - PHP object cloning</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Color{
    public $data;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
    
}

class FavColor{
    public $data;
    public $color;
    function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
    
}

$fc1 = new FavColor('Some Data','red');
echo "<xmp>";
print_r($fc1);
echo "</xmp>";

$fc2 = clone $fc1;
echo "<xmp>";
print_r($fc2);
echo "</xmp>";

$fc2->updateColor('green');
echo "<xmp>";
/* $fc2 = clone $fc1;
echo "<xmp>";
print_r($fc1);
print_r($fc2);
echo "</xmp>";
$fc2->setData('More Data');
echo "<xmp>";
print_r($fc1);
print_r($fc2);
echo "</xmp>"; */

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

class Color{
    public $data;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
    
}

class FavColor{
    public $data;
    public $color;
    function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
    
}

$fc1 = new FavColor('Some Data','red');
echo "<xmp>";
print_r($fc1);
echo "</xmp>";

$fc2 = clone $fc1;
echo "<xmp>";
print_r($fc2);
echo "</xmp>";

$fc2->updateColor('green');
echo "<xmp>";
/* $fc2 = clone $fc1;
echo "<xmp>";
print_r($fc1);
print_r($fc2);
echo "</xmp>";
$fc2->setData('More Data');
echo "<xmp>";
print_r($fc1);
print_r($fc2);
echo "</xmp>"; */

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