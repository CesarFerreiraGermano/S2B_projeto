<?php
    function popula($con){
          $con->real_query("SELECT jogo_nome, jogador_genero, count(jogador_genero) as 'quantidade' from jogadores join jogos on jogos_jogos_id = jogos_id group by jogo_nome, jogador_genero;");
          $query = $con->store_result();
           // Array
          $data = array('jogo_nome' => [] , 'quantidade' => []);
            // Associando dados
          while ($row = $query->fetch_assoc()) {
             array_push($data['quantidade'], $row['quantidade']);
             array_push($data['jogo_nome'], utf8_encode($row['jogo_nome']));
          }
           // Encerra a conexao
          $con->close();
          return $data;
    }
