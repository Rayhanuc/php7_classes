<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 3.7</title>

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
                        echo "<h3 class='text-center'>৩.৭ - কপি বাই ভ্যালু এবং কপি বাই রেফারেন্স</h3> \n<br/>";
                        ?>
                        <hr>
                        <?php echo "<h4>PHP Code: </h4>"; ?>
                        <pre>

// php code start

$person = array(
    'fname' => 'Hello',
    'lname' => 'World'
);

$newperson = $person;

// copy value as a referace. change will both
// $newperson = &$person;

$newperson['lname'] = 'Ploto';
echo "<xmp>";
print_r($person);
echo "</xmp>";
echo "<br/>";

echo "<xmp>";
print_r($newperson);
echo "</xmp>";
// copy by value
// deep copy



/*
copy by reference
shallow copy
*/

function printData($person){
    $person['fname'] .= " Changed";
    print_r($person);
}
echo "<br/>";
echo "<xmp>";
printData($person);
echo "</xmp>";


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

$person = array(
    'fname' => 'Hello',
    'lname' => 'World'
);

$newperson = $person;

// copy value as a referace. change will both
// $newperson = &$person;

$newperson['lname'] = 'Ploto';
echo "<xmp>";
print_r($person);
echo "</xmp>";
echo "<br/>";

echo "<xmp>";
print_r($newperson);
echo "</xmp>";
// copy by value
// deep copy



/*
copy by reference
shallow copy
*/

function printData($person){
    $person['fname'] .= " Changed";
    print_r($person);
}
echo "<br/>";
echo "<xmp>";
printData($person);
echo "</xmp>";

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