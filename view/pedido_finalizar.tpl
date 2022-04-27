<section class="container" style="margin-top: 50px;">
  <h1 class="titulo_pag">Finalizar Pedido</h1>
  <hr>
    <div class="carrinho" style="width: 100%">
      <div class="alerta">
        <h3>Pedido Finalizado!</h3>
      </div>
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
            <td style="text-align: center;">{$P.pro_qtd}</td>
            <td>{$P.pro_subTotal}</td>
            <td></td>
          </tr>
        </tbody>
        {/foreach}
        <tfoot>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p> + Frete R$ {$FRETE}</p>
            <h3>Total R$ {$TOTAL_FRETE}</h3>
          </td>
          <td></td>
        </tfoot>
        </table>

        <div style="width: 100%; padding: 20px 0; text-align: center;">

          <h3>Formas de Pagamento</h3>

          <div style="width: 30%; margin: 0 auto; cursor: pointer;">
            <img src="{$TEMA}/tema/images/logo-pagseguro.png" alt=""> 
          </span>
        </div>
    </div>
</section>