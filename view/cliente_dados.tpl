<section class="container">
<div class="area_direita">
				<h2>Meus Dados</h2>
				<br>
				<hr>
				<br>
				<div class="center_form" id="cadastro">
					<form name="cadcliente" id="cadcliente" method="post" action="">

						<label> Nome:</label>
						<input type="text" value="{$CLI_NOME}" name="cli_nome" minlength="3" required>

						<label>Sobrenome:</label>
           				<input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" minlength="3" required>

						<label>Data Nasc:</label>
            			<input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" required>

            			<label>RG:</label>
           				<input type="text" value="{$CLI_RG}" name="cli_rg" required>

						<label>CPF:</label>
            			<input type="text" value="{$CLI_CPF}" name="cli_cpf" minlength="11" maxlength="11" required readonly>

						<label>DDD:</label>
            			<input type="number" value="{$CLI_DDD}" name="cli_ddd" min="10" max="99" required>

						<label>Fone:</label>
           				<input type="number" value="{$CLI_FONE}" name="cli_fone" required>

			            <label>Celular:</label>
            			<input type="number" value="{$CLI_CELULAR}" name="cli_celular" required>
  
  			          	<label>Endereço:</label>
            			<input type="text" value="{$CLI_ENDERECO}" name="cli_endereco"  minlength="3" required>
            
            			<label>Numero:</label>
            			<input type="text" value="{$CLI_NUMERO}" name="cli_numero" required>

          				<label>Bairro:</label>
            			<input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" minlength="3" required>
            
			            <label>Cidade:</label>
			            <input type="text" value="{$CLI_CIDADE}" name="cli_cidade" minlength="3" required>
            
			            <label>UF:</label>         
			            <input type="text" value="{$CLI_UF}"name="cli_uf" maxlength="2" minlength="2" required>
			            
            			<label>Cep:</label>
            			<input type="text" value="{$CLI_CEP}" name="cli_cep" minlength="8" maxlength="8" required>

            			<label>Email:</label>
            			<input type="email" value="{$CLI_EMAIL}" name="cli_email" required>
            
						<label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
			           	<input type="password" name="cli_senha" id="cli_senha" class="form-control" required>

			           	<input type="submit" id="salvar_dados_cliente" value="Gravar">
					</form>
				</div>
			</div>
		</section>