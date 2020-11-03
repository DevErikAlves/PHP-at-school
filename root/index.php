<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        form{
            display: inline;
        }
    
    </style>
</head>
<body>
    <h3 style="text-align: center" >Database - Video Card</h3>
    <?php
        
    
        include_once ("conexao.php"); 
    
        include_once ("query.php"); 
        
        echo '
        <form action ="pages/consulta.php">
            <button style="float: ; margin-right: 2%; " class="btn waves-effect waves-light" type="submit" name="pesqusiar" href="pages/consulta.php">
        
                 <b>Pesquisar</b> <i class="material-icons right">search</i>    
        
            </button>
        </form>
        
        <form action = "pages/consulta.php">
            <button style="float: ; margin-right: 2%; " class="btn waves-effect waves-light" type="submit" name="editar">
            
            <b>Editar</b> <i class="material-icons right">edit</i>    
            
            </button>
        </form>

        <form action = "pages/insert.php">
            <button style="float: ; margin-right: 2%; " class="btn waves-effect waves-light" type="submit" name="inserir">
            
            <b>Inserir</b> <i class="material-icons right">input</i>    
            
            </button>
        </form>

        <form action = "pages/delete.php">
            <button style=" margin-right: 2%; background-color: red" class="btn waves-effect waves-light" type="submit" name="excluir">

                <b>Excluir</b> <i class="material-icons left">delete_forever</i>    

            </button>
        </form>';
        
        include ("/tabelas/tabelaIndex.php");
        
        mysqli_close($conexao);
    ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>