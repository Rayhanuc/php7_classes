<?php
include_once "form2-functions.php";
$fruits = ["mango","orange","Banana","apple","lemon","peach"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP-7 Class 4.5</title>


        <!-- font-awesome css link -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
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
                    <div class="column column-60 column-offset-20">
                        <h1>Select/Dropdowns</h1>
                        <p>Quia rem repudiandae odit quaerat nobis rerum ratione consequatur illo similique quisquam iure ullam! Excepturi ad libero a architecto. Reiciendis commodi voluptas neque laboriosam architecto quaerat, magni ipsa error veniam?</p>

                        <p>
                            <?php
                            // echo "You have selected";
                            // Show single value
                            /*if (isset($_POST['fruits']) && $_POST['fruits'] !='') {

                                printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                            }*/


                            // For multiple value show
                            // $sfruits = isset($_POST['fruits']) ? $_POST['fruits'] : array();
                            // $sfruits = $_POST['fruits'] ?? array(); //[]
                            $sfruits = filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                            if (count($sfruits)>0) {
                                echo "You have selected: ".join(", ",$sfruits);
                            }
                            
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form method="POST">
                            <label for="fruits">Select Some Fruits</label>
                            <select style="height: 200px" name="fruits[]" id="fruits" multiple>
                                <option value="" disabled selected>Select Some Fruits</option>
                                <?php displayOptions($fruits, $sfruits); ?>
                            </select>
                            <button type="submit">Submit</button>
                        </form>
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