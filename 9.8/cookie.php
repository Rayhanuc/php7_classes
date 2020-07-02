<?php
// cookie cteate
// setcookie('username','hulk',time()+300,'/php7_classes/9.8/my');
// // cookie delet
// // setcookie('username','hulk',1);
// echo $_COOKIE['username'];

setcookie('data','hello world',time()+300);
setrawcookie('data2',rawurlencode('hello world'),time()+300);
setcookie('array2',serialize(array('id'=>1,'name'=>'Hasan')),time()+300);
setcookie("array[id]",1,time()+300);
setcookie("array[name]",'Hasan',time()+300);

foreach ($_COOKIE['array'] as $key=>$value) {
	echo $key." = ".$value."<br>";
}
foreach (unserialize($_COOKIE['array2']) as $key=>$value) {
	echo $key." = ".$value."<br>";
}
// echo $_COOKIE['data'];


// setcookie('data','hello world',time()+300);
?>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script type="text/javascript">
	alert(Cookies.get('data'));
</script>