<?php
Class Conexao{
	public $conec;

	function_construct(){
		try{
			$this->conec = new PDO("mysql:hostname=localhost;dbname=banco","root","");

		}catch(Exception $e){
			echo "Nao foi home".$e;

		}
	}
	function Conect(){
		return $this->conec;

	}
}
?>