<section class="container">
   <br>
   <h4>Gerenciar Categorias</h4>
   <hr>
   <br>
</section>
<!-- section listar categorias -->
<section  class="container" style="margin-bottom: 50px;">
<div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
       <form name="categoriainsere" method="post" action="" style="border: 1px solid #000; border-radius: 10px;">        
            <input type="text" name="cate_nome" required>  
            <button  name="cate_nova" value="cate_nova" class="btn_sucesso" style="cursor: pointer; width: 100%; font-size: 1.2em; padding: 4px;"> Inserir nova </button>          
    </form>
    <table  style="width: 100%; margin: 10px 0;">
        
      
        {foreach from=$CATEGORIAS item=C}
            <form name="categorias_editar" method="post" action="">
               
                <tr>

                    <td style="width: 80%">
                         <input type="text" name="cate_nome" value="{$C.cate_nome}" style="width: 90%;" required> 
                          <input type="hidden" name="cate_id" value="{$C.cate_id}">
                    </td>
                       
                    <td style="text-align: center;">
                        <button  name="cate_editar" value="cate_editar" class="btn_infoblue" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-pen"></i></button>
                    </td>
                   
                    <td style="text-align: center;">
                        <button name="cate_apagar" value="cate_apagar"  class="btn_danger" style="cursor: pointer; padding: 4px 5px;"><i class="fas fa-trash"></i></button>
                    </td>


                </tr>        

            </form>
            
        {/foreach}
        
    </table>
   </div>
</div>
    
    
</section>