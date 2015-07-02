<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php

if($_POST["name"] == "admin" && $_POST["pass"] == 1234){
	print "ログインOK";
};

if(($_POST["name"] != "admin" && $_POST["pass"] != "1234")){
	print "ユーザ名またはパスワードが違います<br>";
	};


if(empty($_POST["name"]) == true){
	print "「ユーザ名に何も入力されていません」<br>";
};

if(empty($_POST["pass"]) == true){
	print "「パスワードに何も入力されていません」";
};

?>



</body>
</html>