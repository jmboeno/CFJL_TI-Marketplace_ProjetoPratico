<section class="container" id="dv_carrinho" style="margin-top: 50px;">
  <h1 class="titulo_pag">Carrinho</h1>
  <hr>
    <div class="carrinho">
      <table>
        <tr>

          <th></th>
          <th>Descrição</th> 
          <th>Valor</th>
          <th>Fornecedor</th>
          <th>Quantidade</th>
          <th>Subtotal</th>
          <th></th>
          </tr>

          {foreach from=$PRO item=P}
          <tr id="itens_carrinho">
            <td style="min-width: 50px;"><img src="{$P.pro_img}" alt="{$P.pro_nome}" style="width: 100%;"></td>
            <td>{$P.pro_nome}</td> 
            <td>{$P.pro_valor}</td>
            <td>{$P.pro_fornecedor}</td>
            <td>{$P.pro_qtd}</td>
            <td>{$P.pro_subTotal}</td>
            <td>
              <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                <input type="hidden" name="acao" value="del">             
                <button class="btn_trash" style="width: 35px; height: 35px; cursor: pointer;"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          {/foreach}
          <tr>
          <td></td>
          <td></td> 
          <td></td>
          <td><b>TOTAL</b></td>
          <td>R$ {$TOTAL}</td>
          <td></td>
          </tr>
        </table>
    </div>
      <div class="resumo_carrinho">
      <strong>Resumo</strong>
        <br>
        <br>
        
        {if $PESO > 0}
        <div id="dadosfrete">
            <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" readonly>
            <input type="text" name="cep_frete" id="cep_frete" value="" placeholder="digite seu cep" style="width: 85%; text-align: center;">
            <input type="hidden" name="frete_valor" id="frete_valor" value="0">
            <button id="buscar_frete" style="width: 15%; margin-left: -8px; height: 2.6em;"><i class="fas fa-calculator"></i></button>
        </div>
        {/if}

        <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
          <div id="frete"></div>
          {if $PESO <= 0}
              <div id="frete">
                <span class="radio text-danger text-left"> 
                <br>
                <input type="radio" required="" id="frete_radio" name="frete_radio" value="0">Frete Grátis
                <br>
                </div>
            {/if}
          <button class="btn_sucesso" type="submit">Confirmar Pedido</button>
        </form>
        
        <br>

        <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
          <input type="hidden" name="acao" value="limpar">
          <input type="hidden" name="pro_id" value="1">
          <button class="btn_danger">Limpar Tudo</button>
        </form>

        <br>
        <a href="{$PAG_PRODUTOS}"><button  class="btn_warning">Continuar Comprando</button></a>
      </div>
    </section>
    <script type="text/javascript">
      var checkcart = document.querySelectorAll('#itens_carrinho').length;

      if(checkcart == 0){
        document.querySelector('#dv_carrinho').style.display = "none";
      }else{
        document.querySelector('#dv_carrinho').style.display = "block";
      }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{$GET_TEMA}/tema/js/valida_frete.js"></script>