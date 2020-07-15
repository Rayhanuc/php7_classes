<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.6</title>

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
                        echo "<h3 class='text-center'>11.6 - Discuss about Inheritance
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n<br>";
    }

    public function run(){
        echo "{$this->name} is running\n<br>";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n<br>";
    }

    public function greet(){} // override

    protected function addTitle($title){
        $this->name = $title. " " .$this->name;
    }
}

/* class Human {

    public function sayhi(){
        echo "Hi";
    }
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
}

class Cat{
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
} */

class Human extends Animal {
    public function greet(){
        $this->addTitle("Mr. ");
        echo "{$this->name} says Hi\n<br>";
    }
}

class Cat extends Animal {
    public function greet(){
        echo "{$this->name} says Meow\n<br>";
    }
}

$rasel = new Human('Rasel');
echo $rasel->greet();
$rasel->eat();

$cat1 = new Cat('Tom');
$cat1->greet();
$cat1->sleep();

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

class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n<br>";
    }

    public function run(){
        echo "{$this->name} is running\n<br>";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n<br>";
    }

    public function greet(){} // override

    protected function addTitle($title){
        $this->name = $title. " " .$this->name;
    }
}

/* class Human {

    public function sayhi(){
        echo "Hi";
    }
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
}

class Cat{
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
} */

class Human extends Animal {
    public function greet(){
        $this->addTitle("Mr. ");
        echo "{$this->name} says Hi\n<br>";
    }
}

class Cat extends Animal {
    public function greet(){
        echo "{$this->name} says Meow\n<br>";
    }
}

$rasel = new Human('Rasel');
echo $rasel->greet();
$rasel->eat();

$cat1 = new Cat('Tom');
$cat1->greet();
$cat1->sleep();


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