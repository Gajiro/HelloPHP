<?php
require_once('EvenOdd.php');
$res ="";
if(isset($_POST['submit'])){
	$evenOdd= new EvenOdd();
	$res = $evenOdd->JudgeEvenOdd($_POST['num']);	
	}

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<h1>Classの確認</h1>

<form method="post" action="">
<label>数字を入力<input type="text" name="num" required></label>
<input type="submit" value="  判定  " name="submit" />
</form>
<?php echo $res; ?>
</body>
</html>