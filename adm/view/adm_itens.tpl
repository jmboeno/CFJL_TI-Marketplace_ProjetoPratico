<section class="container">
   <br>
   <h4>Dados do Pedido</h4>
   <hr>
   <br>
</section>

<!-- informações sobre o pedido -->
<section class="container">
    
 
    <table>
        <tr style="    background-color: #fff; color: #000;">
            
            <td><b>Data:</b> {$ITENS.1.ped_data}</td>
            
            <td><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            
            <td><b>Ref:</b> {$ITENS.1.ped_ref}</td>
            
            <td><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
            
        </tr>  
        
        
    </table>

    
</section>


<!-- listagem dos itens -->
<section class="container">
    <table>
        
        <tr style="    background-color: rgba(102, 51, 153, 1); color: #fff;">
            <td></td>
            <td>Item</td>
            <td>Valor Unitário</td>
            <td>Quantidade</td>
            <td>Sub Total</td>
        </tr>
        
        {foreach from=$ITENS item=P}
        <tr>
            
            <td><img src="{$P.item_img}" alt=""> </td>
            <td> {$P.item_nome}</td>
            <td > {$P.item_valor}</td>
            <td > {$P.item_qtd}</td>
            <td > {$P.item_sub}</td>
            
        </tr>
        
        {/foreach}
        
        
    </table>

    
    
</section>
        
        
        <section class="container" style="margin-bottom: 100px">

        
                <table>
                    <tr>

                        <td> <b>Frete:</b> {$ITENS.1.ped_frete_valor}</td>

                        <td> <b>Total:</b> {$TOTAL}</td>

                        <td> <b>Final:</b> {$ITENS.1.ped_frete_valor+$TOTAL}</td>

                    </tr>  


                </table>
            

        </section>