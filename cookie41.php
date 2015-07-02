<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>



<?php

function callName($name ="ゲスト"){
	if ($name == null){
		print"いらっしゃいませ、ゲストさん";
	}else{
	print "いらっしゃいませ、" . $name . "さん";
	};
	};

$AAA ="鈴木";
callName($AAA);
//callName();
$VVV ="";
callName($VVV);

$BBB ="佐藤";
callName($BBB);
callName();
callName("Sato");

?>


</body>
</html>