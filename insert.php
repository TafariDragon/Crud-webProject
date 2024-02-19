<?php
  if(isset($_POST["cadastrar"]))
  {
     $nome = $_POST["nome"];
     $telefone =$_POST["telefone"];
     $email = $_POST["email"];
     include_once('config.php');
     $res=$conexao->prepare("insert into 2l4lds1 (nome,telefone,email) values (:nome,:telefone,:email)");

     //Diferença entre bindparam e bindvalue é que o bindvalue posso passar variaveis 
     //e textos como valor enqanto e o bindparam so posso passar variaveis

     $res->bindValue(":nome",$nome);
     $res->bindValue(":telefone",$telefone);
     $res->bindValue(":email",$email);

     $res->execute();
  }
?> 