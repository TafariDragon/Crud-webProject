<?php
  if(isset($_POST["eliminar"]))
  {
    $idEstudante = $_POST["idEstudante"];
     
    include_once('config.php');

    $res= $conexao->prepare("delete from 2l4lds1 where id2l4lds1=:id");
    $res->bindValue(":id",$idEstudante);
    $res->execute();
  }
?>