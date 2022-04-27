<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
      <link rel="stylesheet" href="{$GET_TEMA}/tema/css/estilo.css">
      <link rel="stylesheet" href="{$GET_TEMA}/tema/css/responsive.css">
      <title>Área Administrativa</title>
      <meta name="google-signin-client_id" content="219619071778-4m4a1p3l6pep4bd5ekje465ep4898kt7.apps.googleusercontent.com">
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>
   </head>
   <body>
      <section class="container" >
         <section>
            <div class="login_form">
            	<br>
               <h4> Área Administrativa </h4>
               <br>
               <form name="login" method="post" action="">
                  <label>Email:</label>
                  <input type="email" name="txt_email" required autocomplete="off">
                  <label>Senha:</label>
                  <input type="password" name="txt_senha" required>
                  <button name="txt_logar" value="txt_logar"class="btn_sucesso" style="width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer;"><i class="fas fa-sign-in-alt"></i> Entrar </button>
               </form>

               <button id="btn_recovery"class="btn_danger" style="width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer;">Esqueci a senha</button>
               <br>
               <br>

               <div id="dv_recovery" style="display: none;">

                  <form name="recovery" method="post" action="" style="background-color: rgba(0, 0, 0, .1); border-radius: 10px;">
                  	 <br>
                     <label>Digite o email do administrador </label>
                     <input type="email" name="txt_email" required>
                     <button name="recovery" value="recovery" class="btn_sucesso" style=" background-color: rgba(0, 0, 0, 0); width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer; ">Solicitar senha</button>
                  </form>
               </div>
            </div>
         </section>
      </section>
   </body>
</html>

<script>
	document.querySelector('#btn_recovery').addEventListener('click', abreRecovery);

	function abreRecovery(){
		document.querySelector('#dv_recovery').style.display = "block";
	}
</script>