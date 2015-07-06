<?php
$USER= 'root';
$PW= 'daidai';
$dnsinfo= "mysql:dbname=salesmanagement;host=localhost;charset=utf8";
try{
	$pdo = new PDO($dnsinfo,$USER,$PW);
	$res = "接続しました";
}catch(PDOException $e){
	$res = $e->getMessage();
	
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
<h1>PHPでMySQLに接続する</h1>
<?php echo $res; ?>
</body>
</html>