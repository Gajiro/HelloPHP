<?php 
require_once('db.php');
class DBSalesInfo extends DB{

	public function ListGoods(){
		$sql = "SELECT GoodsdID,GoodsName,Price FROM goods ORDER BY GoodsID";
		$res = parent::executeSQL($sql,null);
		$list ="<select name='GoodsID'>";
		$list .="<option value='-99'>--選択してください--</option>"
		foreach($rows=$res->fetchAll(PDO::FETCH_ASSOC) as $row){
			$list .="<option value='{$row['GoodsID']}'>{$row['GoodsName']}</option>";
		}
	$list .="</select>"
	return $list;
}

public function InterSalesinfo(){
	if($_POST['CustomerID']>0 && $_POST[''GoodsID]>0){
		$sql ="INSERT INTO salesinfo VALUES(?.?.?.?.?)";
		$array = array(null, $_POST['SalesDate'], $_POST['CustomerID'], $_POST['GoodsID'], $_POST['Quantity']);
		parent::executeSQL($sql,$array);
		}
}

public function getSalesinfo($salesDate, $customerID){
	$sql = <<<eof
	SELECT salesinfo.Quantity,goods.Price*salesinfo.Quantity
	FROM salesinfo INNER JOIN customer ON salesinfo.CustomerID=customer.CustomerID
	INNER JOIN goods ON salesinfo.GoodsID=goods.GoodsID
	WHERE salesinfo.SalesDate=? and salesinfo.CustomerID=?
	ORDER BY salesinfo.id
eof;

	$array =array($salesDate, $customerID);
	$res = parent::executeSQL($sql,$array);
	return $res;
}

public function SelectSalesinfo($salesDate, $customerID){
	$res = $this->getSalesinfo($salesDate, $customerID);
	$data = "<table id='entryslip'>";
	$data .= "<tr><th>ID</th><th>日付</th><th>顧客名</th><th>商品名</th><th>単価</th><th>数量</th><th>金額</th></tr>";
	foreach($rows = $res->fetchAll(PDO::FETCH_NUM) as $row){
		$data .= "<tr>";
		for($i=0;$i<count($row);$i++){
			$data .="<td>" . $row[$i] . "</td>";
		}
		$data .= "</tr>";
	}
	$data .= "</table>";
	return $data;
}
	
public function ListCustomerWithSelected($CustomerID){
	$sql = "SELECT CustomerID,CustomerName FROM customer ORDER BY CustomerID";
	$res = parent::executeSQL($sql,null);
	$list ="<select name='CustomerID'>";
	$list .="<option value='-99'>--選択してください--</option>"
	foreach($rows=$res->fetchAll(PDO::FETCH_ASSOC) as $row){
		$selected = ($row[0] == $CustomerID)?'selected':'';
		$list .="<option value='{$row[0]}' {$selected}>{$row[1]}</option>";
	}
	$list .="</select>"
	return $list;
}

public function ListCustomer(){
	$sql = "SELECT CustomerID,CustomerName FROM customer ORDER BY CustomerID";
	$res = parent::executeSQL($sql,null);
	$list ="<select name='CustomerID'>";
	$list .="<option value='-99'>--選択してください--</option>"
	foreach($rows=$res->fetchAll(PDO::FETCH_ASSOC) as $row){
		$list .="<option value='{$row[0]}'>{$row[1]}</option>";
	}
	$list .="</select>"
	return $list;
}
	
public function Deletedetail(){
		$sql ="DELETE FROM salesinfo WHERE ID=?";
		$array = array($_POST['id']);
		parent::executeSQL($sql,$array);
}	
	
public function UpdateDetail(){
		$sql ="UPDATE salesinfo SET SalesDat=?, CustomerID=?, Quantity=?, WHERE id=?";
		$array = array($_POST['SalesDate'],$_POST['CustomerID'],$_POST['GoodsID'],$_POST['Quantity'],$_POST['id']);
		parent::executeSQL($sql,$array);
}	
	
private function FieldValueForUpdate($id, $field){
		$sql = "SELECT {$field} FROM salesinfo WHERE id=?";
		$array = array($id);
		$res = parent::executeSQL($sql,$array);
		$rows = $res->fetch(PDO::FETCH_NUM);
		return $rows[0];
}
	
public function getCustomerID($id){
	return $this->FieldValueForUpdate($id, "SalesDate");
}

public function getCustomerID($id){
	return $this->FieldValueForUpdate($id, "CustomerID");
}

public function getCustomerID($id){
	return $this->FieldValueForUpdate($id, "GoodsID");
}

public function getCustomerID($id){
	return $this->FieldValueForUpdate($id, "Quantity");
}

public function ListGoodsWithSelected($GoodsID){
	$sql = "SELECT GoodsID,GoodsName FROM goods ORDER BY GoodsID";
	$res = parent::executeSQL($sql,null);
	$list ="<select name='GoodsID'>";
	$list .="<option value='-99'>--選択してください--</option>"
	foreach($rows=$res->fetchAll(PDO::FETCH_ASSOC) as $row){
		$selected = ($row[0] == $GoodsID)?'selected':'';
		$list .="<option value='{$row['GoodsID']}' {$selected}>{$row['GoodsName']}</option>";
	}
	$list .="</select>"
	return $list;
}

public function SelectSalesinfoWithButton($salesDate, $customerID){
	$res = $this->getSalesinfo($salesDate, $customerID);
	$data = "<table>";
	$data .= "<tr><th>ID</th><th>日付</th><th>顧客名</th><th>商品名</th><th>単価</th><th>数量</th><th>金額</th><th></th><th></th></tr>";
	foreach($rows = $res->fetchAll(PDO::FETCH_NUM) as $row){
		$data .= "<tr>";
		for($i=0;$i<count($row);$i++){
			$data .="<td>" . $row[$i] . "</td>";
		}
		$data .= <<<eof
		<td><form method='post' action=''>
		<input type='hidden' name='id' value='{$row[0]}'>
		<input type='submit' name='updatedtail' value='更新'></form></td>
		<td><form method='post' action=''>
		<input type='hidden' name='id' value='$row[0]'>
		<input type='submit' name='deletedtail' value='削除' onClick='return CheckDelete()'></form></td></tr>
eof;
		$data .= "</tr>";
	}
	$data .= "</table>";
	return $data;
}

public function TotalAmount($SalesDate, $CustomerID){
	$sql = <<<eof
	SELECT sum (salesinfo.Quantity*goods.Price)
	FROM salesinfo INNER JOIN goods ON salesinfo.GoodsID = goods.GoodsID
	WHERE salesinfo.SalesDate = ? AND salesinfo.CustomerID = ?
eof;
	$array = array($SalesDate, $CustomerID);
	$res = parent::executeSQL($sql,$array);
	$rows = $res->fetch(PDO::FETCH_NUM);
	return $rows[0];
}

public function DeletedeSlip(){
		$sql ="DELETE FROM salesinfo WHERE SalesDate=? AND CustomerID=?";
		$array = array($_POST['SalesDate'],$_POST['CustomerID']);
		parent::executeSQL($sql,$array);
}	

public function SelectSlips($salesDate){
	$sql = <<<eof
	SELECT distinct salesinfo.SalesDate,salesinfo.CustomerID,customer.CustomerName
	FROM salesinfo INNER JOIN customer ON salesinfo.CustomerID = customer.CustomerID
	WHERE salesinfo.SalesDate = ?
	ORDER BY customer.CustomerID
eof;
	$array = array($salesDate);
	$res = parent::executeSQL($sql,$array);
	$data = "";
	foreach($rows = $res->fetchAll(PDO::FETCH_NUM) as $row){
		$data .= "<tr>";
		for($i=0;$i<count($row);$i++){
			$data .="<td>" . $row[$i] . "</td>";
		}
	$data .= <<<eof
		<td><form method='post' action=''>
		<input type='hidden' name='SaleDate' value='{$row[0]}'>
		<input type='hidden' name='CustomerID' value='{$row[1]}'>
		<input type='submit' name='detail' value='詳細'></form></td>
		<td><form method='post' action=''>
		<input type='hidden' name='SalesDate' value='$row[0]'>
		<input type='hidden' name='CustomerID' value='$row[1]'>
		<input type='submit' name='delete' value='削除' onClick='return CheckDelete()'></form></td></tr>
eof;
	}
	return $data;
}
}
?>