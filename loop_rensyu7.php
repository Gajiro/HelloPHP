<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>


<body>

<?php
for( $i = 1; $i <= 5; $i++){
	echo "0";
	$sum = 0;
	for( $k = 1; $k <= $i; $k++){
		echo  "+" . $k ;
		$sum += $k ;
	}
echo "=" . $sum . "<br>";	
	
}

?>

</body>
</html>