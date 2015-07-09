<?php
require_once('db.php');
$db = new DB();

if(isset($_POST['insert'])){
	$sql ="INSERT INTO goods VALUES(?,?,?)";
	$array = array($_POST['GoodsID'],$_POST['GoodsName'],$_POST['Price']);
	$db->executeSQL($sql,$array);
}

$sql ="SELECT * FROM goods";
$res = $db->executeSQL($sql,null);

$recordlist ='<table border="1">';
while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$recordlist .= "<tr><td>" .$row['GoodsID'] ."</td>";
		$recordlist .= "<td>" .$row['GoodsName'] ."</td>";
		$recordlist .= "<td>" .$row['Price'] ."</td></tr>";
}

$recordlist .= "</table>";


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>

<h1>goodsマスターテーブル</h1>
<form action="" method="post">
<label>GoodsID<input type="text" name="GoodsID" size="8" required></label>
<label>GoodsName<input type="text" name="GoodsName" size="30" required></label>
<label>Price<input type="text" name="Price" size="8" required></label>
<input type="submit" name="insert" value=" 登録 ">
</form>

<?php echo $recordlist ;?>

</body>
</html>