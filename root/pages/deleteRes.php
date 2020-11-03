<meta charset = "UTF-8">
<?php
    include_once('../conexao.php');
    $id = $_POST['id'];

    $sqldelete = "delete from placadevideo where id = $id";

    $resultado = @mysqli_query($conexao, $sqldelete);
    if (!$resultado){
            header('Location: delete.php');
        }
        else{
            echo "Registro excluido com sucesso<br>";
        }

    mysqli_close($conexao);
?>
<br>
<li><a href="delete.php"> Delete again  </a></li>
<br><li><a href="../index.php"> Main menu </a></li><br>