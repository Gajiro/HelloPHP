<?php
require_once('kDBBill.php');
$startDate = "";
$endDate = "";
$TagCustomer = "";
$customerName = "";
$detail = "";
$total = "";
$dbBill = new DBBill();

if(isset($_POST['submit'])){
	$startDate = $_POST['startDate'];
	$endDate = $_POST['endDate'];
	$TagCustomer = $dbBill->SelectTagOfCustomers($startDate, $endDate);
	if(isset($_POST['CustomerID'])){
		$customerName = $dbBill->getCustomerName($_POST['CustomerID']);
		$total = $dbBill->TotalAmount($startDate, $endDate, $_POST['CustomerID']);
		$total = ($total==null)?"" :"合計金額" .number_format($total) ."円";
		$detail =  $dbBill->SelectSalesinfo($startDate, $endDate, $_POST['CustomerID']);;
		}
	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売上管理システム</title>
<link rel="stylesheet" type="text/css" href="../旧/style.css">
</head>

<body>
<div id="menu">
<ul>
<li><a href="ksalesinfo.php">売上情報</a></li>
<li><a href="ksalesinfoEntry.php">伝票の新規作成</a></li>
<li><a href="k0bill.php">請求書</a></li>
<li><a href="kcustomer.php">顧客マスタ</a></li>
<li><a href="kgoods.php">商品マスタ</a></li>
</ul>
</div>

<h1>請求情報</h1>
<div id="search">
<form action="" method="post">
<label>請求期間<input type="date" name="stratDate" id="startDate" value="<?php echo $startDate;?>" required></label>
<label>～<input type="date" name="endDate" id="endDate" value="<?php echo $endDate;?>" required></label>
<?php echo $TagCustomer; ?>
<input type="submit" name="submit" value="検索">
</form>
</div>

<div id="detail">
<p><?php echo $customerName;?></p>
<div id="totalAmount">
<?php echo $total ;?>
</div>
<?php echo $detail ;?>
</div>

</body>
</html>