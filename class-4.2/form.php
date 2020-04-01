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
                            <?php if(isset($_GET['fname']) && !empty($_GET['fname'])) : ?>
                            First Name: <?php echo $_GET['fname'];?> <br>
                            <?php endif; ?>

                            <?php if(isset($_GET['lname']) && !empty($_GET['lname'])) : ?>
                            Last Name: <?php echo $_GET['lname'];?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form method="GET">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname">
                            
                            <label for="lname">First Name</label>
                            <input type="text" name="lname" id="lname">

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