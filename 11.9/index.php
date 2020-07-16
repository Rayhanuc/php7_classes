<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.9</title>

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
                        echo "<h3 class='text-center'>11.9 - Abstract Class and Abstract Method in OOP</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{
    private $base, $height;
    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    function getArea(){
        return $this->base*$this->height."\n<br>";
    }

    function getPerimeter(){

    }
}

class Triangle extends Shape{
    function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter(){
        
    }
}

$triangle = new Rectangle(10,10);
echo $triangle->getArea();

// $shape = new Shape();

// ==============================

abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

    abstract function eat($v1, $v2=0);
}

class MyClass extends OurClass{
    function sayHi(){
        echo "Hello\n<br>";
    }
    function eat($m, $x=5){
        echo "I am eating\n<br>";
    }
}

$mc = new MyClass();
$mc->sayHi();
$mc->eat(1,2);

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

abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{
    private $base, $height;
    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    function getArea(){
        return $this->base*$this->height."\n<br>";
    }

    function getPerimeter(){

    }
}

class Triangle extends Shape{
    function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter(){
        
    }
}

$triangle = new Rectangle(10,10);
echo $triangle->getArea();

// $shape = new Shape();

// ==============================

abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

    abstract function eat($v1, $v2=0);
}

class MyClass extends OurClass{
    function sayHi(){
        echo "Hello\n<br>";
    }
    function eat($m, $x=5){
        echo "I am eating\n<br>";
    }
}

$mc = new MyClass();
$mc->sayHi();
$mc->eat(1,2);

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