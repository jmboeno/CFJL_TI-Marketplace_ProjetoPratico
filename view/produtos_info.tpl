<section class="container produto_info">
    {foreach from=$PRO item=P}
    <h1 class="titulo_pag">{$P.cate_nome}</h1>
    <hr>

  <div class="produto_info_images">
      <div class="info_img_principal">
        <img src="{$P.pro_img_g}">
      </div>
      {foreach from=$IMAGES item=I}
        <div class="info_img_secundario">
            <img src="{$I.img_nome}">
        </div>
      {/foreach}
  </div>

  <div class="produto_info_pay">
    <h1>{$P.pro_nome}</h1>
    <h1 class="produto_info_preco">R$ {$P.pro_valor}</h1>
    <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
      <input type="hidden" name="pro_id" value="{$P.pro_id}">
      <input type="hidden" name="acao" value="add">
      <button class="btn_sucesso btn_comprar">Comprar</button>
    </form>
    <div class="pagseguro_img">
      <img src="{$TEMA}/tema/images/logo-pagseguro.png">
    </div>
    <div class="produto_descricao">
      <h3>Descrição:</h3>
      <p>{$P.pro_desc}</p>
    </div>
  </div>
  {/foreach}
</section>