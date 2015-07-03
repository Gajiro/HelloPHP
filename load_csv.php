<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>
<body>



<?php
$aaa = 0;
$bbb = 0;
$ccc = 0;

$fp = fopen("sales.csv" , "r");
while(!feof($fp)){
  $str = fgetcsv($fp); //CSVファイルから1行分データを取り出す
  

  	if($str[0] == "A"){
		$aaa += $str[1];
	}
	if($str[0] == "B"){
		$bbb += $str[1];
	}
	if($str[0] == "C"){
		$ccc += $str[1];
  }
 
}
fclose($fp);
print "商品A合計：" . $aaa . "<br>";
print "商品B合計：" . $bbb . "<br>";
print "商品C合計：" . $ccc . "<br>";

?>


</body>



</html>