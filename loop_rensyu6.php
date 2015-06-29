<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>


<body>

<?php

for( $i = 1; $i <= 40; $i++){
	if(($i % 3 == 0 || strstr($i, '3'))&&($i % 8 == 0 || strstr($i, '8'))){
		echo $i . "　YES! OK!<br>";
			}elseif($i % 3 == 0 || strstr($i, '3')){
			echo $i . "　YES!<br>";
				}elseif($i % 8 == 0 || strstr($i, '8')){
				echo $i . "　OK!<br>";
					}else{
					echo $i . "<br>";
						}	
	
	}
	
?>

</body>
</html>