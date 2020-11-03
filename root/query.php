<?php

    $query = mysqli_query($conexao, "select * from placadevideo");

    
        if(!$query){

            die ("Query inválida: "
            . @mysqli_error($conexao));

        }

?>