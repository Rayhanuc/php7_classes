<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.8</title>

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
                        echo "<h3 class='text-center'>11.8 - More examples of inheritance
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n<br>";
    }

    public function calculateArea(){}
}

class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }

}

class Rectangle extends Shape {
    private $a, $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b)/2;
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2,4);
$r->getArea();

$t = new Triangle(10,12,8);
$t->getArea();

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

class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n<br>";
    }

    public function calculateArea(){}
}

class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }

}

class Rectangle extends Shape {
    private $a, $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b)/2;
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2,4);
$r->getArea();

$t = new Triangle(10,12,8);
$t->getArea();

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