<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.22</title>

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
                        echo "<h3 class='text-center'>১.২২ - বিভিন্ন রকম লুপের সাথে পরিচয়
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// LOOP
echo "<h5>1 to 20 number / ১ থেকে ২০ পর্যন্ত লোপ সংখ্যা</h5>";
for ($i = 1; $i<=20; $i+=1) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 20 Odd number / ১ থেকে ২০ পর্যন্ত বিজোড় সংখ্যা</h5>";
for ($i = 1; $i<=20; $i+=2) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 20 even number / ১ থেকে ২০ পর্যন্ত জোড় সংখ্যা</h5>";
for ($i = 2; $i<=20; $i+=2) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 10 even number / ১ থেকে ১০ পর্যন্ত জোড় সংখ্যা</h5>";
for ($i = 0; $i<=10; $i+=1) {
    // echo $i;
    echo PHP_EOL."<br/>";
    for ($j=0; $j<$i; $j++) { 
        echo PHP_EOL."*";
    }
}
echo PHP_EOL."<br/>";

echo "<h5>While loop</h5>";
$i = 0;
// while loop
while ($i<10) {
    $i++;
    echo $i.PHP_EOL."<br/>";
}

echo PHP_EOL."<br/>";
echo "<h5>do loop</h5>";
$j = 0;
do{
    $j++;
    echo $j.PHP_EOL."<br/>";
}while($j<10);


echo "<h5>goto</h5>";
$j=0;
a: $j++;
echo $j.PHP_EOL."<br/>";
if($j<10) goto a;

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
                        
// LOOP
echo "<h5>1 to 20 number / ১ থেকে ২০ পর্যন্ত লোপ সংখ্যা</h5>";
for ($i = 1; $i<=20; $i+=1) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 20 Odd number / ১ থেকে ২০ পর্যন্ত বিজোড় সংখ্যা</h5>";
for ($i = 1; $i<=20; $i+=2) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 20 even number / ১ থেকে ২০ পর্যন্ত জোড় সংখ্যা</h5>";
for ($i = 2; $i<=20; $i+=2) {
    echo $i;
    echo PHP_EOL."<br/>";
}
echo PHP_EOL."<br/>";
echo "<h5>1 to 10 even number / ১ থেকে ১০ পর্যন্ত জোড় সংখ্যা</h5>";
for ($i = 0; $i<=10; $i+=1) {
    // echo $i;
    echo PHP_EOL."<br/>";
    for ($j=0; $j<$i; $j++) { 
        echo PHP_EOL."*";
    }
}
echo PHP_EOL."<br/>";

echo "<h5>While loop</h5>";
$i = 0;
// while loop
while ($i<10) {
    $i++;
    echo $i.PHP_EOL."<br/>";
}

echo PHP_EOL."<br/>";
echo "<h5>do loop</h5>";
$j = 0;
do{
    $j++;
    echo $j.PHP_EOL."<br/>";
}while($j<10);


echo "<h5>goto</h5>";
$j=0;
a: $j++;
echo $j.PHP_EOL."<br/>";
if($j<10) goto a;
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