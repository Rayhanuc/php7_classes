<?php
$allowed_types = [
    'image/png',
    'image/jpg',
    'image/jpeg'
];
if (isset($_FILES['photo'])) {
    $totalFiles = count($_FILES['photo']['name']);
    for($i=0;$i<$totalFiles;$i++){
        if (in_array($_FILES['photo']['type'][$i],$allowed_types) !== false && $_FILES['photo']['size'][$i]<5*1024*1024) {
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "files/".$_FILES['photo']['name'][$i]);
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

        <title>PHP-7 Class 4.8</title>


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
                        <h1>File Upload</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis exercitationem consequuntur sunt totam, repellat impedit architecto provident ut nesciunt, voluptatibus.</p>

                        <pre>
                            <p>
                                <?php 
                                print_r($_POST);
                                print_r($_FILES);
                                // $photo = '';


                                // if(isset($_GET['photo']) && !empty($_GET['photo'])) {
                                //     // $photo = htmlspecialchars($_REQUEST['photo']);
                                //     $photo = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_STRING);
                                // }
                                
                                ?>
                            </p>
                        </pre>
                    </div>
                </div>

                <div class="row">
                    <div class="column  column-60 column-offset-20">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <label for="fname" >First Name</label>
                            <input type="text" name="fname" id="fname">

                            <label for="lname" >Last Name</label>
                            <input type="text" name="lname" id="lname">

                            <label for="photo" >Photo</label>
                            <input type="file" name="photo[]" id="photo"><br/>
                            <input type="file" name="photo[]" id="photo"><br/>
                            <input type="file" name="photo[]" id="photo"><br/>
                            <input type="file" name="photo[]" id="photo"><br/>

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