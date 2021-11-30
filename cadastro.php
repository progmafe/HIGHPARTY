<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- BOOTSTRAP -->  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <link rel="stylesheet" href="./css/cadastro.css"/>     
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>    
</head>

<body>  
    <section class="paginahome">
        <div class="container">
            <a href="home.php">           
                <img id="logo" src="./image/logocolor.png"  alt="HighParty"/>
            </a>         
            <?php
                if(isset($_SESSION['status_cadastro'])):
            ?>
                <div class="mensagem"> 
                Cadastro efetuado com sucesso
                </div>
            <?php   
                endif;
                unset($_SESSION['status_cadastro']);
            ?>
            
            <?php
                if(isset($_SESSION['usuario_existente'])):
            ?>
                <div class="mensagem" style="color:red"> 
                Usuario ja existente
                </div>
            <?php   
                endif;
                unset($_SESSION['usuario_existente']);
            ?>
            
            <?php
                if(isset($_SESSION['email_existente'])):
            ?>
                <div class="mensagem" style="color:red"> 
                email ja existente
                </div>
            <?php   
                endif;
                unset($_SESSION['email_existente']);
            ?>
        
            <div class="campos">
            
                <form class="form" autocomplete="off" action="cadastrar.php" method="POST">
                    <fieldset>

                        <!-- <label>Nome</label>                
                        <input class="forms" name="tel" type="tel" autofocus=""> -->

                        <label>Nome da sua conta</label>   
                        <input class="forms" name="usuario" type="text" autofocus="" required>

                        <label>CPF (sem pontos)</label>                
                        <input class="forms" name="cpf" type="text" autofocus="" required>                 
                        
                        <!-- <label>Telefone contato</label>                
                        <input class="forms" name="tel" type="tel" autofocus=""> -->

                        <label>e-mail</label>                
                        <input class="forms" name="email" type="email" autofocus="" required>
                        
                        <label>Senha</label>                 
                        <input class="forms" name="senha" type="password" required>

                        <label>Confirmar senha</label>                 
                        <input class="forms" name="senha_confirma" type="password" required>                 
                    
                        <div class="button">               
                            <button type="submit" >Registre-se</button>
                        </div>
                                                
                    </fieldset>
                </form> 
                <div class="button">          
                    <form action="index.php" method="GET">
                        <button type="submit">Voltar</button> 
                    </form>                    
                </div>    
            </div>         
    
            <div class="aside">
                <fonte>hi.party.music@gmail.com</fonte>
            </div>    
        </div>
    </section>
    <div class="footer">Developed by TechRabbit</div>        
  
</body>
</html>