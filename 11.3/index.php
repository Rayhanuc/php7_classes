<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.3</title>

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
                        echo "<h3 class='text-center'>11.3 - The class constructor method that runs automatically when an object is created from the class
                        </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Human{
    public $name;
    public $age;
    function __construct($personName, $personAge=0) {
        // echo "New Human Object Is Created\n<br>";
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayHi() {
        echo "Salam\n<br>";
        $this->sayName();
    }
    function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old\n<br/>";
        }else {
            echo "My Name is {$this->name}, I don't know how old I am\n<br/>";
        }
    }
}

$h1 = new Human("Rubel",21);
$h2 = new Human("Hasin",42);
$h3 = new Human("Rakhi");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();

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

class Human{
    public $name;
    public $age;
    function __construct($personName, $personAge=0) {
        // echo "New Human Object Is Created\n<br>";
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayHi() {
        echo "Salam\n<br>";
        $this->sayName();
    }
    function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old\n<br/>";
        }else {
            echo "My Name is {$this->name}, I don't know how old I am\n<br/>";
        }
    }
}

$h1 = new Human("Rubel",21);
$h2 = new Human("Hasin",42);
$h3 = new Human("Rakhi");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();

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