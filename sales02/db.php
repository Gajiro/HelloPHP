<?php
class DB{
  //MySQL�Ƃ���������N���X
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
    //SQL�����s����֐�
    try{
      if(!$pdo = $this->Connectdb())return false;
      $stmt = $pdo->prepare($sql);
      $stmt->execute($array);  
      return $stmt;   //�߂�l��PDOStatement�̃C���X�^���X
    }catch(Exception $e){
      return false;
    }
  }
}
?>