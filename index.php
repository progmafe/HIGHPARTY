<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HighParty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <link rel="stylesheet" href="./css/login.css"/>     
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>    
   
</head>
<body> 
    <section class="paginalogin">
        <div class="container">
            <a href="home.php">           
                <img id="logo" src="./image/logocolor.png" alt="HighParty"/>
            </a>   

            <!-- CATCH PHP BANCO DE DADOS / FORM  -->
            <?php 
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div style= 'color:red'>
                    ERRO: Usuário ou senha inválidos.
                </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>  
            <!-- FIM CATCH -->

            <div class="campos">
                <form class="form" autocomplete="off" action="login.php" method="POST">
                    <fieldset>
                        <label>Login/E-mail:</label>                
                        <input class="form_user" name="usuario" type="text" placeholder="Seu usuário" autofocus="">
                        
                        <label>Senha:</label>                 
                        <input class= "form_password" name="senha" type="password" placeholder="Sua senha">
                        
                        <div class="button">               
                            <button class="btn_entrar" type="submit">Entrar</button>
                        </div>                                        
                    </fieldset>
                </form> 
            </div>  
            
            <div class="aside">
                <label>Não tem uma conta?</label>   
                <a href="cadastro.php">Clique aqui para criar uma conta</a>
            </div> 


            <div class="aside">
                <h1><fonte>LOGIN: 1 | SENHA: 1</fonte></h1>
            </div>
        </div>
    </section>  

    <div class="footer">Developed by TechRabbit</div>
    
</body>
</html>