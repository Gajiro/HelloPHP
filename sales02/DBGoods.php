<?php
require_once('db.php');
class DBGoods extends DB{

	public function SelectGoodsAll(){
		$sql = "SELECT * FROM goods";
		$res = parent::executeSQL($sql,null);
		$data = "<table class ='recordlist' id='goodsTable'>";
		$data .= "<tr><th>ID</th><th>商品名</th><th>単価</th><th></th><th></th><th></th></tr>";
		foreach($rows = $res->fetchAll(PDO::FETCH_NUM) as $row){
			$data .= "<tr>";
			for($i=0;$i<count($row);$i++){
				$data .="<td>" . $row[$i] . "</td>";
			}
			
			$data .= <<<eof
			<td><form method='post' action=''>
			<input type='hidden' name='id' value='{$row[0]}'>
			<input type='submit' name='update' value='更新'>
			</form></td>
			eof;
			
			$data .= <<<eof
			<td><form method='post' action=''>
			<input type='hidden' name='id' value='{$row[0]}'>
			<input type='submit' name='delete' value='削除'	onClick='return CheckDelete()'>
			</form></td>
			eof;
			
			$data .="</tr>";
			}
			$data .="</table>";
			return $data;
			
		}

	public function InsertGoods(){
		$sql ="INSERT INTO goods VALUES(?,?,?)";
		$array = array($_POST['GoodsID'],$_POST['GoodsName'],$_POST['Price']);
		parent::executeSQL($sql,$array);
			
	}

	
	public function UpdateGoods(){
		$sql ="UPDATE goods SET GoodsName=?, Price=? WHERE GoodsID=?";
		$array = array($_POST['GoodsName'],$_POST['Price'],$_POST['GoodsID']);
		parent::executeSQL($sql,$array);
			
	}
	
	public function GoodsNameForUpdate($GooodsID){
		return $this->FieldValueForUpdate($GoodsID, "GoodsName");			
	}
			
	public function PriceForUpdate($GooodsID){
		return $this->FieldValueForUpdate($GoodsID, "Price");			
	}
			
	
	private function FieldValueForUpdate($GooodsID, $field){
		$sql = "SELECT $field FROM goods WHERE GoodsID=?";
		$array = array(GoodsID);
		$res = parent::executeSQL($sql,$array);
		$rows = $res->fetch(PDO::FETCH_NUM);
		return $rows[0];
		$data = "<table class ='recordlist' id='goodsTable'>";
	}


		
	public function DeleteGoods($GoodsID){
		$sql ="DELETE FROM goods WHERE GoodsID=?";
		$array = array(GoodsID);
		parent::executeSQL($sql,$array);
			
	}
	
}


?>