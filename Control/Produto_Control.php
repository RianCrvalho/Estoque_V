<?php
include("../Model/Produto_Model.php");
include("../Conexao.php");
session_start();
 Class Produto_Control{
 
 public $dados;
 public $conn;

  function_construct(){
  	$this->dados= new Produto_Model();
  	$this->conn= new Conexao();
  }
 function ProView(){
  $sql="select * from produto";
  $d = $this->conn->Conect();
  $dados =$d->prepare($sql);
  $dados->execute();
  return $dados; 
 }

function adicionar($nome,$quant,$valor){
     $this->dados->setNome($nome);
      $this->dados->setQuant($quant);
      $this->dados->setValor($valor);

      $sql = "SELECT id_pro,nome,quant,valor from produto where nome = :nome;";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":nome", $this->dados->getNome());
      $dados->execute();
      
       $user = $dados->fetchAll();
       if(count($user) == 0){ 
        $this->dados->setNome($nome);
    	$this->dados->setQuant($quant);
    	$this->dados->setValor($valor);
   	 	$sql = "INSERT INTO produto(nome,quant,valor) VALUES (:nome,:quant,:valor);";
    	$d = $this->conn->Conect();
    	$dados = $d->prepare($sql);
    	$dados->bindValue(":nome", $this->dados->getNome());
    	$dados->bindValue(":quant", $this->dados->getQuant());
    	$dados->bindValue(":valor", $this->dados->getValor());
  
            try {
                $dados->execute();
                $_SESSION['cadastrado'] = "false";
                header("Location: ../View/Produto_View.php");
                return true;
            } catch (PDOException $e){
                echo "Erro:".$e->getMessage();
                $_SESSION['cadastrado'] = "true";
                return false;
            }}else{
              
              $miau = $user[0];
              $_SESSION['cadastrado'] = "true";
            }

 
}

function delPro($id_pro){
    $sql = "DELETE FROM produto WHERE id_pro = :id_pro;";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_pro", $id_pro);
    $dados->execute();
    header("Location: ../View/Produto_View.php");
  }


function vender()


 }

  ?>