<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.15</title>

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
                        echo "<h3 class='text-center'>১.১৫ - পিএইচপিতে টার্নারী অপারেটর এবং নেস্টেড টার্নারী অপারেটর নিয়ে কাজ করা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// ternary operator
$n = 10;

if (12 == $n) {
    echo "Twelve";
}else if(10 == $n) {
    echo "Ten";
}else {
    echo "A Number";
}

echo "\n<br/>";

// ternary operator example/use method
// $numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
echo $numberInWord;
echo "\n<br/>";

// Evern or Odd Number check
if ($n % 2 == 0) {
    echo "Even Number";
}else {
    echo "Odd Number";
}
echo "\n<br/>";

// ternary operator example/use method
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";
echo $result;


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
// ternary operator
$n = 10;

if (12 == $n) {
    echo "Twelve";
}else if(10 == $n) {
    echo "Ten";
}else {
    echo "A Number";
}

echo "\n<br/>";

// ternary operator example/use method
// $numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
echo $numberInWord;
echo "\n<br/>";

// Evern or Odd Number check
if ($n % 2 == 0) {
    echo "Even Number";
}else {
    echo "Odd Number";
}
echo "\n<br/>";

// ternary operator example/use method
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n} is a Odd Number";
echo $result;



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