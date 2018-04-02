<?php

namespace Hcode\Model;
use \Hcode\DB\Sql;
use \Hcode\Model;


class Address extends Model {

	const SESSION_ERROR = "AddressError";
	
	public static function getCEP($nrcep) {
		$nrcep = str_replace("-",'', $nrcep);
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://viacep.com.br/ws/$nrcep/json/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$data = json_decode(curl_exec($ch), true);
		
		curl_close($ch);
		return $data;
	}




	public function loadFromCEP($nrcep) {
		$data = Address::getCEP($nrcep);
		
		if (isset($data['logradouro']) && $data['logradouro']) {
		
			$this->setdesaddress($data['logradouro']);
			$this->setdescomplement($data['complemento']);
			$this->setdesdistrict($data['bairro']);
			$this->setdescity($data["localidade"]);
			$this->setdesstate($data['uf']);
			$this->setdescountry('Brasil');
			$this->setdeszipcode($nrcep);

		}

	}

	public function save() {
		$sql = new Sql();
		$results = $sql->select("CALL sp_addresses_save(:idaddress, :idperson, :desaddress, :desnumber, :descomplement, :descity, :desstate, :descountry, :deszipcode, :desdistrict)", [
			':idaddress'=>$this->getidaddress(),
			':idperson'=>$this->getidperson(),
			':desaddress'=>$this->getdesaddress(),
			':desnumber'=>$this->getdesnumber(),
			':descomplement'=>$this->getdescomplement(),
			':descity'=>$this->getdescity(),
			':desstate'=>$this->getdesstate(),
			':descountry'=>$this->getdescountry(),
			':deszipcode'=>$this->getdeszipcode(),
			':desdistrict'=>$this->getdesdistrict()
		]);

		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}

	public static function setMsgError($msg) {
		$_SESSION[Address::SESSION_ERROR] = $msg;
	}
	public static function getMsgError() {
		$msg = (isset($_SESSION[Address::SESSION_ERROR])) ? $_SESSION[Address::SESSION_ERROR] : "";
		Address::clearMsgError();
		return $msg;
	}
	public static function clearMsgError() {
		$_SESSION[Address::SESSION_ERROR] = NULL;
	}
}

class FretePrazo{

	public $dados;

	public function __construct($cdservico, $ceporigem, $cepdestino, $peso, $comprimento, $altura, $largura, $diametro, $formato = 1, $maopropria = 'N', $valordeclarado = 0, $avisorecebimento = 'N', $tiporetorno = 'xml', $indicacalculo = 3){

		$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=".$ceporigem."&sCepDestino=".$cepdestino."&nVlPeso=".$peso."&nCdFormato=".$formato."&nVlComprimento=".$comprimento."&nVlAltura=".$altura."&nVlLargura=".$largura."&sCdMaoPropria=".$maopropria."&nVlValorDeclarado=".$valordeclarado."&sCdAvisoRecebimento=".$avisorecebimento."&nCdServico=".$cdservico."&nVlDiametro=".$diametro."&StrRetorno=".$tiporetorno."&nIndicaCalculo=".$indicacalculo."";

		$this->dados = simplexml_load_string(file_get_contents($url));
	}
}
	$frete = new FretePrazo("04510", "08161310","03381140", "0.5", "20", "15", "15", "15");
	$freteSedex = new FretePrazo("40010", "08161310","03381140", "0.5", "20", "15", "15", "15");

?>