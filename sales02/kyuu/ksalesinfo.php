<?PHP



require(DBSalesInfo.php);
$slipDetail ="";
$total ="";
$SalesDate = new DateTime('NOW');
$SalesDate = $SalesDate->format('Y-m-d');
$dbSalesInfo =new DbSalesInfo();
if(isset($_POST['SalesDate'])){
	$SalesDate = $_POST['SalesDate'];
}

if(isset($_POST['prev'])){
	$SalesDate = new DateTime($_POST['SalesDate']);
	$SalesDate->sub(new DateInterval('P1D'));
	$SalesDate = $SalesDate ->format("Y-m-d");
}

if(isset($_POST['next'])){
	$SalesDate = new DateTime($_POST['SalesDate']);
	$SalesDate ->add(new DateInterval('P1D'));
	$SalesDate =$SalesDate ->format("Y-m-d");
}

if(isset($_POST['deletedetail'])){
	$SalesDate =$dbSalesInfo ->getSalesDate($_POST['id']);
	$dbSalesInfo ->DeleteDetail();
}

if(isset($_POST['submit_updatedetail'])){
	$SalesDate = $_POST['SalesDate'];
	$dbSalesInfo ->UpdateDetail();
}

$updateCss = "class='hideArea'";
if(isset($_POST('updatedetail'))){
$updateCss = "";
$id = $_POST['id'];
$SalesDate = $dbSalesInfo->getSalesDate($id);
$CustomerID = $dbSalesInfo->getCustomerID($id);
$CustomerList = $dbSalesInfo->ListCustomerWithSelected($CustomerID);
$GoodsID = $dbSalesInfo->getGoodsID($id);
$GoodsList = $dbSalesInfo->ListGoodsWithSelected($GoodsID);;
$Quantity = $dbSalesInfo->getQuantity($id);
}

if(isset($_POST('detail'))){
$SalesDate = $_POST['SalesDate'];
$CustomerID = $_POST['CustomerDate'];
$slipDetail = $dbSalesInfo->SelectSalesinfoWithButton($SlaesDate,$CustomerID);
$total = $dbSalesInfo->TotalAmount($SalesDate,$CustomerID);
$total = ($total==null)?"" :"合計金額：" .number_format($total) ."円";
}

if(isset($_POST['delete'])){
	$dbSalesInfo->Deleteslip();
}

$slip = $dbSalesInfo->SelectSlip($SalesDate);
if($slips == ""){
	$slips ="<tr><td>伝票はありません</td></tr>";
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売上管理システム</title>
<link rel="stylesheet" type="text/css" href="../旧/style.css">
<script type="text/javascript">
function CheckDelete(){
	return confirm("削除してもよろしいですか?")
}
</script>
</head>

<body>
<div id="menu">
<ul>
<li><a href="ksalesinfo.php">売上情報</a></li>
<li><a href="ksalesinfoEntry.php">伝票の新規作成</a></li>
<li><a href="../旧/bill.php">請求書</a></li>
<li><a href="../旧/customer.php">顧客マスタ</a></li>
<li><a href="kgoods.php">商品マスタ</a></li>
</ul>
</div>

<h1>売上情報</h1>
<div id="search">
<form action="" method="post">
<label>日付<input type="date" name="SalesDate" id="SalesDate" value="<?php echo $SalesDate;?>" required></label>
<input type="submit" name="submit" value="   検索   ">
<input type="submit" name="prev" id="prev" value=" ← ">
<input type="submit" name="next" id="next" value=" → ">
</form>
</div>

<div id="sliplist">
<table>
<?php echo $slips;?>
</table>
</div>

<div id="update" <?php echo $updateCss ;?> >
<form action="" method="post">
<label>日付<input type="date" name="SalesDate" id="SalesDate" value="<?php echo $SalesDate;?>" required></label>
<label>顧客名<?php echo $CustomerList;?></label>
<label>商品名<?php echo $GoodsList;?></label>
<label>数量<input type="number" name="Quantity" min="0" id="Quantity" value="<?php echo $Quantity;?>" required></label>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="submit" name="submit_updatedetail" value="更新">
</form>
</div>

<div id="detail">
<?php echo $slipDetail; ?>

<div id="totalAmount">
<?php echo $total;?>
</div>

</body>
</html>