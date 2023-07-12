<?php
    require_once("../conexao/conexao.php");
    $sql = "SELECT * FROM contato";
    $info = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="br" style="box-sizing: border-box;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ameri Metais</title>
        <link rel="icon" type="image/x-icon" href="../imagens/icone.ico"> 
        
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="../css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f1debf2a03.js" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <?php $texto = mysqli_fetch_assoc($info); ?>
        <div class="container" id="menu" style=" background-color: transparent; z-index:4;">
            <nav class="navbar navbar-dark navbar-expand-md" style="padding-top: 50px; background-color: transparent;  opacity:1; position:relative; z-index:10;">
                <div class="container " id="container-menu" style="background-color: transparent;">
                    <a href="../"><img class="img-fluid logo-menu" src="../imagens/logo-menu.png" alt="Ameri Metais" style="height:100%; padding-bottom:8px;"></a>
                    <button class="navbar-toggler btn-span1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon btn-span"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="background-color: transparent; position:relative; top:0;">
                        <ul class="navbar-nav menu-col">
                            <a class="nav-link" href="../" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Principal
                            </li></a>
                            <a class="nav-link" href="../quem-somos/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Quem somos
                            </li></a>
                            <a class="nav-link" href="../produtos/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Produtos
                            </li></a>
                            <a class="nav-link" href="../contato/" style="color: #0A1733;"><li class="nav-item menu-selecionado-bold">
                                Contato
                            </li></a>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    <img src="../imagens/ondas1.png" class="img-fluid" style="position:relative; top:130px;">
    
    <?php if(isset($_GET["mensagem"])){ ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Mensagem enviada!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php } ?>

    <div class="container" style="padding-top: 259px;">
        <h1 class="text-center" id="fale1"><?php echo $texto["titulo"] ?></h1> 
        <p class="text-center" id="fale2"><?php echo $texto["texto"] ?><p>
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <h2 id="fale3"><b><?php echo $texto["sac"] ?></b></h2>
                <h2 id="fale33">Ameri Metais Ltda</h2>
                <h2 id="fale4" style="margin-bottom:50px;"><?php echo $texto["endereco"] ?></h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12 offset-lg-2 offset-md-2" style="padding-bottom: 144px;">
            <form name="form-contato" action="../email/form.php" method="post">
                
                <div class="form-floating mb-3">
                    <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="Digite seu nome">
                    <label for="floatingInput">Digite seu nome:</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email:</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input name="telefone" type="text" class="form-control" id="floatingInput" placeholder="Telefone">
                    <label for="floatingInput">Telefone:</label>
                </div>
                
                <div class="form-floating">
                    <textarea name="mensagem" class="form-control" placeholder="Mensagem" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Mensagem:</label>
                </div>
                <input type="submit" value="Enviar" id="enviar">
            </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php echo $texto["mapa"] ?>
            </div>
        </div>
    </div>

    <img src="../imagens/ondas-meio.png" class="img-cent" style="padding-top: 166px;">

    <div class="container-fluid" id="chamada3" style="background-color: transparent;  padding-bottom:166px; padding-top: 181px;">
                <div class="container">
                    <h4 class="text-center" style="padding-bottom: 40px;">Selecione o seu tipo de produto Ameri:</h4>

                    <?php include_once("../swiper/swiper.php") ?>

                </div>
                </div>

    <div class="container-fluid" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-4 col-4" style="padding-top:40px">
                            <img src="../imagens/logo-footer.png" class="img-fluid">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-8 col-8">
                            
                        </div>
                        
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" style="padding-top:40px">
                            <dvi class="row g-0" style="margin-bottom:30px;">
                               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"> 
                            <a class="ctg-a" href="../download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" style="color:black;"><img src="../imagens/seta-bx.png"></a>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                            <p class="a-footer" id="p3" style="float: left;"><a class="a-footer" style="color:white;" href="../download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" >Baixar catálogo de produtos</a></p>
                            
                            </div>
                            
                            </dvi>
                            
                            <dvi class="row">
                               <div class="col-2"> 
                            <a href="https://www.instagram.com/amerimetais/">  
                            <i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="col-2">
                                <a href="https://www.linkedin.com/in/ameri-metais-7ab044276/"> 
                            <i class="fa-brands fa-linkedin-in"></i></a>
                       
                       </div>
                            
                            </dvi>
                       
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-12 col-12" style="padding-top:40px">
                            <div class="lista-footer">
                                <p style="margin-bottom:10px;"><a class="a-footer" href="../">Principal</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="../quem-somos/">Quem somos</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="../produtos/">Produtos</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="../contato/">Contato</a></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="padding-top:40px">
                            <h2>SAC (62) 99624-1707</h2>
                            <p id="p2">Rua Francisco Abrantes, Qd.01, Lt.05, Bairro Santa Cruz, Bela Vista de Goiás, CEP 75.240-000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            <script src="../js/swiper-bundle.min.js"></script>
            <script src="../js/main.js"> </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        
        
</html>