<?php
require(DBSalesInfo.php);
$slip ="";
$SalesDate = new DateTime('NOW');
$SalesDate = $SalesDate->format('Y-m-d');
$CustomerID = "";
$dbSalesInfo =new DbSalesInfo();
$GoodsList = $dbSalesInfo->ListGoods();
if(isset($_POST['submit'])){
	$SalesDate = $_POST['SalesDate'];
	$CustomerID = $_POST['CustomerID'];;	
	$dbSalesInfo =  InsertSalesinfo();
	$slip = $dbSalesInfo->SelectSalesinfo($SalesDate, $CustomerID);
	$CustomerList = $dbSalesInfo->ListCustomerWithSelected($CustomerID);
}else{
	$CustomerList = $dbSalesInfo->ListCustomer();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売り上げ管理システム</title>
<link rel="styleseet" type="text/css" href="style.css">
</head>
<body>

<div id="menu">
<ul>
<li><a href="salesinfo.php">売上情報</a></li>
<li><a href="salesinfoEntry.php">伝票の新規作成</a></li>
<li><a href="bill.php">請求書</a></li>
<li><a href="customer.php">顧客マスタ</a></li>
<li><a href="goods.php">商品マスタ</a></li>
</ul>
</div>

<h1>売上伝票の新規作成</h1>
<div id="entry">
<form action="" method="post">
<label>日付<input type="date" name="SalesDate" value="<?php echo $SalesDate;?>" required></label>
<label>顧客名<?php echo $CustomerList;?>></label>
<label>商品名<?php echo $GoodsList;?>></label>
<label>数量<input type="number" min="0" id="Quantity" name="Quantity" required></label>
<input type="submit" name="submit" value=" 登録 ">
</form>
</div>

<div class="ClearFloat"></div>
<?php echo $slip; ?>

</body>
</html>