<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
define ("TUBO" , 3.3); //平方メートル

$Room101 = 100; //平方メートル
$Room102 =  75; //平方メートル
$Room103 = 150; //平方メートル


//$Room101T = printf ("%.2f" , $Room101/TUBO); 

//print "101号室→";
printf ("<p>101号室→%.2f坪</p>" , $Room101/TUBO);
//print "坪<br>";

//print "102号室→";
printf ("<p>102号室→%.2f坪</p>" , $Room102/TUBO);
//print "坪<br>";

//print "103号室→";
printf ("<p>103号室→%.2f坪</p>" , $Room103/TUBO);
//print "坪";



?>




</body>
</html>