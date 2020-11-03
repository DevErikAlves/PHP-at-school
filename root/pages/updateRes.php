<meta charset="UTF-8">
<?php
    include_once ("../conexao.php");
    if(isset($_POST['id']) && is_numeric($_POST['id'])){
        
  
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
        
        $sqlUpdate = "update placadevideo set 
        marca = '$marca', 
        modelo = '$modelo', 
        memoria = $memoria,
        cuda = '$cuda',
        nucleos = $nucleos,
        plataforma = '$plataforma',
        clock = $clock,
        turbo = $turbo,
        uso = '$uso',
        imagem = '$imagem' 
        where id = $id";
            
            $resultado = @mysqli_query($conexao, $sqlUpdate);
            if (!$resultado) {
                die('Query Inválida: ' . @mysqli_error($conexao));
                
            } 
            else{
                echo "Successfully edited<br><br>";
            }
        } 
        else {
            header('Location: update.php');
        }
        mysqli_close($conexao);
?>
<br><li><a href="../index.php"> Main menu </a></li><br>