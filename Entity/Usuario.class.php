<?php
require_once("../DAO/Base.class.php");

class Usuario extends Base{
	
	public function __construct($campo=array())
	{
		parent :: __construct();
		$this->tabela = "Usuario";
		if(sizeof($campo)<=0)
		{
			$this->campos_valores=array("desativado"=>NULL, "perfil"=>NULL, "senha"=>NULL, "Colaborador_id"=>NULL);
		}
		else
		{
			$this->campos_valores = $campo;
		}
		$this->campopk = "id";
	}
	
	// ATRIBUTOS DA TABELA USUARIO
	public $desativado;
	public $perfil;
	public $senha;
	public $colaborador_id;
	
	public function ListarUsuario($valor1, $valor2, $value3){
		
		//echo("valor: ".$valor1." valor2: ".$valor2." value3: ".$value3."<br>");
		
		$sql = "SELECT u.id, c.matr, c.email, u.perfil, u.desativado, u.senha, u.colaborador_id
					FROM colaborador AS c 
						INNER JOIN usuario AS u 
							ON c.id=u.Colaborador_id";
		if	(!empty($valor1)){			
				$sql .=" WHERE c.matr= '".$valor1."'";		
		}if (!empty($valor2)){
				$sql .=" WHERE u.desativado= '".$valor2."'";	
		}if (!empty($value3)){
				$sql .=" WHERE u.id= '".$value3."'";
		}
		//echo $sql;
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$obj = new Usuario();
			
			$obj->id = $row['id'];
			$obj->desativado = $row['desativado'];
			$obj->perfil = $row['perfil'];
			$obj->matr = $row['matr'];
			$obj->email = $row['email'];
			$obj->senha = $row['senha'];
			$obj->colaboradorId = $row['colaborador_id'];
			
			$retorno[] = $obj;
		}
		
		return $retorno;
	}
	
	public function Logar($matr, $senha){
		
		$sql = "SELECT colaborador.nome
				FROM usuario 
				INNER JOIN colaborador 
				ON usuario.Colaborador_id = colaborador.id 
				WHERE usuario.desativado = 0
				AND colaborador.matr = '".$matr."'
				AND usuario.senha = '".$senha."'";
				
				
		//echo $sql;
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$obj = new Usuario();
			
			$obj->nome = $row['nome'];
			
			$retorno[] = $obj;
		}
		
		return $retorno;
	}
	
	public function VerificaEmail($email){
		
		$sql = "SELECT usuario.id, colaborador.email, usuario.senha
				FROM usuario 
					INNER JOIN colaborador 
						ON usuario.Colaborador_id = colaborador.id
				WHERE colaborador.email = '".$email."'
				AND usuario.desativado <> '1'";
		
		$result = mysql_query($sql);		
		$retorno = NULL;
		if (!empty($result)){
			while ($row = mysql_fetch_array($result)){
				$obj = new Usuario();
				
				$obj->id = $row['id'];
				$obj->email = $row['email'];
				$obj->senha = $row['senha'];
				
				$retorno[] = $obj;
			}
		}else{
			return 0;
		}
		
		return $retorno;
	}
	
	public function GerarNovaSenha($email){
		
		$posicao = "!,@,#,$,%,&,*,+,?,:,.";
		
		$arrayPosicao = explode(",",$posicao);//gera um array com a lista
		shuffle($arrayPosicao);//mistura o array  
		
		$num1 = rand(0,10);
		$num2 = rand(0,10);
		$senhaT = $arrayPosicao[$num1]."S@CHT3MP".$arrayPosicao[$num2];
		
		$para = "carlosalexandre3107@gmail.com"; 
		if (!empty($email)){
			$nome = "SACH";
			$assunto = "Nova senha de acesso ao SACH";
		}
		$mensagem = "<strong>Olá, </strong>"; 
		$mensagem .= "<br> <strong>Mensagem: </strong> Seu nova senha temporaria é ".$senhaT." </br> Acesse o SACH em www.sach.com.br"; 
		$headers = "Content-Type:text/html; charset=UTF-8\n"; 
		$headers .= "From: sach.com.br<sach@sach.com.br>\n";
		$headers .= "X-Sender: <sach@sach.com.br>\n";
		$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
		$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
		$headers .= "Return-Path: <sach@sach.com.br>\n"; 
		$headers .= "MIME-Version: 1.0\n"; mail($para, $assunto, $mensagem, $headers); 

		/*echo "<script language='javascript'>											
					window.alert('Seu senha foi enviada com sucesso!');
					window.location.href='../View/Index.php';
			  </script>";
			*/  
		return $senhaT;	  

	}
	
	public function ListarUsuariosAll($value){
		$sql = "SELECT * FROM Usuario ";
		
		if ($value != NULl){
			$sql .= " WHERE id = '".$id."'";
		}
		
		//echo $sql;
		$result = mysql_query($sql);
		
		$retorno = NULL;
		while($row = mysql_fetch_array($result)){
			
			$obj = new Usuario();
			
			$obj->id = $row['id'];
			$obj->desativado = $row['desativado'];
			$obj->perfil = $row['perfil'];
			$obj->senha = $row['senha'];
			$obj->colaboradorId = $row['Colaborador_id'];
			
			$retorno[] = $obj;
		}
		
		return $retorno;
		
	}
	
}//FIM DA CLASS SETOR
?>