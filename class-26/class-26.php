<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 1.26</title>

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
                        echo "<h3 class='text-center'>১.২৬ - ফর লুপে মাল্টিপল স্টেপিং নিয়ে আরও কিছু কথা
                            </h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

// ১ থেকে ১০০ পর্যন্ত যে সব সংখ্যা ৭ দিয়ে ভাগ যায় সে সব সংখ্যা ফর লোপের সহায্যে প্রিন্ট করে দেখাতে

for ($i=0; $i < 100; $i+=7) { 
    echo $i."\n<br/>";
}

for ($i=0; $i < 100; $i+=7) { 
    
    /*if ($i % 7 == 0) echo $i."\n<br/>";
    if ($i % 11 == 0) echo $i."\n<br/>";*/

    echo $i % 7 == 0 ? $i. "<br/>":'';
    echo $i % 11 == 0 ? $i. "<br/>":'';
}
echo "\n<br/>";
echo "\n<br/>";

// my for loop multiple start_previewing_theme
for ($i=0,$j=0; $i < 100 ; $i += 7,$j += 11) { 
    echo $i."\n<br/>";
    echo $j < 100 ? $j."\n<br/>":'';
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
    
// ১ থেকে ১০০ পর্যন্ত যে সব সংখ্যা ৭ দিয়ে ভাগ যায় সে সব সংখ্যা ফর লোপের সহায্যে প্রিন্ট করে দেখাতে

for ($i=0; $i < 100; $i+=7) { 
    echo $i."\n<br/>";
}

for ($i=0; $i < 100; $i+=7) { 
    
    /*if ($i % 7 == 0) echo $i."\n<br/>";
    if ($i % 11 == 0) echo $i."\n<br/>";*/

    echo $i % 7 == 0 ? $i. "<br/>":'';
    echo $i % 11 == 0 ? $i. "<br/>":'';
}
echo "\n<br/>";
echo "\n<br/>";

// my for loop multiple start_previewing_theme
for ($i=0,$j=0; $i < 100 ; $i += 7,$j += 11) { 
    echo $i."\n<br/>";
    echo $j < 100 ? $j."\n<br/>":'';
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