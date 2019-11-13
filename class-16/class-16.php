<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.16</title>

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
                        echo "<h3 class='text-center'>১.১৬ - কন্ডিশন চেক করার আরেকটি উপায় - সুইচকেস</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// switch case
$n = 10;
$r = $n % 2;
switch($r){
    case 0:
        echo "{$n} is an even number \n<br/>";
        break;
    default: // or অথবা
        echo "{$n} is an odd number \n<br/>";
}

// $color = 'red';
$color = 'green';
// $color = 'blue';
// $color = 'black';
switch ($color) {
    /*case 'red':
        echo "Red is our favorite color";
        break;
    case 'green':
        echo "Green is our favorite color";
        break;*/

    case 'red':
    case 'green':
        echo ucwords($color)." is our favorite color"; /*ucwords for first letter capitalized*/
        break;
    case 'blue':
        echo  ucwords($color)." is not our favorite color";
        break;
    
    default:
        echo "This {$color} color is ok";
        // break;
}

// old method
/*if ('red' == $color || 'green' == $color) {
    # code...
}*/


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
// switch case
$n = 10;
$r = $n % 2;
switch($r){
    case 0:
        echo "{$n} is an even number \n<br/>";
        break;
    default: // or অথবা
        echo "{$n} is an odd number \n<br/>";
}

// $color = 'red';
$color = 'green';
// $color = 'blue';
// $color = 'black';
switch ($color) {
    /*case 'red':
        echo "Red is our favorite color";
        break;
    case 'green':
        echo "Green is our favorite color";
        break;*/

    case 'red':
    case 'green':
        echo ucwords($color)." is our favorite color"; /*ucwords for first letter capitalized*/
        break;
    case 'blue':
        echo  ucwords($color)." is not our favorite color";
        break;
    
    default:
        echo "This {$color} color is ok";
        // break;
}

// old method
/*if ('red' == $color || 'green' == $color) {
    # code...
}*/

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