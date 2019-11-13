<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.5</title>

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
                        echo "<h3 class='text-center'>৩.৫ - মাল্টিডাইমেনশনাল বা নেস্টেড অ্যারে</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$foods = [
    'vegetables' => explode(', ','brinjal, brocolli, carrot, capsicam, cauliflower'),
    'fruits' => explode(', ','orange, banana, apple'),
    'drinks' => explode(', ','water, milk')
];

echo "<xmp>";
print_r($foods);
echo "</xmp>";
echo "<br/>";


array_push($foods['drinks'], 'orange juice');
echo "<xmp>";
print_r($foods);
echo "</xmp>";

echo "<br/>";
echo $foods['vegetables'][3]."<br>";
echo $foods['vegetables'][2];

echo "<br/>";
$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ]
];

echo $sample['test']['test-again'][2];

echo "<br/>";
$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]],
];
echo "<xmp>";
print_r($sample2);
echo "</xmp>";

echo $sample2[3][4][1];


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


$foods = [
    'vegetables' => explode(', ','brinjal, brocolli, carrot, capsicam, cauliflower'),
    'fruits' => explode(', ','orange, banana, apple'),
    'drinks' => explode(', ','water, milk')
];

echo "<xmp>";
print_r($foods);
echo "</xmp>";
echo "<br/>";


array_push($foods['drinks'], 'orange juice');
echo "<xmp>";
print_r($foods);
echo "</xmp>";

echo "<br/>";
echo $foods['vegetables'][3]."<br>";
echo $foods['vegetables'][2];

echo "<br/>";
$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ]
];

echo $sample['test']['test-again'][2];

echo "<br/>";
$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]],
];
echo "<xmp>";
print_r($sample2);
echo "</xmp>";

echo $sample2[3][4][1];


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