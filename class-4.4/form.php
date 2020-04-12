<?php 
header('X-XSS-Protection:0');

include_once "functions.php";

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Example</title>

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
                        <h1>Our First Form</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis exercitationem consequuntur sunt totam, repellat impedit architecto provident ut nesciunt.</p>
                        <p>
                            <?php 
                            $fname = '';
                            $lname = '';
                            $checked = '';

                            if(isset($_REQUEST['ch1']) && $_REQUEST['ch1'] == 1){
                                $checked = 'checked';
                            }
                            // print_r ($_REQUEST);

                             ?>
                            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                                // $fname = htmlspecialchars($_REQUEST['fname']);
                                $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                            } ?>

                            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                                // $lname = htmlspecialchars($_REQUEST['lname']);
                                $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                            } ?>
                        </p>

                        <p>
                            First Name: <?php echo $fname; ?><br>
                            Last Name: <?php echo $lname; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form method="GET">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                            
                            <label for="lname">First Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                            <!-- <div>
                                <input type="checkbox" name="ch1" id="ch1" value="1" <?php echo $checked; ?>>
                                <label for="ch1" class="label-inline">Some Checkbox</label>
                            </div> -->

                            <label class="label">Select Some Fruts</label>

                            <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ; ?>>
                            <label class="label-inline">Orange</label><br>
                            <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango') ; ?>>
                            <label class="label-inline">Mango</label><br>
                            <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana') ; ?>>
                            <label class="label-inline">Banana</label><br>
                            <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon') ; ?>>
                            <label class="label-inline">Lemon</label><br>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        
        

        <!-- jquery js link -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- bootstrap js link -->
        <!-- <script src="assets/js/bootstrap.min.js"></script> -->
        <!-- main js link -->
        <script src="assets/js/main.js"></script>
    </body>
</html>