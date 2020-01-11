<?php 
Class Produto_Model{
 public $id_pro;
 public $nome;
 public $quant;
 public $valor;

 function_construct(){
 	$this->id_pro = 0;
 	$this->nome = "Sem nome";
 	$this->quant = 0;
 	$this->valor = 0;

 } function setId_pro($id_pro){
 	$this->id_pro=$id_pro;
 }
  function getId_pro(){
  	return $this->id_pro;
  }
  function setNome($nome){
  	$this->nome=$nome;
  }
  function getNome(){
  	return $this->nome;
  }
  function setQuant($quant){
  	$this->quant=$quant;
  }
  function getQuant(){
  	return $this->quant;
  }
  function setValor($valor){
  	$this->valor=$valor;
  }
  function getValor(){
  	return $this->valor;
  }


}
?>