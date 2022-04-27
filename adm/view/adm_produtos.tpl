<section class="container">
   <br>
   <h4>Gerenciar Produtos</h4>
   <hr>
   <br>
   <a href="{$PAG_PRODUTO_NOVO}" class="btn_sucesso" style="text-decoration: none; padding: 10px; float: right;">Novo Produto</a>
   <br>
   <br>
</section>
<br>
<!--     exibe mensagem caso nao encontre produtos -->
{if $PRO_TOTAL < 1}
<h4 >Ops... Nada foi encontrado </h4>
{/if}
<!--  começa lista de produtos  ---->   
<section class="container" style="margin-bottom: 100px">
   <table>
      <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
         <td></td>
         <td>Produto</td>
         <td>Categoria</td>
         <td>Preço</td>
         <td>      </td>
         <td>      </td>
      </tr>
      {foreach from=$PRO item=P}
      <tr>
         <td>  <img src="{$P.pro_img_p}" alt="" > </td>
         <td> {$P.pro_nome}</td>
         <td>{$P.cate_nome}</td>
         <td>R$ {$P.pro_valor}</td>
         <td  style="text-align: center;">
            <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
               <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
               <button class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></button>
            </form>
         </td>
         <td  style="text-align: center;">
            <form name="proimg" method="post" action="{$PAG_PRODUTO_IMG}">
               <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
               <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
               <button class="btn_warning" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-images"></i></button>
            </form>
         </td>
      </tr>
      {/foreach}
   </table>
</section>