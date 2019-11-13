<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.30</title>

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
                        echo "<h3 class='text-center'>১.৩০ - স্পেসশিপ অপারেটর</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$x = 7;
$y = 5;

function greaterOrSmaller($x,$y){
    if($x>$y){
        return 1;
    }else if($x==$y){
        return 0;
    }else{
        return -1;
    }
}

if(greaterOrSmaller($x,$y)==1){
    echo "{$x} is greater than {$y}";
}else if(greaterOrSmaller($x,$y)==0){
    echo "{$x} is equal to {$y}";
}else if(greaterOrSmaller($x,$y)==-1){
    echo "{$x} is smaller than {$y}";
}
echo "<br/>";

// This method only apply in PHP-7


// 5 <=> 4
/*
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের ছেয়ে ছোট হয় তাহলে -1 রিটার্ন হবে
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের সমান হয় তাহলে 0 রিটার্ন হবে
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের সমান হয় তাহলে 1 রিটার্ন হবে
*/

$result = $x<=>$y;
if($result == 1){
    echo "{$x} is greater than {$y}";
}else if($result == 0){
    echo "{$x} is equal to {$y}";
}else if($result == -1){
    echo "{$x} is smaller than {$y}";
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
    
$x = 7;
$y = 5;

function greaterOrSmaller($x,$y){
    if($x>$y){
        return 1;
    }else if($x==$y){
        return 0;
    }else{
        return -1;
    }
}

if(greaterOrSmaller($x,$y)==1){
    echo "{$x} is greater than {$y}";
}else if(greaterOrSmaller($x,$y)==0){
    echo "{$x} is equal to {$y}";
}else if(greaterOrSmaller($x,$y)==-1){
    echo "{$x} is smaller than {$y}";
}
echo "<br/>";

// This method only apply in PHP-7


// 5 <=> 4
/*
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের ছেয়ে ছোট হয় তাহলে -1 রিটার্ন হবে
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের সমান হয় তাহলে 0 রিটার্ন হবে
প্রথম অপারেন্ট যদি দ্বিতীয় অপারেন্টের সমান হয় তাহলে 1 রিটার্ন হবে
*/

$result = $x<=>$y;
if($result == 1){
    echo "{$x} is greater than {$y}";
}else if($result == 0){
    echo "{$x} is equal to {$y}";
}else if($result == -1){
    echo "{$x} is smaller than {$y}";
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