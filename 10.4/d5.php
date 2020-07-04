<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
<h1>Code: </h1>
<xmp>
    $d1 = new DateTime('20 May 2007');
    $d2 = new DateTime('27 July 2013');
    $difference = date_diff($d1,$d2);
    $difference2 = $d1->diff($d2);
    echo $difference->format('%y Yeay %m Months %d Day')."</br>";
    echo $difference2->format('%y Yeay %m Months %d Day');
</xmp>

<h1>Result: </h1>
<?php

$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 July 2013');
$difference = date_diff($d1,$d2);
$difference2 = $d1->diff($d2);
echo $difference->format('%y Yeay %m Months %d Day')."</br>";
echo $difference2->format('%y Yeay %m Months %d Day');