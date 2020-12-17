
<html>
    <head>
            <title>Login - Confeitaria Four'ls</title>
            <meta charset="UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="logincss.css" />
          </head>

    <body>
        <div class="container" >
            
            <div class="content">      
            <div id="login">
                    <form method="post" action="loginCTRL.php"> 
                        <h1>Login</h1> 
                        <p> 
                            <label for="e-mail">E-mail</label>
                            <input id="email" name="email" required="required" type="text" placeholder=" exemplo@gmail.com"/> 
                        </p>
                        
                        <p> 
                            <label for="senha">Senha</label>
                            <input id="senha" name="senha" required="required" type="password" placeholder=" ex= 54321"/>
                        </p>
                        
                    
                        <p> 
                            <input type="submit" value="Entrar" /> 
                            <?php
                            session_start();
                            if(array_key_exists('erro', $_SESSION) == true){
                                $erro = $_SESSION["erro"];
                                echo "<br><b>$erro</b>";
                            }
                            ?>
                        </p>
                            
                        
                    </form>
            </div>
        </div>