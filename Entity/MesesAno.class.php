<?php
require_once("../DAO/Base.class.php");

class MesesAno extends Base{
	
	public function __construct($campo=array())
	{
		parent :: __construct();
		$this->tabela = "MesesAno";
		if(sizeof($campo)<=0)
		{
			$this->campos_valores=array("numeroMes"=>NULL, "nomeMes"=>NULL);
		}
		else
		{
			$this->campos_valores = $campo;
		}
		$this->campopk = "id";
	}
	
	// ATRIBUTOS DA TABELA SETOR
	public $numeroMes;
	public $nomeMes;
	
	public function ListarMeses()
	{
		
		$sql = "SELECT * FROM ".$this->tabela;
		
		//echo $sql;
		
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$MesesAno = new MesesAno();
			
			$MesesAno->id = $row['id'];
			$MesesAno->numeroMes = $row['numeroMes'];
			$MesesAno->nomeMes = $row['nomeMes'];
			
			$retorno[] = $MesesAno;
		}
		return $retorno;
	}
	
	
	
}//FIM DA CLASS SETOR
?>