<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.5</title>

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
                        echo "<h3 class='text-center'>11.5 - Writing a real life useful class
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class RGB{
    private $color; // #ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '') {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }
    
    function getColor(){
        return $this->color;
    }
    
    function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }
    
    function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }
    
    function setColor($colorCode) {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    private function parseColor() {
        if ($this->color) {
           list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        }else {
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    function getRed(){
        return $this->red;
    }

    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }
}

$myColor = new RGB("#00ff00");
$myColor->readRGBColor();
echo $myColor->getGreen();

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

class RGB{
    private $color; // #ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '') {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }
    
    function getColor(){
        return $this->color;
    }
    
    function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }
    
    function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }
    
    function setColor($colorCode) {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    private function parseColor() {
        if ($this->color) {
           list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        }else {
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    function getRed(){
        return $this->red;
    }

    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }
}

$myColor = new RGB("#00ff00");
$myColor->readRGBColor();
echo $myColor->getGreen();


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