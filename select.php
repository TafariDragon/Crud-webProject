<?php
 
 include_once('config.php');
 $query = "select*from 2l4lds1";
 $result =$conexao->query($query);

 /*
 if ($result) {
    $rowCount = $result->rowCount(); // Obtém o número de linhas retornadas pela consulta
    if ($rowCount > 0) {
        echo "Consulta bem-sucedida. Foram encontrados " . $rowCount . " registros.";
    } else {
        echo "A consulta não retornou registros.";
    }
} else {
    echo "Erro na consulta: " . $conexao->errorInfo()[2];
}
*/


?>