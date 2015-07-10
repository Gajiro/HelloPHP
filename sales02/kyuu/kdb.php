<?php

class DB{
  //MySQLとやり取りをするクラス
	private  $USER='i505';
	private  $PW='May.2015';
	private  $dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
  
  private function Connectdb(){
    try{
      $pdo = new PDO($this->dnsinfo,$this->USER,$this->PW);
      return $pdo;
    }catch(Exception $e){
      return false;
    }
  }
  
  protected function executeSQL($sql, $array){
    //SQLを実行する関数
    try{
      if(!$pdo = $this->Connectdb())return false;
      $stmt = $pdo->prepare($sql);
      $stmt->execute($array);  
      return $stmt;   //戻り値はPDOStatementのインスタンス
    }catch(Exception $e){
      return false;
    }
  }
}

/*
class DB{
	private  $USER='i505';
	private  $PW='May.2015';
	private  $dnsinfo = "mysql:dbname=i505;host=sv1;charset=utf8";
		
		
	private function Connectdb(){
		try{
			$pdo = new PDO($this->dnsinfo,$this->USER,$this->PW);
			return $pdo;			
		}catch(Exception $e){
			return false;
			}
		}
	
	protected function executeSQL($sql, $array){
		try{
			if(!$pdo = $this->Connectdb())
				return false;
				$stmt = $pdo->prepare($sql);
				$stmt->execute($array);
				return $stmt;
			}catch(Exception $e){
				return false;
				
				}
	
	}
}
*/

?>