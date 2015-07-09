<?php
require_once('DBGoods.php');
$dbGoods = new DBGoods();
if(isset($_POST['submitUpdate'])){
	$dbGoods->UpdateGoods();
}

if(isset($_POST['submitUpdate'])){
	$dbGoods->UpdateGoods();
}

if(isset($_POST['update'])){
	$dbGoodsID = $_POST['id'];
	$dbGoodsName = $dbGoods->GoodsNameForUpdate($_POST['id']);	
	$Price    =  $dbGoods->PriceForUpdate($_POST['id']);
	$entryCss ="class='hideArea'";
	$updateCss = "";
}else{
	$entryCss ="";
	$updateCss = "class='hideArea'";
}


if(isset($_POST['delete'])){
	$dbGoods->DeleteGoods($_POST['id']);
}

if(isset($_POST['submitEntry'])){
	$dbGoods->InsertGoods();	
}

$data = $dbgoods->SelectGoodsAll();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>売り上げ管理システム</title>
<link rel="styleseet" type="text/css" href="style.css">
<script type="text/javascript">
function CheckDelete(){
	return confirm("削除してもよろしいですか?")
}
</script>
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

<h1>商品マスタ</h1>

<div id="entry" <?php echo $entryCss ?> >
<form action="" method="post">
<h2>新規登録</h2>
<label><span class="entrylabel">ID</span><input type="text" name="GoodsID" size="10" required></label>
<label><span class="entrylabel">商品名</span><input type="text" name="GoodsName" size="30" required></label>
<label><span class="entrylabel">単価</span><input type="text" name="Price" size="10" required></label>
<input type="submit" name="submitEntry" value=" 新規登録 ">
</form>
</div>

<div id="update" <?php echo $updateCss ;?> >
<form action="" method="post">
<h2>更新</h2>
<p>GoodsID:<?php echo $dbGoodsID ;?></p>
<input type="hidden" name="GoodsID" value='<?php echo $dbGoodsID ;?>' required>
<label><span class="entrylabel">商品名</span><input type="text" name="GoodsName" size="30" value='<?php echo $dbGoodsName ;?>' required></label>
<label><span class="entrylabel">単価</span><input type="text" name="Price" size="10" value='<?php echo $Price ;?>'required></label>
<input type="submit" name="submitUpdate" value="	更新	">
</form>
</div>

<?php echo $data; ?>

</body>
</html>
































