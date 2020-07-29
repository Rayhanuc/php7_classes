<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.11</title>

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
                        echo "<h3 class='text-center'>11.11 - How to write better code with OOP by force</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

interface Baseanimal {
    public function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal {
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal {
    public function canTalk();
}


$cat = new Animal();
echo $cat instanceof Human;



abstract Class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eating";
    }
}

class Human extends AbstractHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){}
    function run(){}
}

$h = new Human();
// echo $h instanceof BaseHuman;

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

interface Baseanimal {
    public function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal {
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal {
    public function canTalk();
}


$cat = new Animal();
echo $cat instanceof Human;



abstract Class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eating";
    }
}

class Human extends AbstractHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){}
    function run(){}
}

$h = new Human();
// echo $h instanceof BaseHuman;

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