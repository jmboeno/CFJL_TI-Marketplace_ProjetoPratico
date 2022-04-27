<section class="container">
   <br>
   <h4>Editar Fornecedor</h4>
   <hr>
   <br>
</section>
<section class="container">
   <div class="area_direita" style="float: none; margin: 0 auto;">
   <div class="center_form">
      <form name="cadfornecedor" id="cadfornecedor" method="post" action="">
         <section  id="cadastro">
            <div >
               <label>Nome:</label>
               <input type="text" value="{$FORN_NOME}" name="FORN_NOME"  minlength="3" required>
            </div>
            <div >
               <label>IE:</label>
               <input type="text" value="{$FORN_IE}" name="FORN_IE"  required>
            </div>
            <div >
               <label>CNPJ:</label>
               <input type="text" value="{$FORN_CNPJ}" name="FORN_CNPJ"  minlength="11" maxlength="11" required>
            </div>
            <div >
               <label>DDD:</label>
               <input type="number" value="{$FORN_DDD}" name="FORN_DDD"   min="10" max="99" required>
            </div>
            <div >
               <label>Fone:</label>
               <input type="number" value="{$FORN_FONE}" name="FORN_FONE"  required>
            </div>
            <div >
               <label>Celular:</label>
               <input type="number" value="{$FORN_CELULAR}" name="FORN_CELULAR"  required>
            </div>
            <div >
               <label>Endereço:</label>
               <input type="text" value="{$FORN_ENDERECO}" name="FORN_ENDERECO"   minlength="3" required>
            </div>
            <div >
               <label>Numero:</label>
               <input type="text" value="{$FORN_NUMERO}" name="FORN_NUMERO"  required>
            </div>
            <div >
               <label>Bairro:</label>
               <input type="text" value="{$FORN_BAIRRO}" name="FORN_BAIRRO"  minlength="3" required>
            </div>
            <div >
               <label>Cidade:</label>
               <input type="text" value="{$FORN_CIDADE}" name="FORN_CIDADE"  minlength="3" required>
            </div>
            <div >
               <label>UF:</label>
               <input type="text" value="{$FORN_UF}"name="FORN_UF"  maxlength="2" minlength="2" required>
            </div>
            <div >
               <label>Cep:</label>
               <input type="text" value="{$FORN_CEP}" name="FORN_CEP"  minlength="8" maxlength="8" required>
            </div>
            <div >
               <label>Email:</label>
               <input type="email" value="{$FORN_EMAIL}" name="FORN_EMAIL"  required>
            </div>
         </section>
         <br>
         <br>
         <section  id="btngravar">
            <div ></div>
            <div >
               <input type="hidden" name="FORN_ID" value="{$FORN_ID}"  required>
               <br>
               <input type="submit" value="Salvar" class="btn_sucesso" style="cursor: pointer; width: 50%;" >
         </section>
      </form>
      </div>
   </div>
</section>