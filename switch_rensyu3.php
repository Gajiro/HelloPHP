<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$stock = 2;

switch($stock){
	case 0:
		print "在庫がありません";
		break;
	//case $stock <= 3:		←見づらいのでやめること
	case 1: //caseは列挙型なので全て書き出した方が見やすい
	case 2:
	case 3:	
		print "在庫がわずかです";
		break;
	default:
		print "在庫がございます";
	}


?>

</body>
</html>