<!doctype html>
<html lang="en">
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
  <header>
    <input type="checkbox" id="bt_menu">
    <label id="lbl_menu" for="bt_menu"><i class="fas fa-bars"></i></label>
    <div class="logo">
      <h2 style="bottom: -30px; right: 0;">Painel Administrativo</h2>
    </div>
    <p style="text-align: right; padding: 2px 10px;">Último Login: {$DATA} ás {$HORA}</p>
    <nav class="menu" style="width:100%;">
      <ul>
        <li style="width:14.28%;"><a href="{$GET_SITE_ADM}"><i class="fas fa-home"></i> Inicio</a></li>
        <li style="width:14.28%;"><a href="{$PAG_CATEGORIAS}"><i class="fas fa-tags"></i> Categorias</a></li>
        <li style="width:14.28%;"><a href="{$PAG_ADM_PRODUTOS}"><i class="fas fa-barcode"></i> Produtos</a></li>
        <li style="width:14.28%;"><a href="{$PAG_ADM_CLIENTE}"><i class="fas fa-users"></i> Clientes</a></li>
        <li style="width:14.28%;"><a href="{$PAG_ADM_FORNECEDORES}"><i class="fas fa-users"></i> Fornecedores</a></li>
        <li style="width:14.28%;"><a href="{$PAG_ADM_PEDIDOS}"><i class="fas fa-shopping-cart"></i> Pedidos</a></li>
        
        {if $LOGADO == true}
        <li style="width:14.28%;"><a href="#"><i class="fas fa-user-circle"></i> {$USER} </a>
          <ul>
            <li><a href="{$PAG_SENHA}"><i class="fas fa-key"></i> Alterar Senha </a></li>
            <li><a href="{$PAG_LOGOFF}"><i class="fas fa-sign-out-alt"></i> Sair </a></li>
          </ul>
        {/if}


        
      </ul>
    </nav>
  </header>

  <main style="min-height: 600px;">
    {php}

            Rotas::get_Pagina();
        
    {/php}
  </main>

  <footer>
    <div class="center"><i class="far fa-copyright"></i> Todos os direitos a Jonas Boeno - {$TITULO_SITE} - {$DATA} <i class="fas fa-coffee"></i></div>
  </footer>
</body>
</html>