<?php
namespace CloudStorage;
include "autoloader.php";
// include "filesystem/scanner.php";
// include "mail/mailer.php";

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main{
    function __construct(){
        $mailer = new Mailer();
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();

    }
}

new Main();



