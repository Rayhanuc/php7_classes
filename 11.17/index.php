<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.17</title>

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
                        echo "<h3 class='text-center'>11.17 - Magic methods in PHP class</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age ='',$class = ''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = strtoupper($value);
    }

    /*function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getAge() {
        return $this->age;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function getClass() {
        return $this->class;
    }

    function setClass($class) {
        $this->class = $class;
    }*/
}

$R = new Student('Rahim','16','10');
// $R = new Student();
// $R->setName('Rahim');
// echo $R->getAge();

$R->name = "Kamal";
echo $R->name;


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


class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age ='',$class = ''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = strtoupper($value);
    }

    /*function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    function getAge() {
        return $this->age;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function getClass() {
        return $this->class;
    }

    function setClass($class) {
        $this->class = $class;
    }*/
}

$R = new Student('Rahim','16','10');
// $R = new Student();
// $R->setName('Rahim');
// echo $R->getAge();

$R->name = "Kamal";
echo $R->name;

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