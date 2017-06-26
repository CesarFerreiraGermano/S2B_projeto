<?php
  try{
      // Conecta com o MySQL
      $con = mysqli_connect("localhost", "root", "", "banco_scientia");
      // Query
      $con->real_query("SELECT jogo_nome, jogador_genero, count(jogador_genero) as 'quantidade' from jogadores join jogos on jogos_jogos_id = jogos_id group by jogo_nome, jogador_genero");
      $query = $con->store_result();
      // Array
      $data = array('quantidade' => [] , 'jogo_nome' => []);
      // Associando dados
      while ($row = $query->fetch_assoc()) {
        array_push($data['quantidade'], $row['quantidade']);
        array_push($data['jogo_nome'], utf8_encode($row['jogo_nome']));
      }
      // Encerra a conexao
      $con->close();
      //json_encode

   } catch (\Exception $e){
      var_dump($e);
      die();
   }
?>