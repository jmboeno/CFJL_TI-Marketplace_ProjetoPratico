<section class="container">
   <br>
   <h4>Editar Cliente</h4>
   <hr>
   <br>
</section>
<section class="container">
   <div class="area_direita" style="float: none; margin: 0 auto;">
   <div class="center_form">
      <form name="cadcliente" id="cadcliente" method="post" action="">
         <section  id="cadastro">
            <div >
               <label>Nome:</label>
               <input type="text" value="{$CLI_NOME}" name="cli_nome"  minlength="3" required>
            </div>
            <div >
               <label>Sobrenome:</label>
               <input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome"   minlength="3" required>
            </div>
            <div >
               <label>Data Nasc:</label>
               <input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc"  required>
            </div>
            <div >
               <label>RG:</label>
               <input type="text" value="{$CLI_RG}" name="cli_rg"  required>
            </div>
            <div >
               <label>CPF:</label>
               <input type="text" value="{$CLI_CPF}" name="cli_cpf"  minlength="11" maxlength="11" required>
            </div>
            <div >
               <label>DDD:</label>
               <input type="number" value="{$CLI_DDD}" name="cli_ddd"   min="10" max="99" required>
            </div>
            <div >
               <label>Fone:</label>
               <input type="number" value="{$CLI_FONE}" name="cli_fone"  required>
            </div>
            <div >
               <label>Celular:</label>
               <input type="number" value="{$CLI_CELULAR}" name="cli_celular"  required>
            </div>
            <div >
               <label>Endereço:</label>
               <input type="text" value="{$CLI_ENDERECO}" name="cli_endereco"   minlength="3" required>
            </div>
            <div >
               <label>Numero:</label>
               <input type="text" value="{$CLI_NUMERO}" name="cli_numero"  required>
            </div>
            <div >
               <label>Bairro:</label>
               <input type="text" value="{$CLI_BAIRRO}" name="cli_bairro"  minlength="3" required>
            </div>
            <div >
               <label>Cidade:</label>
               <input type="text" value="{$CLI_CIDADE}" name="cli_cidade"  minlength="3" required>
            </div>
            <div >
               <label>UF:</label>
               <input type="text" value="{$CLI_UF}"name="cli_uf"  maxlength="2" minlength="2" required>
            </div>
            <div >
               <label>Cep:</label>
               <input type="text" value="{$CLI_CEP}" name="cli_cep"  minlength="8" maxlength="8" required>
            </div>
            <div >
               <label>Email:</label>
               <input type="email" value="{$CLI_EMAIL}" name="cli_email"  required>
            </div>
         </section>
         <br>
         <br>
         <section  id="btngravar">
            <div ></div>
            <div >
               <input type="hidden" name="cli_id" value="{$CLI_ID}"  required>
               <br>
               <input type="submit" value="Salvar" class="btn_sucesso" style="cursor: pointer; width: 50%;" >
         </section>
      </form>
      </div>
   </div>
</section>