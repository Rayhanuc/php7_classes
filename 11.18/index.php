<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 11.18</title>

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
                        echo "<h3 class='text-center'>11.18 - A practical example of an interface</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");
$districts->add("Dhaka");
$districts->add("Khulna");
$districts->add("Comilla");

// $_districts = $districts->getDistricts();
foreach($districts as $_district){
    echo $_district."\n<br>";
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


class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Rajshahi");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");
$districts->add("Dhaka");
$districts->add("Khulna");
$districts->add("Comilla");

// $_districts = $districts->getDistricts();
foreach($districts as $_district){
    echo $_district."\n<br>";
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