<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<?php

        echo "<table class='responsive-table highlight centered'>";
        echo "<thead>
                <th>ID</th>
                <th>Mark</th>
                <th>Model</th>
                <th>Memory</th>
                <th>Cuda/th>
                <th>Cores</th>
                <th>Platform</th>
                <th>Clock</th>
                <th>Turbo</th>
                <th>Segment</th>
                <th>Logo</th>
            </thead>";

        while($dados = mysqli_fetch_array($query)){
            
            
            echo "<tr>";
            echo "<td>". $dados['id'] ."</td>";
            echo "<td>". strtoupper($dados['marca']) ."</td>";
            echo "<td>". ucfirst($dados['modelo']) ."</td>";
            echo "<td>". strtoupper($dados['memoria']) ."</td>";
            echo "<td>". $dados['cuda'] ." MB</td>";
            echo "<td>". $dados['cores'] ."</td>";
            echo "<td>". $dados['plataforma'] ."</td>";
            echo "<td>". $dados['clock'] ." GHz</td>";

            if($dados['turbo'] == 0){
                echo "<td> Não </td>";
            }
            else if($dados['turbo'] == 1){
                echo "<td> Sim </td>";
            }

            echo "<td>". $dados['uso'] ."</td>";
            
            if (empty($dados['imagem'])) { 
                $imagem = 'SemImagem.png'; 
            } 
            else { 
                $imagem = $dados['imagem']; 
            } 
            echo "
            <td>
                <a href='../tabela/imagens/$imagem'>
                <img src='../tabela/imagens/$imagem' width='70px' heigth='80px'>
                </a>
            </td>
            ";
        }
        echo "</table>";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>