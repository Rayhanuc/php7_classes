<?php

// setcookie('username','hulk',time()+300,'/php_class/9.8/my/test/cookie.php');
setcookie('data','hello world',time()+300);
echo $_COOKIE['data'];