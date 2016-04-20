<?php
require_once("../DAO/Base.class.php");

class Configuracao extends Base{
	
	public function __construct($campo=array()){
		parent :: __construct();
		$this->tabela = "Configuracao";
		if(sizeof($campo)<=0)
		{
			$this->campos_valores=array("preenCartao"=>NULL, "inicioCartao"=>NULL, "anoExer"=>NULL);
		}
		else
		{
			$this->campos_valores = $campo;
		}
		$this->campopk = "id";
	}
	
	// ATRIBUTOS DA TABELA COLABORADOR
	public $preenCartao;
	public $inicioCartao;
	public $anoExer;
	
	public function ListarConfiguracao(){
	
		$sql = "SELECT * FROM ".$this->tabela;

		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$obj = new Configuracao();
			
			$obj->preenCartao = $row['preenCartao'];
			$obj->inicioCartao = $row['inicioCartao'];
			$obj->anoExer = $row['anoExer'];
						
			$retorno[] = $obj;
		}
		return $retorno;
	}//FIM DO MÉTODO LISTAR
}//FIM DA CLASS CONFIGURACAO
?>