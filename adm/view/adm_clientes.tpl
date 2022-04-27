<section class="container">
   <br>
   <h4>Gerenciar Clientes</h4>
   <hr>
   <br>
</section>
<br>
<!--- listando clientes ---->
<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td>Nome</td>
         <td>Email</td>
         <td>Fone</td>
         <td>Data Cad</td>
         <td></td>
         <td></td>
      </tr>
        
        {foreach from=$CLIENTES item=C}
        
        <tr>
            <td>{$C.cli_nome} {$C.cli_sobrenome}</td>
            <td>{$C.cli_email}</td>
            <td>{$C.cli_fone}</td>
            <td>{$C.cli_data_cad}</td>
            <td style="text-align: center;"><a href="{$PAG_EDITAR}/{$C.cli_id} " class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></a></td>
            <td style="text-align: center; padding: 15px;"><a href="{$PAG_PEDIDOS}/{$C.cli_id}" class="btn_warning" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-truck"></i></td>
            
        </tr>
        
        {/foreach}
        
    </table>
</section>