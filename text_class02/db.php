<?php
class DB{
	private  $USER='i505';
	private  $PW='May.2015';
	private  $dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
		
		
	private function Connectdb(){
		try{
			$pdo = new PDO($this->dns,$this->USER,$this->PW);
			return $pdo;			
		}catch(Exception $e){
			return false;
			}
		}
	
	public function executeSQL($sql, $array){
		try{
			if(!$pdo = $this->ConnectDB()){
				return false;
				
				}
				$stmt = $pdo->prepare($sql);
				$stmt->execute($array);
				return $stmt;
			}catch(Exception $e){
				return false;
				
				}
	
	}
}


?>