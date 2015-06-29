<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<?php
$guest001 = "男";
$guest002 = "女";

switch($guest001 . $guest002){
	case ($guest001=="女"&&$guest002=="女"):
	case ($guest001=="男"&&$guest002=="女"):
	case ($guest001=="女"&&$guest002=="男"):
	print "<p>入場できます</p>";
	break;
	default: print "<p>入場できません</p>";
		}

?>




</body>
</html>