<?php
session_start();
//ob_start();

//=============================
// Admin : Dados do Cliente / Projeto
//=============================
$strCfgAdminDiretorio = "controle";
$strCfgAdminNome = "Portifolio : Área de Controle";
$strCfgAdminLoginMasterNome = "Marco Romero";
$strCfgAdminLoginMasterUsuario = "admin";
$strCfgAdminLoginMasterSenha = "mmcromero@115";
$blnCfgAdminArmazenarTentativasLogin = true;
$intCfgSiteQtdPaginacao = 10;
//=============================
//=============================
// Admin : Temas / Templates
//=============================
//=============================
$strCfgAdminTema = "journal";
//=============================





//=============================
// Servidor : Local
//=============================
if($_SERVER["SERVER_NAME"] == "localhost"){

	//=============================
	// Preencher o Login da Área de Controle
	//=============================
	$blnCfgLoginAreaControle = true;
	$strCfgQuestionarioNome = "Portifolio";
	$strCfgAdminNomeRodape = "Modo Local";
			//=============================
	
	//=============================
	// Diretórios / Domínios
	//=============================
	$strCfgDiretorioRaiz = getcwd();
	$strCfgDiretorioRaizSite = substr($strCfgDiretorioRaiz, 0, strlen($strCfgDiretorioRaiz) - strlen($strCfgAdminDiretorio) - 1);
	
	$strCfgProtocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http' : 'https';
	$strCfgDominio = $_SERVER['HTTP_HOST'];
	$strCfgScript = $_SERVER['SCRIPT_NAME'];
	$strCfgPedacos = explode("/", $strCfgScript);
	for ($i = 1; $i <= (count($strCfgPedacos))-2; $i++) {
		$strCfgDiretorios .= $strCfgPedacos[$i]."/";
	}
	$strCfgUrlCompleta = $strCfgProtocolo."://".$strCfgDominio."/".$strCfgDiretorios;
	//=============================
			
	//=============================
	// Banco de Dados
	//=============================
	$strCfgDatabaseServidor = "localhost";
	$strCfgDatabaseBancoDados = "hp-setodetestes";
	$strCfgDatabaseUsuario = "root";
	$strCfgDatabaseSenha = "";
			
	//=============================
	$intCfgAmbiente = 0;
	$strCfgUrlSDT = "http://localhost/setordetestes.com.br/site/";

//=============================
// Servidor : setordetestes
//=============================
}else if(($_SERVER["SERVER_NAME"] == "marcoromero.com.br") || ($_SERVER["SERVER_NAME"] == "www.marcoromero.com.br")){

	//=============================
	// Preencher o Login da Área de Controle
	//=============================
	$blnCfgLoginAreaControle = false;
	$strCfgQuestionarioNome = "Setor De Testes";
	$strCfgAdminNomeRodape = "Modo Online";
	//=============================
	
	//=============================
	// Diretórios / Domínios
	//=============================
	$strCfgDiretorioRaiz = getcwd();
	$strCfgDiretorioRaizSite = substr($strCfgDiretorioRaiz, 0, strlen($strCfgDiretorioRaiz) - strlen($strCfgAdminDiretorio) - 1);
	
	$strCfgProtocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === false) ? 'http' : 'https';
	$strCfgDominio = $_SERVER['HTTP_HOST'];
	$strCfgScript = $_SERVER['SCRIPT_NAME'];
	$strCfgPedacos = explode("/", $strCfgScript);
	for ($i = 1; $i <= (count($strCfgPedacos))-2; $i++) {
		$strCfgDiretorios .= $strCfgPedacos[$i]."/";
	}
	$strCfgUrlCompleta = $strCfgProtocolo."://".$strCfgDominio."/".$strCfgDiretorios;
	
	//=============================
			
	//=============================
	// Banco de Dados
	//=============================
	$strCfgDatabaseServidor = "mysql.hostinger.com.br";
	$strCfgDatabaseBancoDados = "u917872851_prin";
	$strCfgDatabaseUsuario = "u917872851_prin";
	$strCfgDatabaseSenha = "HmpPb200";
			
	//=============================
	$intCfgAmbiente = 1;
	$strCfgUrlSDT = "http://setordetestes.com.br/";

}
	

//=============================




?>