<?php
require_once('DBGoods.php');
$dbGoods = new DBGoods();
if(isset($_POST['insert'])){
	$dbGoods->InsertGoods();
}

$recordlist = $dbGoods->SelectGoodsAll();


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