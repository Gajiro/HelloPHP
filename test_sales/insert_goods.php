<?php
$USER='i505';
$PW='May.2015';
$dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
try{
	$pdo = new PDO($dnsinfo, $USER, $PW);
	$sql = "INSERT INTO goods VALUES ('1999','神秘的な鉛筆','300')";
	$stmt = $pdo->prepare($sql);
	$res = $stmt->execute(null);
	
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
<?php //echo $res;
	if($res == TRUE){
		echo "OK";
	}else if($res == FALSE){
		echo "NG";
	}else{
		echo $res;
	}
 ?>
</body>
</html>