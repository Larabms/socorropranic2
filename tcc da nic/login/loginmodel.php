<<?php
    function fazerlogin($e, $s) {
        
        $connection = mysqli_connect("localhost", "root", "", "loja");
 
        // Check connection
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        
        $sql = "SELECT id,senha,email,nome FROM usuario WHERE email='$e'";
    
        $result = mysqli_query($connection, $sql);

      
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
    
                if (password_verify($senha, $hash)) {
                    return $row;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        mysqli_close($connection);
    }  
    

    function administrador($email){
        $connection = mysqli_connect("localhost", "root", "", "loja");
        if($connection === false){
            die("Erro de Conexão" . mysqli_connect_error());
        }
        $sql="SELECT * FROM usuario AS u JOIN  administrador AS a ON u.id=a.id_admin  WHERE u.email='$e'";
        $result=mysqli_query($connection, $sql);
        if (!$result){die(mysqli_error($connection));}
        if(mysqli_num_rows($result)==1){
            return true;
        } else {return false;}

    }

    



?>