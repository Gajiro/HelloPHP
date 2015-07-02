<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php
//$sum =$_POST['val1']+$_POST['val2'] ;
// ↓$_POST['val1']、POST['val2']は変数に代入した方が楽だし見やすい
print "num1 = " . $_POST['val1'] . "<br>";
print "num2 = " . $_POST['val2'] . "<br>";
print "num1 + num2 = " . ($_POST['val1'] + $_POST['val2']) . "<br>";
print "num1 - num2 = " . ($_POST['val1'] - $_POST['val2']) . "<br>";
print "num1 * num2 = " . ($_POST['val1'] * $_POST['val2']) . "<br>";
print "num1 / num2 = " . ($_POST['val1'] / $_POST['val2']) . "<br>";


?>



</body>
</html>