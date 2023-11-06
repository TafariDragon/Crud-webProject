<?php
  if(isset($_POST["cadastrar"]))
  {
     $nome = $_POST["nome"];
     $apelido = $_POST["apelido"];
     $curso =$_POST["selector"];
     $NumBI = $_POST["NumBI"];

     include_once('config.php');
     $result = mysqli_query($conexao,"INSERT INTO estudante (Nome,curso,NumBI ) values ('$nome','$curso','$NumBI')");

  }
?>