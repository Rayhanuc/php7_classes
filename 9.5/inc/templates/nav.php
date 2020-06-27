<?php
session_start([
    'cookie_lifetime' => 300 // 300 means 300 / 60 = 5 minutes
]);
?>
<div>
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a> 
            <?php if(hasPrivilege()) :?>
            |
            <a href="index.php?task=add">Add New Student</a> 
            <?php endif;?>
            <?php if(isAdmin()) :?>
            |
            <a href="index.php?task=seed">Seed</a>
            <?php endif;?>
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
        <a href="auth.php?logout=true">Log Out (<?php echo $_SESSION['role'] ; ?>)</a>
        <?php
        endif;
        ?>
    </div>
</div>