<?php
namespace CloudStorage;
include "autoloading/mail/mailer.php";
class Main{
    function __construct(){
        (new Mail\Mailer())->sendMail();
    }
}

new Main();



