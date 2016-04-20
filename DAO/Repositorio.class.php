<?php

abstract class Repositorio{
	
	public $servidor		= "localhost";
	public $usuario			= "root";
	public $senha			= "";
	public $nomeBanco		= "test";
	public $conexao			= NULL;
	public $linhasAfetadas	= -1;
	
	
	public function __construct()
	{
		$this -> Conection();
	}
		
	public function __destruct()
	{	
		if($this->conexao != NULL)
		{
			mysql_close($this->conexao);
		}		
	}
	
	public function Conection()
	{
		$this->conexao = mysql_connect($this->servidor, $this->usuario,$this->senha,TRUE) or die ($this->TrataErro(__FILE__,__FUNCTION__,mysql_errno(), mysql_error(),TRUE));
		mysql_select_db($this->nomeBanco) or die ($this-> TrataErro(__FILE__,__FUNCTION__,mysql_errno(),mysql_error(),TRUE));
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET character_set_connection = utf8");
		mysql_query("SET character_set_client = utf8");
		mysql_query("SET character_set_results = utf8");
	}
	
	public function TrataErro($arquivo=NULL,$rotina=NULL,$numErro=NULL,$msgErro=NULL,$geraException=FALSE)
	{
		if($arquivo == NULL)
		{
			$arquivo = "Não Informado";
		}
		if($rotina == NULL)
		{
			$rotina = "Não Informado";
		}
		if($numErro == NULL)
		{
			$numErro = mysql_errno($this->conexao);
		}
		if($msgErro == NULL)
		{
			$msgErro = mysql_error($this->conexao);
		}
		$resultado =  	'<br/><br/>Ocorreu um erro com o seguintes detalhes:<br />
							<strong>Arquivo: </strong>'.$arquivo.'<br />
							<strong>Rotina: </strong>'.$rotina.'<br />
							<strong>Codigo: </strong>'.$numErro.'<br />
							<strong>Mensagem: </strong>'.$msgErro.'<br />';
		
		if($geraException == FALSE)
		{
			echo($resultado);
		}else{
			die($resultado);
		}
	}
	
	public function ExecutaSQL($sql=NULL,$rotina)
	{
		if($sql != NULL)
		{
			$query					= mysql_query($sql) or $this->TrataErro(__FILE__,__FUNCTION__);
			$this->linhasAfetadas	= mysql_affected_rows($this->conexao);
			
			$var = NULL;
			if($rotina == "Logar")
			{
				while($l = mysql_fetch_array($query))
				{
					$var = $l['id'];
				}
				mysql_close();

			}else if($rotina == "Inserir")
			{
				$id = mysql_insert_id();
				$var = $id;
				mysql_close();
				
			}else if($rotina == "Atualizar" || $rotina == "Deletar")
			{
				mysql_close();
				$var = true;
			}
			
			return $var;
		}
		else
		{
			$this->TrataErro(__FILE__,__FUNCTION__,NULL,"Comando SQL não Informado na Rotina",FALSE);
		}
	}
	
	public function Logar($objeto)
	{
		$sql = "SELECT * FROM ".$objeto->tabela. " WHERE ";
			for($i = 0; $i < count($objeto->campos_valores)-1; $i++)
			{
				$sql .= key($objeto->campos_valores);
				
				$sql .= is_numeric($objeto->campos_valores) ? 
				$objeto->campos_valores[key($objeto->campos_valores)] :
				" = '".$objeto->campos_valores[key($objeto->campos_valores)]."'";
				
				if($i < (count($objeto->campos_valores)-2))
				{
					$sql .= ' AND ';
				}
				else
				{
					$sql .= "";	
				}
				next($objeto->campos_valores);
			}
		
			echo $sql;
			return $this->ExecutaSQL($sql,"Logar");
	}

	public function Inserir($objeto)
	{
		$sql = "INSERT INTO ".$objeto->tabela." (";
		for($i = 0; $i < count($objeto->campos_valores); $i++)
		{
			$sql .= key($objeto->campos_valores);
			if($i < (count($objeto->campos_valores)-1))
			{
				$sql .= ", ";
			}
			else
			{
				$sql .= ")";
			}
			next($objeto->campos_valores);
		}
		
		reset($objeto->campos_valores);
		$sql .= "VALUES (";
		
		for($i = 0; $i < count($objeto->campos_valores); $i++)
		{
			$sql .= is_numeric($objeto->campos_valores[key($objeto->campos_valores)]) ?
			$objeto->campos_valores[key($objeto->campos_valores)] :
			"'".$objeto->campos_valores[key($objeto->campos_valores)]."'";
			
			if($i < (count($objeto->campos_valores)-1))
			{
				$sql .= ", ";
			}
			else
			{
				$sql .= ")";	
			}
			next($objeto->campos_valores);
		}
		
		//echo $sql."</br>";
		
		return $this->ExecutaSQL($sql,"Inserir");
	}
	
	public function Atualizar($objeto,$id)
	{
		$sql = "UPDATE ".$objeto->tabela." SET ";
		for($i = 0; $i < count($objeto->campos_valores); $i++)
		{
			$sql .= key($objeto->campos_valores);
			
			$sql .= is_numeric($objeto->campos_valores) ? 
			$objeto->campos_valores[key($objeto->campos_valores)] :
			"='".$objeto->campos_valores[key($objeto->campos_valores)]."'";
			
			if($i < (count($objeto->campos_valores)-1))
			{
				$sql .= ', ';
			}
			else
			{
				$sql .= "";	
			}
			next($objeto->campos_valores);
		}
		
		$sql.=" WHERE id='$id'";
		
		//echo $sql."</br>";
				
		return $this->ExecutaSQL($sql,"Atualizar");
	}
	
/*	public function Deletar($objeto, $value)
	{
		$sql = "DELETE FROM ".$objeto->tabela." WHERE id = '$value'";
	
		echo $sql;
		return $this->ExecutaSQL($sql,"Deletar");
	}*/
}
?>