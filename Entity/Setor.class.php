<?php
require_once("../DAO/Base.class.php");

class Setor extends Base{
	
	public function __construct($campo=array())
	{
		parent :: __construct();
		$this->tabela = "Setor";
		if(sizeof($campo)<=0)
		{
			$this->campos_valores=array("descricao"=>NULL, "responsavel"=>NULL, "ramal"=>NULL, "sigla"=>NULL, "cancelado"=>NULL, "email"=>NULL);
		}
		else
		{
			$this->campos_valores = $campo;
		}
		$this->campopk = "id";
	}
	
	// ATRIBUTOS DA TABELA SETOR
	public $descricao;
	public $responsavel;
	public $ramal;
	public $sigla;
	public $cancelado;
	public $email;
	
	public function ListarSetores()
	{
		
		$sql = "SELECT * FROM ".$this->tabela." WHERE cancelado=0";
		
		//echo $sql;
		
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$setor = new Setor();
			
			$setor->id = $row['id'];
			$setor->descricao = $row['descricao'];
			$setor->responsavel = $row['responsavel'];
			$setor->ramal = $row['ramal'];
			$setor->sigla = $row['sigla'];
			$setor->cancelado = $row['cancelado'];
			$setor->email = $row['email'];
			
			$retorno[] = $setor;
		}
		return $retorno;
	}
	
	public function ListaSetoresFiltro($setorId, $cancelado)
	{
		
		$sql = "SELECT * FROM ".$this->tabela;

		if ($setorId != '0' && $cancelado != '2')
		{
			$sql .= " WHERE id = '".$setorId."' AND cancelado = '".$cancelado."'";
		}
		if ($setorId != '0' && $cancelado == '2')
		{
			$sql .=" WHERE id = '".$setorId."'";
		}
		if ($cancelado != '2' && $setorId == '0')
		{	
			$sql .=" WHERE cancelado = '".$cancelado."'";
		}
		
		//echo $sql;
		
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$setor = new Setor();
			
			$setor->id = $row['id'];
			$setor->descricao = $row['descricao'];
			$setor->responsavel = $row['responsavel'];
			$setor->ramal = $row['ramal'];
			$setor->sigla = $row['sigla'];
			$setor->cancelado = $row['cancelado'];
			$setor->email = $row['email'];
			
			$retorno[] = $setor;
		}
		return $retorno;
	}
	
	public function SetorEditar($setorId)
	{
		
		$sql = "SELECT * FROM ".$this->tabela." WHERE id =".$setorId;
		
		//echo $sql;
		
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$setor = new Setor();
			
			$setor->id = $row['id'];
			$setor->descricao = $row['descricao'];
			$setor->responsavel = $row['responsavel'];
			$setor->ramal = $row['ramal'];
			$setor->sigla = $row['sigla'];
			$setor->cancelado = $row['cancelado'];
			$setor->email = $row['email'];
			
			$retorno[] = $setor;
		}
		return $retorno;
	}
	
}//FIM DA CLASS SETOR
?>