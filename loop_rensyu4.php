<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<select name="selectBoxName">
<?php
for ($num = 0;$num <= 23;$num++){
	if($num >= 15){
		echo '<option value="' . $num . '">' . $num . '</option>\n';
		}
	}
?>
</select>
時
</body>
</html>