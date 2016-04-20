function Mascaras(idObjeto, tipo){
	if (tipo == "Telefone"){
		$("#"+idObjeto).mask("(99) 9999-9999");
	}else if (tipo == "Celular"){
		$("#"+idObjeto).mask("(99) 99999-9999");
	}else if(tipo == "Pis"){
		$("#"+idObjeto).mask("999.99999.99/99");
	}else if(tipo == "Ctps"){
		$("#"+idObjeto).mask("99999-999");
	}	
}