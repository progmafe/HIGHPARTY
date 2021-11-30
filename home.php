<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home HighParty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <link rel="stylesheet" href="./css/home.css"/>     
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>  

    <header>  
        <nav class="navbar">
            <div class="container" id="navbar-links">
                <a class="navbar-brand"><img id="logo" src="./image/logocolor.png" alt="HighParty"/></a>
                <a class="nav-item nav-link" href="home.php"><i>Home</i></span></a>
                <a class="nav-item nav-link" href="hi_mix.php"><i>Hi_mix</i></a>
                <a class="nav-item nav-link" href="djs.php"><i>Djs</i></a>
                <a class="nav-item nav-link" href="highparty.php"><i>HighParty<fonte>Rave</fonte></i></a>  
                <a class="nav-item nav-link" href="presskits.php"><i>Presskits</i></a>    
            </div>
        </nav>     
    </header>
<!-- ADICIONAR O BORDER E OS ESTILOS DE / NO MENU -->

    <section class="social">
        <div class="container">
            <div class="row">

<!-- COLUNA DO LADO ESQUERDO -->
                <div class="col-md-7">
                    <div class="djs">
                        <div>
                            <a href="kodux.php"><img src="./image/DJ1.png" class="imgDj" alt="Kodux"></a>
                            <p>Kodux</p>
                        </div>
                        <div>
                            <a href="azzura.php"><img src="./image/DJ2.png"  class="imgDj" alt="Azzura"></a>
                            <p>Azzura</p>
                        </div>
                        <div>
                            <a href="chemical.php"><img src="./image/DJ3.png" class="imgDj" alt="Chemical Noise"></a>
                            <p>Chemical Noise</p>
                        </div>
                        <div>
                            <a href="psychocat.php"><img src="./image/DJ4.png" class="imgDj" alt="PsychoCat"></a>
                            <p>PsychoCat</p>
                        </div>
                        <div>
                            <a href="ozbits.php"><img src="./image/DJ5.png" class="imgDj" alt="Ozbits"></a>
                            <p>Ozbits</p>
                        </div>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="./image/retangulo1.jpg" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                            <img src="./image/retangulo2.jpg"class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                            <img src="./image/retangulo3.png"class="d-block w-100" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="player1">
                        <audio controls>
                            <source src="" type="">
                        </audio>
                    </div>
                </div>

<!--COLUNA DO LADO DIREITO-->

                <div class="col-md-5">
                    <h1> Hi > <strong> Mix </strong></h1>
                    <div class="himix">
                        <div class="">
                            <img src="./image/himix1.jpeg" class="imagem" alt="">
                            <audio controls>
                                <source src="" type="">
                            </audio>
                        </div>
                        <div class="">
                            <img src="./image/himix2.jpeg" class="imagem" alt="">
                            <audio controls>
                                <source src="" type="">
                            </audio>
                        </div>
                        <div class="">
                            <img src="./image/himix3.png" class="imagem" alt="">
                            <audio controls>
                                <source src="" type="">
                            </audio>
                        </div>
                    </div>

                    <h1> Recomendados <strong> para você ></strong></h1>
                    <div class="recomendados">
                        <div class="">
                            <img src="./image/recomendados1.png" class="imagem" alt="">
                        </div>
                        <div class="">
                            <img src="./image/recomendados2.png" class="imagem" alt="">
                        </div>
                        <div class="">
                            <img src="./image/recomendados3.png" class="imagem" alt="">
                        </div>
                    </div>

                    <h1> <strong>On </strong> Stage </h1>
                    <div class="onStage">
                        <div class="">
                            <img src="./image/onstage1.png" class="imagem" alt="">
                        </div>
                        <div class="">
                            <img src="./image/onstage2.png" class="imagem" alt="">
                        </div>
                        <div class="">
                            <img src="./image/onstage3.png" class="imagem" alt="">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>                        

    <div class="footer">Developed by TechRabbit</div>

    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>