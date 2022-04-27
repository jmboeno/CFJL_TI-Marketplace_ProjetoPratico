<?php 

$smarty = new Template();

if(isset($_POST['adm_senha_atual']) and isset($_POST['adm_senha'])){
	//$senha_atual = md5($_POST['adm_senha_atual']);
	$senha_atual = ($_POST['adm_senha_atual']);
	$senha_nova = $_POST['adm_senha'];
	$email = $_SESSION['ADM']['user_email'];

	if($senha_atual != $_SESSION['ADM']['user_pw']){
		echo '<script> alert("A senha atual está incorreta!"); </script>';
		exit();
	}

	$user = new User();
   if ($user->AlterarSenha($senha_nova, $email)):


         // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Alteração da senha administrativa no site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIL_ADM);
         $msg = '<h3> Foi feito alteração de senha administrativa no site neste momento, nova senha:  ' . $senha_nova .'</h3>';
                  
         $enviar->Enviar($assunto, $msg, $destinatarios);
        // fim do email 
      
        echo '<div class="alerta pulse"> Senha alterada com sucesso! Já pode fazer login com sua nova senha </div>';
       
       // faz redirecioamento para LOGOFF
        Rotas::Redirecionar(2, Rotas::pag_LogoffADM());

    else:

        echo '<div class="alerta pulse"> Erro ao tentar alterar a senha  </div>';


    endif;

}else{
	$smarty->display('adm_senha.tpl');
}




 ?>