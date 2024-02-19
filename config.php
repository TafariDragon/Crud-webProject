<?php
  
  $conexao;
  try{
    $conexao = new PDO("mysql:host=localhost;dbname=Faculdade","root","");

  }catch(Exception $e)
  {
    echo("erro na conexao".$e);
  }
  
  

?>