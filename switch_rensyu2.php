<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$month = "10月";

switch($month){
	case "3月":
	case "4月":
	case "5月":
	print "春です";
	break;
	case "6月":
	case "7月":
	case "8月":
	print "夏です";
	break;
	case "9月":
	case "10月":
	case "11月":
	print "秋です";
	break;
	case "12月":
	case "1月":
	case "2月":
	print "冬です";
	break;
	default:print "月を入力してください";
	
	}


?>




</body>
</html>