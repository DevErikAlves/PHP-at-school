<meta charset = "UTF-8">
    <h1 style = "text-align: center">Insert</h1>
    <form action="insertRes.php" method = "post">

        <b>Mark: </b><br><br> 
        
        <input type="radio" id = "Amd" name="marca" value="Amd">
            <label for="Amd">Amd</label><br>
        <input type="radio" id = "Nvidia" name="marca" value="Nvidia" required>
            <label for="Nvidia">Nvidia</label><br><br>

        <b>Model: </b><input name = "modelo" type = "text" maxlength="10" placeholder = "rtx 3080ti or 5700xt" required><br><br>
        <b>Memory: </b><input name = "memoria" type = "number" maxlength="3" placeholder = "only numbers" required><b> GB</b><br><br>
        <b>Cuda: </b><input name = "cuda" type = "number" maxlength="6" placeholder = "only numbers" required><b></b><br><br>   
        <b>Cores: </b><input type = "number" name = "nucleos" required><br><br>
        <b>Platform: </b><input type = "text" name = "plataforma" placeholder = "example: turing" required><br><br>
        <b>Clock: </b><input type = "number" name = "clock" step = "0.01" placeholder = "example: 2.2" required><br><br>
        <b>Turbo: </b>
        <input type="radio" id = "sim" name="turbo" value="1" required>
            <label for="sim">Sim</label>
        <input type="radio" id = "não" name="turbo" value="0">
            <label for="não">Não</label><br><br>
    
        <b>Use: </b>
        <input type="radio" id = "desktop" name="uso" value="Desktop" required>
            <label for="desktop">Desktop</label>
        <input type="radio" id = "mobile" name="uso" value="Mobile">
            <label for="mobile">Mobile</label><br><br>
        
        <b>Image: </b><input name = "imagem" type = "text" placeholder = "example nvidia.png"><br><br>

        <input type = "submit" value = "Insert">
        <input type = "reset" value = "Clean">
    </form>
<br><li><a href="../index.php"> Main menu </a></li><br>
