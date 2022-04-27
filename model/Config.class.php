<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "projeto-pratico";
	const SITE_NOME = "Projeto Prático - CFJL";
	const SITE_EMAIL_ADM = "boeno.jonas@gmail.com";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '98920000';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "projetopratico",
		  BD_PREFIX = "pp_";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "boeno.jonas@gmail.com";
	const EMAIL_NOME = "Contato - Projeto Prático";
	const EMAIL_SENHA = "";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "boeno.jonas@gmail.com";



}
