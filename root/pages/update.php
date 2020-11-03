<meta charset = "UTF-8">
<?php
    include_once ("../conexao.php");
    $id = $_POST['id'];
    $query = mysqli_query($conexao, "select * from placadevideo where id = $id");
    $dados = mysqli_fetch_array($query);



?>


<form action="updateRes.php" method = "post">
    <input type="hidden" name="id" value="<?php echo $id = $_POST['id']; ?>">
    
    <b>Mark: <input value="<?php echo $dados['marca']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "Amd" name="marca" value="Amd" require>
            <label for="amd">Amd</label><br>
        <input type="radio" id = "Nvidia" name="marca" value="Nvidia" require>
            <label for="Nvidia">Nvidia</label><br><br>

        <b>Model: </b><input value="<?php echo $dados['modelo']; ?>" name = "modelo" type = "text" maxlength="10" placeholder = "rtx 3080ti or 5700xt"><br><br>
        
        <b>Memory: </b><input value="<?php echo $dados['memoria']; ?>" name = "memoria" type = "number" maxlength="3" placeholder = "only numbers"><b> Gb</b><br><br>

        <b>Cuda: </b><input value="<?php echo $dados['cuda']; ?>" name = "cuda" type = "number" maxlength="2" placeholder = "only numbers"><b> NM</b><br><br>
 
        <b>Cores: </b><input value="<?php echo $dados['nucleos']; ?>" type = "number" name = "nucleos"><br><br>

        <b>Platform: </b><input value="<?php echo $dados['plataforma']; ?>" type = "text" name = "plataforma" placeholder = "example turing"><br><br>

        <b>Clock: </b><input value="<?php echo $dados['clock']; ?>" type = "number" name = "clock" step = "0.01" placeholder = "example: 1.4"><br><br>

        <b>Turbo: <input value="<?php echo $dados['turbo']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "sim" name="turbo" value="1">
            <label for="sim">Yes</label>
        <input type="radio" id = "não" name="turbo" value="0">
            <label for="não">No</label><br><br>
        

        <b>Use: <input value="<?php echo $dados['uso']; ?>" style="border: none;"></b><br><br>
        <input type="radio" id = "desktop" name="uso" value="Desktop">
            <label for="desktop">Desktop</label>
        <input type="radio" id = "mobile" name="uso" value="Mobile">
            <label for="mobile">Mobile</label><br><br>
        
        <b>Image: </b><input name = "imagem" type = "text" placeholder = "ex: nvidia.png"><br><br>

        <input type = "submit" value = "Update">
        <input type = "reset" value = "Clean">
        <input type='button' onclick="window.location='consultaRes.php';" value="Back">
        
    </form>