<section class="container">
   <br>
   <h4>Imagens do Produto</h4>
   <hr>
   <br>
</section>
<section class="container" id="novaimg" style="margin-bottom: 50px;">
   <div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
   <form name="nova" method="post" action=""  enctype="multipart/form-data" style="border: 1px solid #000; border-radius: 10px;">
      <div>
         <input type="hidden" name="pro_id" value="{$PRO}">
         <input type="file" name="pro_img" required>
      </div>
      <div>
         <button class="btn_sucesso" style="cursor: pointer; width: 100%; font-size: 1.2em; padding: 4px;">Inserir Imagem</button> 
      </div>
   </form>
   <br>
   <br>
   <section id="listarimg">
   <!-- formulario de apagar a foto ou varias -->
   <form name="deletar" method="post" action="">
      <ul style="list-style: none">
         {foreach from=$IMAGES item=I}
         <li style="float: left;
    width: 150px;
    padding: 10px;">
            <img src="{$I.img_nome}" alt="">
            <label>Apagar?</label>
            <input type="checkbox" name="fotos_apagar[]" value="{$I.img_arquivo}" style="float: left; width: 35%;">   
         </li>
         {/foreach}
         <input type="hidden" name="pro_id" value="{$I.img_pro_id}">
      </ul>
      <!--- botao de apagar fotos -->
      <section id="apagar">
         <button class="btn_danger" style="cursor: pointer; width: 100%; font-size: 1.2em; padding: 4px;"> Apagar Marcadas </button>
      </section>
   </form>
</section>
</div>
</div>
</section>