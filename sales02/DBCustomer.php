<?php
require_once('db.php');
class DBCusmer extends DB{
	public function UpdateCustomer(){
		$sql="UPDATE customer SET CustomerName=?, TEL=?, WHERE CustomerID=?";
		
		$array =array($_POST['CustomerName'],$_POST['TEl'],$_POST['Email'],$_POST['CustomerID']);
		parent::executeSQL($sql,$array);
}
	
	public function CustomerNameForUpdate($CustomerID){
		return $this->FieldValueForUpdate($CustomerID, "CustomerName");			
	}	
	
	public function TELForUpdate($CustomerID){
		return $this->FieldValueForUpdate($CustomerID, "TEL");			
	}	
	
	public function EmailForUpdate($CustomerID){
		return $this->FieldValueForUpdate($CustomerID, "Email");			
	}	
	
	public function CustomerNameForUpdate($CustomerID,$field){
		$sql = "SELECT $field FROM customer WHERE CustomerID=?";
		$array = array(CustomerID);
		$res = parent::executeSQL($sql,$array);
		$rows = $res->fetch(PDO::FETCH_NUM);
		return $rows[0];
	}

		
	public function DeleteCustomer($CustomerID){
		$sql ="DELETE FROM customer WHERE $CustomerID=?";
		$array = array($CustomerID);
		parent::executeSQL($sql,$array);
			
	}
	
	
				
	public function InsertCustomer(){
		$sql ="INSERT INTO customer VALUES(?,?,?)";
		$array = array($_POST['CustomerID'],$_POST['CustomerName'],$_POST['TEL'],$_POST['Email']);
		parent::executeSQL($sql,$array);
	}
	

	public function selectCustomerAll(){
		$sql = "SELECT * FROM customer";
		$res = parent::executeSQL($sql,null);
		$data = "<table class ='recordlist>";
		$data .= "<tr><th>ID</th><th>顧客名</th><th>TEL</th><th>Email</th><th></th><th></th></tr>";
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

$data .=<<<eof
	<td><form method='post' action=''>
	<input type='hidden' name='id' id='$deleteID' value='$row[0]'>
	<input type='submit' name='delete' id='$deleteID' value='$row[0]' onClick='return CheckDelete()'>	
	</form></td>
eof;

	$data .="</tr>";
		}
		
		$data .= "</table>";
		return $data;
		}
	
	}

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>
</head>

<body>
</body>
</html>