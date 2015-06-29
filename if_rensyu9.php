<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$point = 70;


if($point >= 80){
	print "<p>A判定</p>";
	}elseif(/* $point <= 79 &&  elseifなのでいらない*/$point >= 70){
		print "<p>B判定</p>";
	}elseif(/* $point <= 69 &&  elseifなのでいらない*/$point >= 60){
		print "<p>C判定</p>";
	}else{
		print "D判定";
	}
?>




</body>
</html>