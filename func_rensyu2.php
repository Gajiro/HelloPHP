<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>



<?php


function getStats($arr){
	$sum = array_sum($arr);
	$ave = $sum / count($arr);
	return array($sum, $ave);
}
$kokugo = array(52, 69, 74, 95,41);
$result = getStats($kokugo);
print "合計点:" . $result[0] . "<BR>";
print "平均点:" . $result[1];


/*
function sumTest($score){
	$sum = 0;
	foreach($score as $v){
		$sum += $v;
		};
	print "合計点：" . $sum;
	print "平均点：" . ($sum / count($score));	
		
	};

$kokugo = array(52, 69 ,74, 95, 41);
sumTest($kokugo);
echo "<br>";
$sansu = array(58, 66, 85, 100, 70);
sumTest($sansu);

*/
?>


</body>
</html>