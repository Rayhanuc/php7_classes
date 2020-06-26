<?php
session_start([
    'cookie_lifetime' => 300 // 300 means 300 / 60 = 5 minutes
]);
?>
<div>
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a> |
            <a href="index.php?task=add">Add New Student</a> |
            <a href="index.php?task=seed">Seed</a>
        </p>
    </div>
    <div class="float-right">
        <?php
        if(!$_SESSION['loggedin']):
        ?>
        <a href="auth.php">Log In</a>
        <?php
        else:
        ?>
        <a href="auth.php?logout=true">Log Out <?php echo $_SESSION['role'] ; ?></a>
        <?php
        endif;
        ?>
    </div>
</div>