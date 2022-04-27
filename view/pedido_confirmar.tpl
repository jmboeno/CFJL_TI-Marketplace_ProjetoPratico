<section class="container" style="margin-top: 50px;">
  <h1 class="titulo_pag">Confirmar Pedido</h1>
  <hr>
    <div class="carrinho" style="width: 100%">
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Descrição</th> 
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
            <th></th>
          </tr>
        </thead>
        {foreach from=$PRO item=P}
        <tbody>
          <tr>  
            <td><img src="{$P.pro_img}" alt="{$P.pro_nome}"></td>
            <td>{$P.pro_nome}</td> 
            <td>{$P.pro_valor}</td>
            <td>{$P.pro_qtd}</td>
            <td>{$P.pro_subTotal}</td>
            <td></td>
          </tr>
        </tbody>
        {/foreach}
        </table>

        <div id="frete" style="width: 100%; padding: 20px 0">
          <span style="width: 32%; float: left;"><a href="{$PAG_CARRINHO}" style="text-decoration:none;"><button class="btn_warning" style="width:100%; height:50px;cursor:pointer;">Voltar para o Carrinho</button></a></span>
          <span style="width: 32%; float: left; text-align: right;">
            <p> + Frete R$ {$FRETE}</p>
            <h3>Total R$ {$TOTAL_FRETE}</h3>
          </span>
          <span style="width: 32%; float: right;">
            <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
              <button class="btn_sucesso" type="submit" style="width: 100%; height: 50px; cursor: pointer;">Finalizar Pedido</button>
            </form>
          </span>
        </div>
    </div>
</section>
