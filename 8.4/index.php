<?php
require_once "inc/functions.php";
$info = '';
$task = $_GET['task']??'report';
$error = $_GET['error']??'0';
if ('seed' == $task) {
    seed();
    $info = "Seeding is complite.";
}

$fname = '';
$lname = '';
$roll = '';
if (isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST,'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST,'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST,'roll', FILTER_SANITIZE_STRING);

    if($fname != '' && $lname != '' && $roll != ''){
        $result = addStudent($fname, $lname, $roll);
        if ($result) {
            header('location: index.php?task=report');
        } else {
            $error = 1;
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 8.4</title>


        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
        <!-- style css link -->
        <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
        <!-- responsive css link -->
        <link href="assets/css/responsive.css" rel="stylesheet">
        <!-- css link end -->
        <style>
            body {
                margin-top: 30px;
            }
        </style>
        
    </head>
    <body>
        
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <h2>Project 2 - CRUD</h2>
                        <p>A sample project to perform CRUD operations using plain files and PHP</p>

                        <?php include_once('inc/templates/nav.php'); ?>
                        <hr>
                        <?php
                        if ($info != '') {
                            echo "<p>{$info}<p>";
                        }
                        ?>
                    </div>
                </div>

                <?php if('1' == $error) : ?>
                    <div class="row">
                        <div class="column column-60 column-offset-20">
                            <blockquote>
                                Duplicate Roll Number
                            </blockquote>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if('report' == $task) : ?>
                    <div class="row">
                        <div class="column column-60 column-offset-20">
                            <?php generateReport(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if('add' == $task) : ?>
                    <div class="row">
                        <div class="column column-60 column-offset-20">
                            <form action="index.php?task=add" method="POST">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                                <label for="roll" >Roll</label>
                                <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                                <button type="submit" class="button-primary" name="submit">Save</button>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
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