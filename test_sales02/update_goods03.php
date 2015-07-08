<?php

$res ="";
$USER='root';
$PW='daidai';

/*$USER='i505';
$PW='May.2015';
$dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";*/

$dnsinfo = "mysql:dbname=salesmanagement;host=localhost;charset=utf8";
$pdo = new PDO($dnsinfo, $USER, $PW);

if(isset($_POST['submit'])){
	try{
			$sql ="UPDATE goods SET GoodsName=? ,Price=? WHERE GoodsID=?";
			$stmt = $pdo->prepare($sql);
			$array = array($_POST['GoodsName'],$_POST['Price'],$_POST['GoodsID']);
			$stmt->execute($array);
		}catch(Exception $e){
			$res = $e->getMessage();
			}
	
	}

if(isset($_POST['update'])){
	try{
		$sql = "SELECT * FROM goods WHERE GoodsID=?";
		$stmt = $pdo->prepare($sql);
		$array = array($_POST['id']);
		$stmt->execute($array);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$GoodsID = $row['GoodsID'];
		$GoodsName = $row['GoodsName'];
		$Price = $row['Price'];
		}catch(Exception $e){
			$res = $e->getMessage();
			}
	}

try{
	$sql ="SELECT * FROM goods";
	$stmt = $pdo->prepare($sql);
	$array = null;
	$stmt->execute($array);
	$res ='<table border="1">';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= "<tr><td>" .$row['GoodsID'] ."</td><td>" .$row['GoodsName'] ."</td><td>" .$row['Price'] ."</td>";
	
	$res .= <<<eof
	<td><form method='post' action=''>
	<input type='hidden' name='id' value='{$row['GoodsID']}'>
	<input type='submit' name='update' value='更新'>
	</form></td>
eof;
$res .= "</tr>";

	}
$res .= "</table>";

		}catch(Exception $e){
			$res .= $e->getMessage();
			
			}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売り上げ管理システム</title>
</head>

<body>
<h1>商品マスタの更新</h1>
<?php if(isset($_POST['update'])){
	 ?>
<form action="" method="post">
GoodsID：<?php echo $GoodsID; ?>
<input type="hidden" name="GoodsID" value='<?php echo $GoodsID ;?>' required>
<label>GoodsName<input type="text" name="GoodsName" size="30" value='<?php echo $GoodsName ;?>' required></label>
<label>Price<input type="text" name="Price" size="10" value='<?php echo $Price ;?>'required></label>
<input type="submit" name="submit" value="更新">
</form>
<?php } ?>
<?php echo $res ;?>
</body>
</html>