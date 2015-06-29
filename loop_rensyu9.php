<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>


<body>
<table border="1">
<tr bgcolor="yellow"><td>カウント</td><td>合計</td></tr>
<?php
$j = 0;
for( $i = 1; $i <= 10; $i++){
	if($i % 2 ==0){
		echo '<tr bgcolor="#cfcfcf"><td>' . $i . '</td>';
			}else{
			echo '<tr bgcolor="#fcfcfc"><td>' . $i . '</td>';
			}
	$j += $i;
	echo "<td>" . $j . "</td></tr>";
	}

?>
</table>
</body>
</html>