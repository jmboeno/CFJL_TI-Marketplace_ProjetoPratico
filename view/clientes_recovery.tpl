<section class="container login" style="background-color: rgba(0,0,0, .5); position: absolute; top: 0; width: 100%; height: 1080px;">
    <div class="login_form">
        <span class="close_login"><a href="{$GET_SITE_HOME}"><b>x</b></a></span>
        <form name="recuperarsenha" method="post" action="">
        	<h3>Recuperar Senha</h3>
        	<br>
        	<label>Digite seu email cadastrado</label>
	        <input type="email" name="cli_email" id="cli_email" class="form-control" required>
	        <button class="btn_sucesso" type="submit"style="width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer; ">Recuperar Senha</button>
	    </form>
         <a href="{$PAG_LOGIN}" style="text-decoration: none;"><button class="btn_warning" style="width: 90%; height: 50px; font-size: 1.2em; margin: 0px auto 10px; cursor: pointer; ">Voltar</button></a>
    </div>
</section>