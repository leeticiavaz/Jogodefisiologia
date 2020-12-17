<?php

        require "bd.php";

        $nome = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

        // Prepara o SQL e Consulta no banco
        $sql = "SELECT * FROM cadastro WHERE nick LIKE '%$nome%' LIMIT 5";
        $resultado = mysqli_query($connect, $sql);
        
        
        if (mysqli_num_rows($resultado) > 0) {
            ?>
            <thead>
                        <tr>
                            <th>Nome de Jogador</th>
                            <th>Pontuação</th>
                        </tr>
                    </thead>
            <?php
            while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $dados['nick']; ?></td>
                            <td><?php echo $dados['pontuacao']; ?></td>
                            <?php
            if ($dados['avatar'] == 'avatar1') {
            ?>
            <td><img src="usuario/avatar1.png" class="circle" width="35" height="35"></td>
            <?php
            }if ($dados['avatar'] == 'avatar2') {
            ?>
            <td><img src="usuario/avatar2.png" class="circle" width="35" height="35"></td>
            <?php
            }if ($dados['avatar'] == 'avatar3') {
            ?>
            <td><img src="usuario/avatar3.png" class="circle" width="35" height="35"></td>
            <?php
          }if ($dados['avatar'] == 'avatar4') {
            ?>
            <td><img src="usuario/avatar4.png" class="circle" width="35" height="35"></td>
            <?php
          }if ($dados['avatar'] == 'avatar5') {
            ?>
            <td><img src="usuario/avatar5.png" class="circle" width="35" height="35"></td>
            <?php
          }if ($dados['avatar'] == 'avatar6') {
            ?>
            <td><img src="usuario/avatar6.png" class="circle" width="35" height="35"></td>
            <?php
          }
            ?>
                        </tr>                       
                    </tbody>
               
                <?php
            }
        }else{  
            echo "Nenhum resultado encontrado!";
        }
?>