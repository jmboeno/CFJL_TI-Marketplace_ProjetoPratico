<section class="container">
   <br>
   <h4>Gerenciar Fornecedores</h4>
   <hr>
   <br>
   <a href="{$PAG_FORNECEDOR_NOVO}" class="btn_sucesso" style="text-decoration: none; padding: 10px; float: right;">Novo Fornecedor</a>
   <br>
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
        
        {foreach from=$FORNECEDORES item=F}
        
        <tr>
            <td>{$F.forn_nome}</td>
            <td>{$F.forn_email}</td>
            <td>{$F.forn_fone}</td>
            <td>{$F.forn_data_cad}</td>
            <td style="text-align: center;"><a href="{$PAG_EDITAR_FORNECEDOR}/{$F.forn_id} " class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></a></td>
            <td style="text-align: center; padding: 15px;"><a href="{$PAG_PRODUTOS_FORNECEDOR}/{$F.forn_id}" class="btn_warning" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-truck"></i></td>
            
        </tr>
        
        {/foreach}
        
    </table>
</section>