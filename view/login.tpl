{if $LOGADO == true}   

{else}
<section class="container login">
    <div class="login_form">
        <span class="close_login"><a href="{$GET_SITE_HOME}"><b>x</b></a></span>
        <form name="cliente_login" method="post" action="" style="margin-bottom: 0;">
            <h3>Login</h3>
            <input type="email" name="txt_email" placeholder="Email address" required="" autofocus="">
            <input  type="password" name="txt_senha" placeholder="Password" required="">
            <button type="submit" class="btn_sucesso" style="width: 90%; height: 50px; font-size: 1.2em; margin: 20px auto 10px; cursor: pointer;"><i class="fas fa-sign-in-alt"></i> Entrar</button>
        </form> 
            <a href="{$PAG_CADASTRO}" style="text-decoration: none;"><button type="submit"  class="btn_warning" style="width: 90%; height: 50px; font-size: 1.2em; margin: 0px auto 10px; cursor: pointer; "><i class="fas fa-user-plus"></i> Cadastrar</button></a>
            <br>
            <br>
            <span>Esqueceu a senha? </span><a href="{$PAG_RECOVERY}">clique aqui!</a>
            <br>
            <br>
     </div>
</section>
{/if}

