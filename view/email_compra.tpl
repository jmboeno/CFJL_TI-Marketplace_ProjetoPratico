
<section style="clear: both;
  background: radial-gradient(ellipse at center, rgba(219,219,219,1) 0%, rgba(226,226,226,1) 36%, rgba(254,254,254,1) 100%);
  width: 90%;
  padding: 20px;
  margin: 0 auto;
  border-radius: 10px;
  box-shadow: 5px 5px 5px rgb(0,0,0);">

  <div style="width: 100px;
  height: 100px;
  margin: 0 auto;">
    <img src="{$TEMA}/tema/images/logo.png" style="width: 100%;">
  </div>

  <div style="width: 100%;
  text-align: center;
  font-size: 1.2em;">
    <p> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
      <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
    </p>
    <p> Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
      <a href="{$PAG_MINHA_CONTA}" > Minha conta: {$PAG_MINHA_CONTA}</a>
    </p>                   
  </div>

  <div style="border: 1px solid rgba(102, 51, 153, 1);
  border-radius: 10px;
  background-color: #ffffff;">
      
    <div class="titulo_pedidos">
      <h3 style="text-align: center;
  width: 100%;
  padding: 10px 0;
  margin: 0;
  background-color: rgba(102, 51, 153, 1);
  color: #ffffff;
  border-radius: 9px 9px 0 0;">ESSES SÃO OS ITENS DO SEU PEDIDO!</h3>
    </div>
      
    <table style="width: 100%;">
      {foreach from=$PRO item=P}
      <tr style="border-bottom: 1px solid #000;">
        <td style="width: 15%; min-width: 80px; padding: 10px 0;"> <img src="{$P.pro_img}" style="width: 100%; min-width: 80px;"></td> 
        <td style="width: 40%; padding: 10px 0;">  {$P.pro_nome}  </td>
        <td style="width: 15%; padding: 10px 0;">  {$P.pro_valor} </td>
        <td style="width: 15%; padding: 10px 0;">  {$P.pro_qtd}   </td>
        <td style="width: 15%; padding: 10px 0;">  {$P.pro_subTotal} </td>
      </tr>
      {/foreach}
    </table>
    
    <hr>
    
    <div style="width: 90%;
  margin: 20px auto;
  border: 1px dotted #000;
  border-radius: 10px;
  padding: 50px 10px;">
      <span>Itens : R$ {$TOTAL} | </span>
      <span>Frete : R$ {$FRETE}</span>
      <span style="float: right; font-size: 2em;"><b>TOTAL : R$ {$TOTAL_FRETE}</b></span>
    </div>
    
    <br>
  </div>

</section>