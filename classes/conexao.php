<?php
class Conexao{
	private $con;
	public $msgErro = "";
	public function conectar()
	{
		global $con;
		try 
		{
			$con = new PDO("mysql:host=localhost;dbname=db_controleDeEstoque","root","");
		} catch (PDOException $e) {
		  $msgErro = $e->getMessage();
		  echo $msgErro;
		}
		
	}
}

?>