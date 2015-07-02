<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<?php
$errors ="";

if(empty($_POST["name"]) == true){
	$errors[] = "「ユーザ名に何も入力されていません」";
}

if(empty($_POST["pass"]) == true){
	$errors[] = "「パスワードに何も入力されていません」";
}

if(empty($_POST["passcom"]) == true){
	$errors[] = "「パスワード確認欄に何も入力されていません」";
}
if(strlen($_POST["pass"]) < 4 || strlen($_POST["pass"]) > 8){
	$errors[] = "「パスワードは4文字以上8文字以下にしてください」";
}
if($_POST["pass"] != $_POST["passcom"]){
	$errors[] = "「パスワード欄とパスワード確認欄の値が違います」";
}


if($errors){
	foreach($errors as $val){
	print $val . "<br>";
	}
}else{
	print  "以下の内容で登録されました";
	print "ユーザ名：" . $_POST["name"] . "<br>";
	print "パスワード：" . $_POST["pass"] . "<br>";
}



?>



</body>
</html>