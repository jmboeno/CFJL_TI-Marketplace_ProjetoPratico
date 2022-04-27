<section class="container" style="margin-top: 50px;">

	<h1 class="titulo_pag">Cadastro de Fornecedores</h1>
	<hr>

	<div class="auto_cadastro" id="cadastro">

		<form name="cadfornecedor" id="cadfornecedor" method="post" action="">

			<h4 style="margin: 10px 0">Informações do Fornecedor</h4>
			
			<div class="form_grupo" style="float: left; width: 36%; margin: 0;">	      
				<label for="">Nome</label>	      
				<input type="text" name="forn_nome" minlength="3" required>	    
			</div>	

		    <div class="form_grupo" style="float: left; width: 19%; margin-left: 0%;"> 	      
		    	<label for="">IE</label>	      
		    	<input type="text" name="forn_ie" required>	    
		    </div>
		    
		    <div class="form_grupo" style="float: left; width: 19%; margin-left: 4%;"> 	      
		    	<label for="">CNPJ</label>	      
		    	<input type="text" name="forn_cnpj" minlength="11" maxlength="11" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 6%; margin-left: 4%;"> 	      
		    	<label for="">DDD</label>	      
		    	<input type="number" name="forn_ddd" min="10" max="99" required>	    
		    </div>
    		
    		<div class="form_grupo" style="float: left; width: 20%; margin-left: 4%;"> 	      
		    	<label for="">Fone</label>	      
		    	<input type="number" name="forn_fone" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 20%; margin-left: 4%; margin-bottom: 15px;"> 	      
		    	<label for="">Celular</label>	      
		    	<input type="number" name="forn_celular" required>	    
		    </div>

		    <hr>

		    <h4 style="margin: 10px 0;">Informações de Endereço</h4>

			<div class="form_grupo" style="float: left; width: 54%; margin: 0;"> 	      
				<label for="">Endereço</label>	      
				<input type="text" name="forn_endereco" minlength="3" required>	    
			</div>	

			<div class="form_grupo" style="float: left; width: 10%; margin-left: 4%;"> 	      
		    	<label for="">Número</label>	      
		    	<input type="text" name="forn_numero" required>	    
		    </div>

		    <div class="form_grupo" style="float: left; width: 28%; margin-left: 4%;"> 	      
		    	<label for="">Bairro</label>	      
		    	<input type="text" name="forn_bairro" minlength="3" required>	    
		    </div>	 

		    <div class="form_grupo" style="float: left; width: 30%; margin: 0;">       
		    	<label for="">Cidade</label>	      
		    	<input type="text" name="forn_cidade" minlength="3" required>	    
		    </div>	    	     
    
			<div class="form_grupo" style="float: left; width: 8%; margin-left: 4%;"> 	      
				<label for="">UF</label>	      
				<input type="text" name="forn_uf" maxlength="2" minlength="2" required>	    
			</div>	

			<div class="form_grupo" style="float: left; width: 20%; margin-left: 4%;">       
				<label for="">CEP</label>	      
				<input type="text" name="forn_cep" minlength="8" maxlength="8" required>	    
			</div>

			 <div class="form_grupo" style="float: left; width: 30%; margin-left: 4%;">       
		    	<label for="">E-mail</label>	      
		    	<input type="email" name="forn_email" class="form-control" required>	    
		    </div>	    	     	  
	    
			<div id="btngravar" class="form_grupo" style="clear: both;">	      	      
				<a href="index.php"><button class="btn_danger" style="width: 40%; height: 50px; margin: 4.9%; cursor: pointer;">Cancelar</button></a>
				<button type="submit" class="btn_sucesso" style="width: 40%; height: 50px; margin: 4.9%; cursor: pointer;">Salvar</button>	    
			</div>	  		  	  

		</form>

	</div>

</section>
