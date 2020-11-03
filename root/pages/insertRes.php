<meta charset = "UTF-8">
<?php
    include_once ("../conexao.php");

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $memoria = $_POST['memoria'];
        $cuda = $_POST['cuda'];
        $nucleos = $_POST['nucleos'];
        $plataforma = $_POST['plataforma'];
        $clock = $_POST['clock'];
        $turbo = $_POST['turbo'];
        $uso = $_POST['uso'];
        $imagem = $_POST['imagem'];
        
        $sqlinsert = "insert into placadevideo (marca, modelo, memoria, cuda, nucleos, plataforma, clock, turbo, uso, imagem)
        values( 
            '$marca', 
            '$modelo',
            $memoria,
            $cuda,
            $nucleos, 
            '$plataforma', 
            $clock, 
            $turbo, 
            '$uso',
            '$imagem'
            )";
            
            $resultado = @mysqli_query($conexao, $sqlinsert);
            if (!$resultado) {
                die('Query Inválida: ' . @mysqli_error($conexao));
            } 
            else {
                echo "Registration successfully<br><br>";
            }
    
            
            mysqli_close($conexao);
            
            ?>
<li><a href="insert.php"> Insert again </a></li>
<br><li><a href="../index.php"> Main menu </a></li><br>