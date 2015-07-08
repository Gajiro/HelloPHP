<?php
require_once('db.php');
$db = new DB();
$sql ="SELECT * FROM goods";
$res = $db->executeSQL($sql,null);

$recordlist ="<table>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
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
<?php echo $recordlist ;?>

</body>
</html>