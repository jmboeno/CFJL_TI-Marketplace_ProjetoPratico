<?php 

$smarty = new Template();
$fornecedores = new Fornecedores();




     

if(isset($_POST['forn_nome']) and isset($_POST['forn_email']) and isset($_POST['forn_cnpj'])){
     //variaveis
      $forn_id = $_POST['forn_id'];
      $forn_nome = $_POST['forn_nome'];
     $forn_ie        = $_POST['forn_ie'];
     $forn_cnpj       = $_POST['forn_cnpj'];
     $forn_ddd       = $_POST['forn_ddd'];
     $forn_fone      = $_POST['forn_fone'];
     $forn_celular   = $_POST['forn_celular'];
     $forn_endereco  = $_POST['forn_endereco'];
     $forn_numero    = $_POST['forn_numero'];
     $forn_bairro    = $_POST['forn_bairro'];
     $forn_cidade    = $_POST['forn_cidade'];
     $forn_uf        = $_POST['forn_uf'];
     $forn_cep       = $_POST['forn_cep'];
     $forn_email     = $_POST['forn_email'];
     $forn_senha     = "";
     $forn_data_cad  = "";
     $forn_hora_cad  = "";



    


     

     $clientes->Preparar($forn_nome, $forn_ie, $forn_cnpj, $forn_ddd, $forn_fone, $forn_celular, $forn_endereco, $forn_numero, $forn_bairro, $forn_cidade, $forn_uf, $forn_cep, $forn_email, $forn_data_cad, $forn_hora_cad, $forn_senha);

     if(!$fornecedores->EditarADM($forn_id)){
          echo '<script>alert("Ocorreu um erro ao editar os dados")</script>';

               exit();
     }else{
          
          echo '<script>alert("Dados atualizados com sucesso!")
          </script>';
          Rotas::Redirecionar(1, Rotas::pag_FornecedoresADM());

          
     }

}
else{
     if(isset(Rotas::$pag[1])){
          $id = Rotas::$pag[1];
     }else{
          $id = 0;
     }

     $id = Rotas::$pag[1];
     $fornecedores->GetFornecedoresID($id);
     foreach($fornecedores->GetItens()[1] as $campo => $valor){

          $smarty->assign(strtoupper($campo), $valor);
     }


     $smarty->display('adm_fornecedores_editar.tpl');

}


 ?>