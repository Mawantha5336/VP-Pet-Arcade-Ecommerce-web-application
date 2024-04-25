<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "MawaNtha5@5336", "ecom");
		return $this->con;
	}
}

?>