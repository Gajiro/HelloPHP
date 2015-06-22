<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php
	define("TAX", 0.05);
	$price1 = 100 * ( 1 + TAX );
	$price2 =  84 * ( 1 + TAX );
	$price3 = 180 * ( 1 + TAX );
	
	print "price1=" . $price1 . "<br>";
	print "price2=" . $price2 . "<br>";
	print "price3=" . $price3 . "<br>";

?>

</body>
</html>