<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php

$lang_test = array('鈴木' => 92, '佐藤' => 74, '中村' => 42, '三浦' => 65);
$sum = 0;

foreach($lang_test as $name => $point){
	print "氏名：" . $name . "　点数：" . $point . "<br>";
	$sum += $point;
}




/*foreach($lang_test as $point){
	$sum += $point;
}*/

//$ave = $sum / count($lang_test);

print "合計点：" . $sum . "<br>";
//print "平均点：" . floor($sum / count($lang_test) * 10) / 10 . "<br>";

printf ("平均点：%.1f" ,$sum / count($lang_test)); //←の記述の方ががシンプルでいい


?>
</body>
</html>