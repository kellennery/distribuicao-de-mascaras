// Fun��o que abre a tela Consulta;
	function abrirConsulta(){
		window.open('../query.php', 'modQuery', 'top=120,left=100,width=650,height=250,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,maximized=no',true)
	}

// Fun��o que abre a tela Consulta;
	function abrirFicha(){
		window.open('./ficha.php', 'modFicha', 'top=50,left=50,width=650,height=500,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,maximized=no',true)
	}

// Fun��o que abre a tela Endere�o;
	function abrirEndereco(empresa, codigo, tipo){
		window.open('../endereco.php?EMP_ID=' + empresa + '&END_ID=' + codigo + '&END_TIPO=' + tipo, 'modEndereco', 'top=120,left=100,width=650,height=250,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,maximized=no',true)
	}

// Fun��o body onload;
    function _body_onload(){
        if (document.getElementById("loaderContainer") != null)
            document.getElementById("loaderContainer").style.display = "none";
    }

// Fun��o body onunload;
    function _body_onunload(){
        if (document.getElementById("loaderContainer") != null)
            document.getElementById("loaderContainer").style.display = "";
    }

// Fun��o Valida um Click no Form;
	var oneClick; 
	oneClick=false;
	function validaForm(frm) {

		if (oneClick == true)
			return false;

		oneClick = true
		_body_onunload();
		return true;

	}

// Fun��o escolher a Operacao;
    function setOperacao($ope){
        if (document.getElementById("boxOperacao") != null)
            document.getElementById("boxOperacao").value = $ope;
    }

// Fun��o escolher o registro ;
    function setRegistro($reg){
        if (document.getElementById("boxRegistro") != null)
            document.getElementById("boxRegistro").value = $reg;
    }

// Fun��o escolher a Op��o;
    function setOpcao($opc){
        if (document.getElementById("boxOpcao") != null)
            document.getElementById("boxOpcao").value = $opc;
    }

// Fun��o Executar uma Operacao;
    function executarOperacao($ope, $reg, $opc){
		setOperacao($ope);
		setRegistro($reg);
		setOpcao($opc);
    }

// Fun��o Executar um Link;
    function executarLink($ope, $reg, $opc){
		setOperacao($ope);
		setRegistro($reg);
		setOpcao($opc);
        if (document.getElementById("FORM") != null)
            document.getElementById("FORM").submit();
    }

// Fun��o Executar uma consulta;
	function executarConsulta($opc){
		
		if ($opc == 1){
	        if (document.getElementById("divLista") != null)
	            document.getElementById("divLista").style.display = "none";
	        if (document.getElementById("divBusca") != null){
	            document.getElementById("divBusca").style.display = "";
			}
		} else {
	        if (document.getElementById("divLista") != null)
	            document.getElementById("divLista").style.display = "";
	        if (document.getElementById("divBusca") != null)
	            document.getElementById("divBusca").style.display = "none";
			if (document.getElementById("boxWhere") != null)
				document.getElementById("boxWhere").value = "";
			if (document.getElementById("boxOrder") != null)
				document.getElementById("boxOrder").value = "";
		}
		// window.open('../query.php', 'modQuery', 'top=120,left=100,width=650,height=250,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,maximized=no',true)
	}
	
