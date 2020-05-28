<?php
require_once "inc/functions.php";
$info = '';
$task = $_GET['task']??'report';
if ('seed' == $task) {
    seed();
    $info = "Seeding is complite.";
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 8.2</title>


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

                <?php if('report' == $task) : ?>
                    <div class="row">
                        <div class="column column-60 column-offset-20">
                            <?php generateReport(); ?>
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