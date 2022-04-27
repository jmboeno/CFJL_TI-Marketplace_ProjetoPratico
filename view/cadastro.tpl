<section class="container" style="margin-top: 50px;">

	<h1 class="titulo_pag">Cadastro</h1>
	<hr>

	<div class="auto_cadastro" id="cadastro">

		<form name="cadcliente" id="cadcliente" method="post" action="">

			<h4 style="margin: 10px 0">Informações Pessoais</h4>
			
			<div class="form_grupo" style="float: left; width: 36%; margin: 0;">	      
				<label for="">Nome</label>	      
				<input type="text" name="cli_nome" minlength="3" required>	    
			</div>	

			<div class="form_grupo" style="float: left; width: 36%; margin-left: 4%;">	      
				<label for="">Sobrenome</label>	      
				<input type="text" name="cli_sobrenome" minlength="3" required>	    
			</div>

			<div class="form_grupo" style="float: left; width: 20%; margin-left: 4%;">       
		    	<label for="">Data de Nascimento</label>	      
		    	<input type="date" name="cli_data_nasc" required>	    
		    </div>	  

		    <div class="form_grupo" style="float: left; width: 19%; margin-left: 0%;"> 	      
		    	<label for="">RG</label>	      
		    	<input type="text" name="cli_rg" required>	    
		    </div>
		    
		    <div class="form_grupo" style="float: left; width: 19%; margin-left: 4%;"> 	      
		    	<label for="">CPF</label>	      
		    	<input type="text" name="cli_cpf" minlength="11" maxlength="11" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 6%; margin-left: 4%;"> 	      
		    	<label for="">DDD</label>	      
		    	<input type="number" name="cli_ddd" min="10" max="99" required>	    
		    </div>
    		
    		<div class="form_grupo" style="float: left; width: 20%; margin-left: 4%;"> 	      
		    	<label for="">Fone</label>	      
		    	<input type="number" name="cli_fone" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 20%; margin-left: 4%; margin-bottom: 15px;"> 	      
		    	<label for="">Celular</label>	      
		    	<input type="number" name="cli_celular" required>	    
		    </div>

		    <hr>

		    <h4 style="margin: 10px 0;">Informações de Endereço</h4>

			<div class="form_grupo" style="float: left; width: 54%; margin: 0;"> 	      
				<label for="">Endereço</label>	      
				<input type="text" name="cli_endereco" minlength="3" required>	    
			</div>	

			<div class="form_grupo" style="float: left; width: 10%; margin-left: 4%;"> 	      
		    	<label for="">Número</label>	      
		    	<input type="text" name="cli_numero" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 28%; margin-left: 4%;"> 	      
		    	<label for="">Bairro</label>	      
		    	<input type="text" name="cli_bairro" minlength="3" required>	    
		    </div>	 

		    <div class="form_grupo" style="float: left; width: 30%; margin: 0;">       
		    	<label for="">Cidade</label>	      
		    	<input type="text" name="cli_cidade" minlength="3" required>	    
		    </div>	    	     
    
			<div class="form_grupo" style="float: left; width: 8%; margin-left: 4%;"> 	      
				<label for="">UF</label>	      
				<input type="text" name="cli_uf" maxlength="2" minlength="2" required>	    
			</div>	

			<div class="form_grupo" style="float: left; width: 20%; margin-left: 4%;">       
				<label for="">CEP</label>	      
				<input type="text" name="cli_cep" minlength="8" maxlength="8" required>	    
			</div>

			 <div class="form_grupo" style="float: left; width: 30%; margin-left: 4%;">       
		    	<label for="">E-mail</label>	      
		    	<input type="email" name="cli_email" class="form-control" required>	    
		    </div>	    	     	  
	    
			<div id="btngravar" class="form_grupo" style="clear: both;">	      	      
				<a href="index.php"><button class="btn_danger" style="width: 40%; height: 50px; margin: 4.9%; cursor: pointer;">Cancelar</button></a>
				<button type="submit" class="btn_sucesso" style="width: 40%; height: 50px; margin: 4.9%; cursor: pointer;">Salvar</button>	    
			</div>	  		  	  

		</form>

	</div>

</section>
