<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.12</title>

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
                        echo "<h3 class='text-center'>১.১২ - পিএইচপিতে কন্ডিশন (লজিক) এবং লজিকাল অপারেটর নিয়ে আলোচনা</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$n = 13;
if ($n % 2 == 0) {
    echo "$n is an even number"; // জোড় সংখ্যা
}else {
    echo "$n is a odd number"; // বিজোড় সংখ্যা
}
echo "\n";

if ($n > 12) {
    echo "$n is greater then > 10\n";
}else {
    echo "$n is less then 10\n";
}

$a = 12;
$b = 12;

if($a == $b) {
    echo "A is equal to B\n";
}
$c = 12;
$d = 13;

if($c != $d) {
    echo "C is Not equal to D\n";
}

$alam = 100;
$rahim = 200;
if ($alam == $rahim) {
    echo "Alam has same or more money than Rahim";
}else if ($alam>$rahim) {
    echo "Alam has more money than Rahim";
}else if ($alam<$rahim) {
    echo "Alam has less money than Rahim";
}
else if ($alam >= $rahim) {
    echo "alam and Rahim has same amount of money.";
}

echo "\n";

$age = 22;

if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}elseif($age >= 19) {
    echo "This person now a young man / women";
}else {
    echo "This person is not a teenager";
}

echo "\n";

$food = "tuna";

if ( "tuna" == $food || "salmon" == $food ) {
    echo "{$food} has vitamin D";
}else if ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
}
else {
    echo "we don't know about {$food} contains vitamin D";
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

$n = 13;
if ($n % 2 == 0) {
    echo "$n is an even number"; // জোড় সংখ্যা
}else {
    echo "$n is a odd number"; // বিজোড় সংখ্যা
}
echo "\n<br>";

if ($n > 12) {
    echo "$n is greater then > 10\n<br>";
}else {
    echo "$n is less then 10\n<br>";
}

$a = 12;
$b = 12;

if($a == $b) {
    echo "A is equal to B\n<br>";
}
$c = 12;
$d = 13;

if($c != $d) {
    echo "C is Not equal to D\n<br>";
}

$alam = 100;
$rahim = 200;
if ($alam == $rahim) {
    echo "Alam has same or more money than Rahim";
}else if ($alam>$rahim) {
    echo "Alam has more money than Rahim";
}else if ($alam<$rahim) {
    echo "Alam has less money than Rahim";
}
else if ($alam >= $rahim) {
    echo "alam and Rahim has same amount of money.";
}

echo "\n<br>";

$age = 22;

if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
}elseif($age >= 19) {
    echo "This person now a young man / women";
}else {
    echo "This person is not a teenager";
}

echo "\n<br>";

$food = "tuna";

if ( "tuna" == $food || "salmon" == $food ) {
    echo "{$food} has vitamin D";
}else if ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
}
else {
    echo "we don't know about {$food} contains vitamin D";
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