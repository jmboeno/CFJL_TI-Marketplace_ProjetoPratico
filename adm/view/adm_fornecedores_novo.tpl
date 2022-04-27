<section class="container">
   <br>
   <h4>Cadastrar Fornecedor</h4>
   <hr>
   <br>
</section>
<section class="container" style="margin-bottom: 50px;">
   <div class="area_direita" style="float: none; margin: 0 auto;">
      <div class="center_form">
        <form name="cadfornecedor" id="cadfornecedor" method="post" action="">
      
            <label for="">Nome</label>       
            <input type="text" name="forn_nome" minlength="3" required>     
       
            <label for="">IE</label>         
            <input type="text" name="forn_ie" required>      
 
            <label for="">CNPJ</label>       
            <input type="text" name="forn_cnpj" minlength="11" maxlength="11" required>       
      
            <label for="">DDD</label>        
            <input type="number" name="forn_ddd" min="10" max="99" required>      
       
            <label for="">Fone</label>       
            <input type="number" name="forn_fone" required>     
       
            <label for="">Celular</label>       
            <input type="number" name="forn_celular" required>     
        
            <label for="">Endereço</label>         
            <input type="text" name="forn_endereco" minlength="3" required>       
        
            <label for="">Número</label>        
            <input type="text" name="forn_numero" required>     
      
            <label for="">Bairro</label>        
            <input type="text" name="forn_bairro" minlength="3" required>      

            <label for="">Cidade</label>        
            <input type="text" name="forn_cidade" minlength="3" required>      
    
            <label for="">UF</label>         
            <input type="text" name="forn_uf" maxlength="2" minlength="2" required>     
     
            <label for="">CEP</label>        
            <input type="text" name="forn_cep" minlength="8" maxlength="8" required>       
      
            <label for="">E-mail</label>        
            <input type="email" name="forn_email" class="form-control" required>            
       
          <input type="submit" value="Cadastrar" class="btn_sucesso" name="btn_gravar" style="cursor: pointer;">     
         </div>              
         </form>
      </div>
   </div>
</section>