<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php

$a[] = '青森';
$a[] = '弘前';
$a[] = '八戸';
$a[4] = 'むつ';
$a[3] = '三沢';

for($i = 0; $i < count($a); $i++){
	print $a[$i] ."<br>";
}




?>
</body>
</html>