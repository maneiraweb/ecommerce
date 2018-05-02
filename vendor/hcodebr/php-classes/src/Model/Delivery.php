<?php

namespace Hcode\Model;
use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;

class Delivery extends Model{

	public function listAll(){
		$sql = new Sql();

		return  $sql->select("SELECT  e.UF_NOME, p.sl_nome
			FROM estado e
			INNER JOIN pais p ON p.SL_ID = e.UF_SL
			WHERE p.SL_ID = 1 ORDER BY e.UF_NOME ASC 
			");		
		/*var_dump($sql);
		exit();
		*/
	}
	public function pais(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM pais ORDER BY SL_NOME ASC ");
	}
	
}
?>



