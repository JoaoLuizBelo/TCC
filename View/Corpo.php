<?php
	if (!isset($_GET['menu'])){
		$get="inicio";
	} else {
		$get=$_GET['menu'];
	}
 switch ($get) {	   
		   
         //MENU GERENCIAR
	   
		   case 'aluno':
				require "Menu/Gerenciar/aluno.php";
                break;

                
                case 'aluno-cadastrar':// CADASTRAR ALUNO
                    require "Menu/Gerenciar/aluno-cad-beta.php";
                    break;
     
           case 'turma':
				require "Menu/Gerenciar/turma.php";
                break;
        
                case 'turma-cadastrar':                                 // CADASTRAR TURMA
                    require "Menu/Gerenciar/turma-cadastrar.php";
                    break;
         
         
            case 'responsavel':
				require "Menu/Gerenciar/responsavel.php";
                break;
                
                case 'responsavel-cadastrar':
                    require "Menu/Gerenciar/responsavel-cadastrar.php";
                    break;
        
            case 'funcionario':
				require "Menu/Gerenciar/funcionario.php";
                break;
        
         
         
         //MENU ALUNO
            case 'frequencia':
				require "Menu/Aluno/frequencia.php";
                break;
        
            case 'atividades':
				require "Menu/Aluno/atividades.php";
                break;
        
            case 'observacoes':
				require "Menu/Aluno/observacoes.php";
                break;
        
            case 'mantimentos':
				require "Menu/Aluno/mantimentos.php";
                break;
        
         
         //MENU CARDAPIO
         
            case 'coletivo':
				require "Menu/Cardapio/coletivo.php";
                break;
        
            case 'individual':
				require "Menu/Cardapio/individual.php";
                break;
        
         //MENU COMUNICAÇÃO
         
            case 'mensagem':
				require "Menu/Comunicacao/mensagem.php";
                break;
        
            case 'recado':
				require "Menu/Comunicacao/recado.php";
                break;
        
         //MENU MINHA CONTA
         
            case 'alterar_senha':
				require "Menu/MinhaConta/alterar_senha.php";
                break;
        
            case 'dados_cadastrais':
				require "Menu/MinhaConta/dados_cadastrais.php";
                break;
        
            case 'sair':
				require "Menu/MinhaConta/sair.php";
                break;
        

	  default:
	  		//require "Menu/Inicio/Inicio.view.php";
      break;
 }
?>
