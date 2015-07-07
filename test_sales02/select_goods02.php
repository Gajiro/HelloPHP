<?php
$res ="";
$USER='i505';
$PW='May.2015';
$dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
$pdo = new PDO($dnsinfo, $USER, $PW);

		
$sql = "SELECT GoodsID, GoodsName FROM goods";
$stmt = $pdo->prepare($sql);
$stmt->execute(null);
$selectTag = "<select name='GoodsID'>";
$selectTag .= "<option value=''>選択してください</option>";

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$selectTag .= "<option value=" .$row['GoodsID'] .">" .$row['GoodsName'] ."</option>";
	}
$selectTag .= "</select>";


if(isset($_POST['select'])){
try{
	$sql = "SELECT * FROM goods WHERE GoodsID=?";
	$stmt = $pdo->prepare($sql);
	$array = array($_POST['GoodsID']);
	$stmt->execute($array);
	$res = '<table border="1"><tr><th>GoodsID</th><th>GoodsName</th><th>Price</th></tr>';
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		$res .= "<tr><td>" .$row['GoodsID'] ."</td><td>" .$row['GoodsName'] ."</td><td>" .$row['Price'] ."</td></tr>";
	}
		$res .= "</table>";

}catch(Exception $e){
	$res = $e->getMessage();
	
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売り上げ管理システム</title>
</head>

<body>
<h1>商品マスタの選択</h1>
<form action="" method="post">
<label>GoodsID<?php echo $selectTag;?></label>
<input type="submit" name="select" value=" 表示 ">
</form>

<?php echo $res ;?>
</body>
</html>