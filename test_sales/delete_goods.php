<?php
$USER='i505';
$PW='May.2015';
$dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
try{
	$pdo = new PDO($dnsinfo, $USER, $PW);
	$sql = "DELETE FROM goods WHERE GoodsID=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array('1999'));
	$sql = "SELECT * FROM goods";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(null);
	$res ='<table border="1">';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$res .= "<tr><td>" . 
				$row['GoodsID'] . "</td><td>" .
				$row['GoodsName'] ."</td><td>" .
				$row['Price'] ."</td></tr>";
		}	
	$res .= "</table>";
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
<?php 
	echo $res;
 ?>
 </body>
</html>