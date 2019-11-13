<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.20</title>

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
                        echo "<h3 class='text-center'>১.২০ - পিএইচপিতে কন্ট্রোল স্ট্রাকচারের অল্টারনেটিভ সিনট্যাক্স নিয়ে আলোচনা
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start
Those code are difficult to show. Thats why i didn't kept those code.

// php end

                        </pre>
                        <a href="https://github.com/Rayhanuc/php7/blob/master/app/public/class-20/class-20.php"  target="_blank">If you want to see code in github please visit this link</a>
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

$n = 12;

// normal way to write if else function
if ($n%2==0) {
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n<br/>";
// alternet syntex method of if else
if ($n%2==0) :
    echo "Even Number";
    echo PHP_EOL; // echo "\n";
    echo "Some Text";
elseif(true) :

else :
    echo "Odd Number";
    echo PHP_EOL; // echo "\n";
    echo "Some Text++";
endif;

// switch case syntex
/*switch (variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}*/
echo "\n<br/>"; // echo "\n";
switch ($n%2==0):
    case 0:
        echo "Even Number";
        break;
    default:
        echo "Odd Number";
endswitch;

echo "\n<br/>";
// alternet syntex method of if else
if ($n%2==0) :
    ?>
    Even Number 
    <br/>
    Some Text
    <br/>
    <?php

else :
    ?>
    Odd Number 
    <br/>
    Some Text ++
    <br/>
    <?php
endif;

echo "\n<br/>";
// alternet syntex method of if else
if ($n%2==0) {
    ?>
    Even Number 
    <br/>
    Some Text
    <br/>
    <?php
}
else {
    ?>
    Odd Number 
    <br/>
    Some Text ++
    <br/>
    <?php
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