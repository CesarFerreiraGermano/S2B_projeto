<?php
header('Content-Type: application/json');
  try{
      // Conecta com o MySQL
      $con = new mysqli("127.0.0.1", "root", "", "banco_scientia");

      if (!$con){
          die("Connection failed: " . $con->error);
      }

      $query = sprintf("select jogador_genero, jogador_data_inicio, count(jogador_genero) as quantidade from jogadores group by jogador_data_inicio");

      $result = $con->query($query);

      $data = array();

        foreach($result as $row) {
            $data[] = $row;
        }

        // Encerra a conexao
            $result->close();
            $con->close();
            //json_encode
            print json_encode($data);
       } catch (Exception $e){
          var_dump($e);
          die();
       }
?>