<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.24</title>

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
                        echo "<h3 class='text-center'>11.24 - Discusses property overloading and __isset () and __unset () magic methods</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class MotorCycle{
    private $parameters;
    // private $displacement, $capacity, $mileage;

    function __construct($displacement, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
    }

    /* function getDisplacement(){
        return $this->parameters['displacement'];
    }

    function setDisplacement($displacement){
        $this->parameters['displacement'] = $displacement;
    } */

    function __isset($name){
        if(isset($this->parameters[$name])){
            echo "{$name} not found";
            return false;
        }
        return true;
    }

    function __unset($name){
        echo "<xmp>";
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters)."</xmp>";
        echo "</xmp>";
    }

    function __get($name){
        echo $this->parameters[$name]; // $this->displacement
    }

    function __set($name, $value){
        echo $this->parameters[$name] = $value; // $this->displacement
    }
}

$pulsar = new MotorCycle('150cc','16ltr','40kmp');

// echo $pulsar->getDisplacement()."<br>";
$pulsar->displacement = '250cc';
echo $pulsar->displacement;

if(isset($pulsar->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($pulsar->mileage);

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

class MotorCycle{
    private $parameters;
    // private $displacement, $capacity, $mileage;

    function __construct($displacement, $capacity, $mileage){
        $this->parameters = [];
        $this->parameters['mileage'] = $mileage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
    }

    /* function getDisplacement(){
        return $this->parameters['displacement'];
    }

    function setDisplacement($displacement){
        $this->parameters['displacement'] = $displacement;
    } */

    function __isset($name){
        if(isset($this->parameters[$name])){
            echo "{$name} not found";
            return false;
        }
        return true;
    }

    function __unset($name){
        echo "<xmp>";
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters)."</xmp>";
        echo "</xmp>";
    }

    function __get($name){
        echo $this->parameters[$name]; // $this->displacement
    }

    function __set($name, $value){
        echo $this->parameters[$name] = $value; // $this->displacement
    }
}

$pulsar = new MotorCycle('150cc','16ltr','40kmp');

// echo $pulsar->getDisplacement()."<br>";
$pulsar->displacement = '250cc';
echo $pulsar->displacement;

if(isset($pulsar->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($pulsar->mileage);
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