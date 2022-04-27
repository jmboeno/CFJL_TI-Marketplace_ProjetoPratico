<?php 

class Fornecedores extends Conexao{
     private  $forn_nome ,
            $forn_ie  ,
            $forn_cnpj ,
            $forn_ddd  ,
            $forn_fone ,
            $forn_celular ,
            $forn_endereco ,
            $forn_numero ,
            $forn_bairro ,
            $forn_cidade ,
            $forn_uf ,
            $forn_cep ,
            $forn_email ,
            $forn_data_cad,
            $forn_hora_cad,
            $forn_senha;


    function __construct(){
        parent::__construct();
    }







    function Preparar($forn_nome, $forn_ie,
            $forn_cnpj , $forn_ddd  , $forn_fone , $forn_celular , $forn_endereco , $forn_numero,
            $forn_bairro , $forn_cidade ,$forn_uf ,$forn_cep ,$forn_email , $forn_data_cad,
            $forn_hora_cad, $forn_senha){
        
        
        $this->setForn_nome($forn_nome);
        $this->setForn_ie($forn_ie);
        $this->setForn_cnpj($forn_cnpj);
        $this->setForn_ddd($forn_ddd);
        $this->setForn_fone($forn_fone);
        $this->setForn_celular($forn_celular);
        $this->setForn_endereco($forn_endereco);
        $this->setForn_numero($forn_numero);
        $this->setForn_bairro($forn_bairro);
        $this->setForn_cidade($forn_cidade);
        $this->setForn_uf($forn_uf);
        $this->setForn_cep($forn_cep);
        $this->setForn_email($forn_email);
        $this->setForn_data_cad($forn_data_cad);
        $this->setForn_hora_cad($forn_hora_cad);
        $this->setForn_senha($forn_senha);
        
        
    }



     function GetFornecedores(){
        
        $query = "SELECT * FROM {$this->prefix}fornecedores ";
        
        $this->ExecuteSQL($query);
        
        $this->GetLista();
        
        
    }
   /**
    * 
    * @param INT $id id do fornecedor 
    */
    function GetFornecedoresID($id){
        
        // monto a SQL
        $query  = "SELECT * FROM {$this->prefix}fornecedores WHERE forn_id = :id";
        // passo parametros
        $params = array(':id'=>(int)$id);
        //executo a SQL
        $this->ExecuteSQL($query, $params);
        // chamo a listagem 
        $this->GetLista();
        
        
    }


/**
 * fazendo a listagem dos dados retornados 
 */
 private function GetLista(){
        
        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
        
             'forn_id'        =>  $lista['forn_id'],
             'forn_nome'      =>  $lista['forn_nome'],
             'forn_endereco'  =>  $lista['forn_endereco'],
             'forn_numero'    =>  $lista['forn_numero'],
             'forn_bairro'    =>  $lista['forn_bairro'],
             'forn_cidade'    =>  $lista['forn_cidade'],
             'forn_uf'        =>  $lista['forn_uf'],
             'forn_cnpj'       =>  $lista['forn_cnpj'],
             'forn_cep'       =>  $lista['forn_cep'],
             'forn_ie'        =>  $lista['forn_ie'],
             'forn_ddd'       =>  $lista['forn_ddd'],
             'forn_fone'      =>  $lista['forn_fone'],
             'forn_email'     =>  $lista['forn_email'],
             'forn_celular'   =>  $lista['forn_celular'],
             'forn_pass'      =>  $lista['forn_pass'],
             'forn_hora_cad'  => $lista['forn_hora_cad'],
             'forn_data_cad'  =>  Sistema::Fdata($lista['forn_data_cad']),
        );
        
        
            $i++;
        
        endwhile;
        
        
    }


    



    function Inserir(){
        if($this->GetFornecedorCNPJ($this->getForn_cnpj()) > 0){
            echo '<h3 class="alerta pulse">Esse CNPJ já está cadastrado!</h3></script>';
            echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/alerta.gif" style="width: 100%;"> </div>';
            Rotas::Redirecionar(2, Rotas::pag_FornecedorCadastro());
            exit();
        }

        if($this->GetFornecedorEmail($this->getForn_email()) > 0){
            echo '<h3 class="alerta pulse">Esse Email já está cadastrado!</h3></script>';
            echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/alerta.gif" style="width: 100%;"> </div>';
            Rotas::Redirecionar(2, Rotas::pag_FornecedorCadastro());
            exit();
        }

        //INSERIR OS DADOS

        //query para inserir clientes

  $query = " INSERT INTO {$this->prefix}fornecedores (forn_nome, forn_ie,";
        $query .=" forn_cnpj, forn_ddd, forn_fone, forn_celular ,forn_endereco ,forn_numero,forn_bairro ,";
        $query .=" forn_cidade ,forn_uf ,forn_cep ,forn_email ,forn_data_cad, forn_hora_cad, forn_pass)";   
        $query .=" VALUES ";
        $query .=" (:forn_nome, :forn_ie,";
        $query .=" :forn_cnpj, :forn_ddd,:forn_fone,:forn_celular ,:forn_endereco ,:forn_numero,:forn_bairro ,";
        $query .=" :forn_cidade ,:forn_uf ,:forn_cep ,:forn_email ,:forn_data_cad, :forn_hora_cad, :forn_senha)";  
   
        $params = array(
        ':forn_nome'     => $this->getForn_nome() ,    
        ':forn_ie'       => $this->getForn_ie() ,   
        ':forn_cnpj'      => $this->getForn_cnpj() ,   
        ':forn_ddd'      => $this->getForn_ddd() ,   
        ':forn_fone'     => $this->getForn_fone() ,   
        ':forn_celular'  => $this->getForn_celular() ,   
        ':forn_endereco' => $this->getForn_endereco() ,   
        ':forn_numero'   => $this->getForn_numero() ,   
        ':forn_bairro'   => $this->getForn_bairro() ,   
        ':forn_cidade'   => $this->getForn_cidade() ,   
        ':forn_uf'       => $this->getForn_uf() ,   
        ':forn_cep'      => $this->getForn_cep() ,   
        ':forn_email'    => $this->getForn_email() ,   
        ':forn_data_cad' => $this->getForn_data_cad() ,   
        ':forn_hora_cad' => $this->getForn_hora_cad() ,   
        ':forn_senha'    => $this->getForn_senha(),  
            
        );
        
      
            
            $this->ExecuteSQL($query, $params);
           
            
      

    }






    //MÉTODO EDITAR
    function Editar($id){
        
              
          // verifico se ja tem este CPF no banco
        if($this->GetFornecedorCNPJ($this->getForn_cnpj()) > 0 && $this->getForn_cnpj() != $_SESSION['FORN']['forn_cnpj']):
                echo '<h3 class="alerta pulse">Esse CNPJ já está cadastrado!</h3></script>';
                echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/alerta.gif" style="width: 100%;"> </div>';
                Rotas::Redirecionar(2, Rotas::pag_FornecedorCadastro());
                exit();
        endif;
          // verifica se o email já esta cadastrado 
          if($this->GetFornecedorEmail($this->getForn_email()) > 0 && $this->getForn_email() != $_SESSION['FORN']['forn_email']):
                echo '<h3 class="alerta pulse">Esse Email já está cadastrado!</h3></script>';
                echo '<div class="alerta" style="width: 250px;"> <img src="view/tema/images/alerta.gif" style="width: 100%;"> </div>';
                Rotas::Redirecionar(2, Rotas::pag_FornecedorCadastro());
                exit();
        endif;
        
        
        // caso passou na verificação grava no banco
        
        $query = " UPDATE {$this->prefix}fornecedores SET forn_nome=:forn_nome, forn_ie=:forn_ie,";
        $query .=" forn_cnpj=:forn_cnpj, forn_ddd=:forn_ddd,forn_fone=:forn_fone,forn_celular=:forn_celular ,forn_endereco=:forn_endereco ,forn_numero=:forn_numero,forn_bairro=:forn_bairro ,";
        $query .=" forn_cidade=:forn_cidade ,forn_uf=:forn_uf ,forn_cep=:forn_cep ,forn_email=:forn_email ,forn_data_cad=:forn_data_cad, forn_hora_cad=:forn_hora_cad, forn_pass=:forn_senha ";   
        $query .=" WHERE  forn_id = :forn_id";

   
        $params = array(
        ':forn_nome'     => $this->getForn_nome() ,      
        ':forn_ie'       => $this->getForn_ie() ,   
        ':forn_cnpj'      => $this->getForn_cnpj() ,   
        ':forn_ddd'      => $this->getForn_ddd() ,   
        ':forn_fone'     => $this->getForn_fone() ,   
        ':forn_celular'  => $this->getForn_celular() ,   
        ':forn_endereco' => $this->getForn_endereco() ,   
        ':forn_numero'   => $this->getForn_numero() ,   
        ':forn_bairro'   => $this->getForn_bairro() ,   
        ':forn_cidade'   => $this->getForn_cidade() ,   
        ':forn_uf'       => $this->getForn_uf() ,   
        ':forn_cep'      => $this->getForn_cep() ,   
        ':forn_email'    => $this->getForn_email() ,   
        ':forn_data_cad' => $this->getForn_data_cad() ,   
        ':forn_hora_cad' => $this->getForn_hora_cad() ,   
        ':forn_senha'    => $this->getForn_senha(),  
        ':forn_id'       => (int)$id   
            
        );
        
      //  echo $query;
        
                   
            if($this->ExecuteSQL($query, $params)):
                
                    return true;
                
            else:
                
                    return false;
            endif;

        
    }





    function EditarADM($id){
        
       
              
          // verifico se ja tem este CPF no banco
        if($this->GetFornecedorCNPF($this->getForn_cnpj()) > 0 && $this->getForn_cnpj() != $_REQUEST['forn_cnpj']):
                echo '<div> Este CNPJ já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
          // verifica se o email já esta cadstrado 
          if($this->GetFornecedorEmail($this->getForn_email()) > 0 && $this->getForn_email() !=  $_REQUEST['forn_email']):
                echo '<div> Este Email já esta cadastrado ';
                Sistema::VoltarPagina();
                echo '</div>';
                exit();
        endif;
        
        
        // caso passou na verificação grava no banco
        
        $query = " UPDATE {$this->prefix}fornecedores SET forn_nome=:forn_nome, forn_ie=:forn_ie,";
        $query .=" forn_cnpj=:forn_cnpj, forn_ddd=:forn_ddd,forn_fone=:forn_fone,forn_celular=:forn_celular ,forn_endereco=:forn_endereco ,forn_numero=:forn_numero,forn_bairro=:forn_bairro ,";
        $query .=" forn_cidade=:forn_cidade ,forn_uf=:forn_uf ,forn_cep=:forn_cep ,forn_email=:forn_email";   
        $query .=" WHERE  forn_id = :forn_id";

   
        $params = array(
        ':forn_nome'     => $this->getForn_nome() ,    
        ':forn_ie'       => $this->getForn_ie() ,   
        ':forn_cnpj'      => $this->getForn_cnpj() ,   
        ':forn_ddd'      => $this->getForn_ddd() ,   
        ':forn_fone'     => $this->getForn_fone() ,   
        ':forn_celular'  => $this->getForn_celular() ,   
        ':forn_endereco' => $this->getForn_endereco() ,   
        ':forn_numero'   => $this->getForn_numero() ,   
        ':forn_bairro'   => $this->getForn_bairro() ,   
        ':forn_cidade'   => $this->getForn_cidade() ,   
        ':forn_uf'       => $this->getForn_uf() ,   
        ':forn_cep'      => $this->getForn_cep() ,   
        ':forn_email'    => $this->getForn_email() ,  
        ':forn_id'       => (int)$id   
            
        );
        
      //  echo $query;
        
                   
            if($this->ExecuteSQL($query, $params)):
                
                    return true;
                
            else:
                
                    return false;
            endif;

        
    }







    //BUSCAR SE O CPF DO CLIENTE JÁ EXISTE
    function GetFornecedorCNPJ($cnpj){
        $query = "SELECT * FROM {$this->prefix}fornecedores ";
        $query .= " WHERE forn_cnpj = :cnpj ";
        $params = array(':cnpj'=> $cnpj);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }


    function GetFornecedorEmail($email){
        $query = "SELECT * FROM {$this->prefix}fornecedores ";
        $query .= " WHERE forn_email = :email ";
        $params = array(':email'=> $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }


    function SenhaUpdate($senha, $email){
        $query = "UPDATE {$this->prefix}fornecedores SET forn_pass = :senha";
        $query .= " WHERE forn_email = :email ";
        $this->setForn_senha($senha);
        $this->setForn_email($email);
        $params = array(':senha'=> $this->getForn_senha(), ':email'=> $this->getForn_email());
        $this->ExecuteSQL($query, $params);
    }






    // GETTERS retornando os dados do cliente 
    
    
    function getForn_nome() {
        return $this->forn_nome;
    }

    function getForn_ie() {
        return $this->forn_ie;
    }

    function getForn_cnpj() {
      
        
        return $this->forn_cnpj;
    
        
    }

    function getForn_ddd() {
        return $this->forn_ddd;
    }

    function getForn_fone() {
        return $this->forn_fone;
    }

    function getForn_celular() {
        return $this->forn_celular;
    }

    function getForn_endereco() {
        return $this->forn_endereco;
    }
    
    function getForn_numero(){
        
        return $this->forn_numero;
        
    }
    function getForn_bairro() {
        return $this->forn_bairro;
    }

    function getForn_cidade() {
        return $this->forn_cidade;
    }

    function getForn_uf() {
        return $this->forn_uf;
    }

    function getForn_cep() {
        return $this->forn_cep;
    }

    function getForn_email() {
        return $this->forn_email;
    }

    function getForn_data_cad() {
        return $this->forn_data_cad;
    }

    function getForn_hora_cad() {
        return $this->forn_hora_cad;
    }

    function getForn_senha() {
        return $this->forn_senha;
    }





    //  SETTERS do cliente 
    
    function setForn_nome($forn_nome) {
       
        if(strlen($forn_nome) < 3):
            
            
              echo '<div> Digite o nome da empresa ';
                Sistema::VoltarPagina();
                echo '</div>';
           
            
            else:
            
            $this->forn_nome = $forn_nome;   
        endif;
        
     
    
        
    }


    function setForn_ie($forn_ie) {
        $this->forn_ie = $forn_ie;
    }

    function setForn_cnpj($forn_cnpj) {
        

        
          $this->forn_cnpj = $forn_cnpj;   
       
    }

    function setForn_ddd($forn_ddd) {
        
         $ddd = filter_var($forn_ddd, FILTER_SANITIZE_NUMBER_INT);

        
        if(strlen($ddd) != 2):
                echo '<div> DDD incorreto ';
                Sistema::VoltarPagina();
                echo '</div>';
           
           else:
           $this->forn_ddd = $forn_ddd;
           
       endif;
            
    }

    function setForn_fone($forn_fone) {
        $this->forn_fone = $forn_fone;
    }

    function setForn_celular($forn_celular) {
        $this->forn_celular = $forn_celular;
    }

    function setForn_endereco($forn_endereco) {
        $this->forn_endereco = $forn_endereco;
    }
    
    function setForn_numero($forn_numero){
        
        $this->forn_numero = $forn_numero;
    }
                
    function setForn_bairro($forn_bairro) {
        $this->forn_bairro = $forn_bairro;
    }

    function setForn_cidade($forn_cidade) {
        $this->forn_cidade = $forn_cidade;
    }

    function setForn_uf($forn_uf) {
        
         $uf = filter_var($forn_uf, FILTER_SANITIZE_STRING);
        
       if(strlen($uf) != 2): // 11111
                echo '<div> UF incorreto ';
                Sistema::VoltarPagina();
                echo '</div>';
           
           else:
           $this->forn_uf = $forn_uf;
           
       endif;
            
    }

    function setForn_cep($forn_cep) {
        
       $cep = filter_var($forn_cep, FILTER_SANITIZE_NUMBER_INT);
        
       if(strlen($cep) != 8):
                echo '<div> CEP incorreto, digite apenas números!! ';
                Sistema::VoltarPagina();
                echo '</div>';
           
           else:
           $this->forn_cep = $forn_cep;
           
       endif;
            
       
        
    }

    function setForn_email($forn_email) {
        
        if(!filter_var($forn_email, FILTER_VALIDATE_EMAIL)):
            
                echo '<div> Email incorreto ';
                Sistema::VoltarPagina();
                echo '</div>';
            
            exit();
            
        else:
            
                $this->forn_email = $forn_email;
        endif;
        
    
        
    }

    function setForn_data_cad($forn_data_cad) {
        $this->forn_data_cad = $forn_data_cad;
    }

    function setForn_hora_cad($forn_hora_cad) {
        $this->forn_hora_cad = $forn_hora_cad;
    }

    function setForn_senha($forn_senha) {
       
        $this->forn_senha = md5($forn_senha);
        // 123 => md5 = 18513ba35987a447b98f075bd226a1fc
    }


    

}





 ?>