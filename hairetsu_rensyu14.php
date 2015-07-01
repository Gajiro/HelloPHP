<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">

<tr>
    <th>番号</th>
    <th>点数</th>

</tr>

<?php

$data = array(
		array(0, 80),
		array(1, 60),
		array(2, 92),
		array(3, 22),
		array(4, 50),
		);
$lowScore = 100;
$highScore = 0;
$nanaju = 0;
for($i = 0 ;$i < count($data) ;$i++){
	print "<tr>";
	for($j = 0 ;$j < count($data[0]) ;$j++){
		print  "<td>" . $data[$i][$j] . "</td>";
		if($data[1] >= 70){
			$nanaju++;
		};
		if($data[1] > $highScore){
			$highScore = $data[1];
			};
		if($data[1] < $lowScore){
			$lowScore = $data[1];
			};
	}
print "</tr>";
};


?>

</table>

<?php 
print "最高点：" . $highScore . "点<br>";
print "最低点：" . $lowScore . "点<br>";
print "70点以上：" . $nanaju . "名";

?>
</body>
</html>