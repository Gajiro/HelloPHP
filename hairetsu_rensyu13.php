<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<table border="1">

<tr>
    <th>都市名</th>
    <th>最高気温</th>
    <th>最低気温</th>
</tr>

<?php

$data = array(
		array("東京"  , 32, 25),
		array("名古屋", 28, 21),
		array("大阪"  , 27, 20),
		array("京都"  , 26, 19),
		array("福岡"  , 27, 22),
		);


foreach($data as $city){
	print "<tr>";
	foreach($city as $val){
		print  "<td>" . $val . "</td>";
		
		}
print "</tr>";
};

?>

</table>
</body>
</html>