<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
	
}

require '../lib/autoload.php';

$smarty = new Template();

if(isset($_POST['recovery'])):
    
 
    // obejto USER
    $user = new User();
   // passo alguns valores
    $email = $_POST['txt_email'];
    $senha = Sistema::GerarSenha();
    // verifico se tem este email na tabela 
    if($user->GetUserEmail($email) > 0):
        
        // faz alteração 
        $user->AlterarSenha($senha, $email);  
        
          // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Nova senha Administrativa do site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIL_ADM);
         $msg = ' Nova senha Administrativa do site, nova senha:  ' .$senha;
         
         
         $enviar->Enviar($assunto, $msg, $destinatarios);
         
           echo '<div class="alerta pulse"> Foi enviado um email com a nova senha </div>';
         
         
    else:
        
         echo '<div class="alerta pulse"> Email não encontrado </div>';
    endif;
 endif;

if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])){

	$user = $_POST['txt_email'];
	$senha = $_POST['txt_senha'];
	$login = new Login();
	if($login->GetLoginADM($user, $senha)){
		echo '<h3 class="alerta pulse">Login Efetuado com Sucesso!</h3>';
		Rotas::Redirecionar(1, 'index.php');
	}

}

//valores para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->display('adm_login.tpl');