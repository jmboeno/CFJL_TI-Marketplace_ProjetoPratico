<section class="container">
   <br>
   <h4>Gerenciar Pedidos</h4>
   <hr>
   <br>
</section>

<section class="container">
    
   <div style="width: 50%; float: left;">
        <label> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">        
              <input type="date" name="data_ini" style="padding: 1px 10px;" required>
              <input type="date" name="data_fim" style="padding: 1px 10px;" required>
              <button class="btn_sucesso" style="text-decoration: none; padding: 1px 10px; cursor: pointer;"><i class="fas fa-search"></i></button>
        </form>
   </div>
   
   <!--- faz  uma busca  por texto --->
   <div style="width: 50%; float: right;">
        <label> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">
              <input type="text" name="txt_ref" style="padding: 1px 10px;" required>   
              <button class="btn_sucesso" style="text-decoration: none; padding: 1px 10px; cursor: pointer;"><i class="fas fa-search"></i></button>   
        </form>
   </div>
   
   <div style="clear: both;">
    <br>
    <hr>
    <br>
   </div>
</section>

<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td>Cliente</td>
         <td>Data</td>
         <td>Hora</td>
         <td>Ref</td>
         <td>Status</td>
         <td></td>
         <td></td>
      </tr>
      {foreach from=$PEDIDOS item=P}
      <tr>
         <td >{$P.cli_nome} {$P.cli_sobrenome}</td>
         <td>{$P.ped_data}</td>
         <td>{$P.ped_hora}</td>
         <td>{$P.ped_ref}</td>
         {if $P.ped_pag_status == 'NAO'} 
         <td>{$P.ped_pag_status}</td>
         {else}
         <td>{$P.ped_pag_status}</td>
         {/if}
         <td style="text-align: center;">
            <!---- formulario que vai para itens do pedido ---->
            <form name="itens" method="post" action="{$PAG_ITENS}">
               <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
               <button class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-eye"></i></button>
            </form>
         </td>
         <td style="text-align: center;">
            <form name="deletar" method="post" action="">
               <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
               <button name="ped_apagar" value="ped_apagar" class="btn_danger" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-trash"></i></button>
            </form>
         </td>
      </tr>
      {/foreach}
   </table>
</section>