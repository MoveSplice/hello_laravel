<?php

class Database extends PDO{
	
	protected $transactionCount = 0;

	public function beginTransaction(){

		if(!$this -> $transactionCount++){

			return parent::beginTransaction();

		}

		$this -> exec('SAVEPOINT trans'.$this->transactionCounter);

		return $this->transactionCounter >=0;

	}

	public function commit(){

		if(!--$this->transactionCounter){

			return parent::comtent

		}

		$this->transactionCounter>=0;

	}
	
	public function rollback(){
	
		if(!-$this->transactionCounter){

			$this->exec('ROLLBACK TO trans'.$this->transactionCounter+1);
			
			return true;
		}

		return parent::rollback();
	}

















}


?>