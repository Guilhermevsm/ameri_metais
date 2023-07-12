<?php
    require_once("../conexao/conexao.php");

    $sql = "SELECT * FROM quemsomos";
    $info = mysqli_query($conexao,$sql);
    if(!$info){
        die("Erro no banco de dados");
    }
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
    
    <body style="background-color: #0A1733; padding: 0px;">
    <?php $texto = mysqli_fetch_assoc($info); ?>
        <div class="container" id="menu" style=" background-color: transparent; z-index:4;">
            <nav class="navbar navbar-dark navbar-expand-md" style="padding-top: 50px; background-color: transparent;  opacity:1; position:relative; z-index:10;">
                <div class="container " id="container-menu" style="background-color: transparent;">
                    <a href="../"><img class="img-fluid logo-menu" src="../imagens/logo-menu-branco.png" alt="Ameri Metais" style="height:100%; padding-bottom:8px;"></a>
                    <button class="navbar-toggler btn-span1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon btn-span"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="background-color: transparent; position:relative; top:0;">
                        <ul class="navbar-nav menu-col">
                            <a class="nav-link" href="../" style="color: white;"><li class="nav-item menu-selecionado">
                                Principal
                            </li></a>
                            <a class="nav-link" href="../quem-somos/" style="color: #8BD5F5;"><li class="nav-item menu-selecionado-bold">
                                Quem somos
                            </li></a>
                            <a class="nav-link" href="../produtos/" style="color: white;"><li class="nav-item menu-selecionado">
                                Produtos
                            </li></a>
                            <a class="nav-link" href="../contato/" style="color: white;"><li class="nav-item menu-selecionado">
                                Contato
                            </li></a>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    <img src="../imagens/ondas1.png" class="img-fluid" style="position:relative; top:170px;z-index: 1; max-width:60%;">
    
    <div class="container-fluid" id="somos1" style="padding-left:0;">

    
        
        <div class="container" style="padding-top: 384px;">
        <img src="<?php echo $texto["foto"] ?>" class="img-fluid" style="position: absolute; top:0px; right:0; width: 40%; z-index: 0; min-width:250px">
            <div class="row">
                <div class="col-lg-6 col-md-10 col-sm-10 col-12">
                    <p id="ola"><?php echo $texto["ola"] ?></p>
                    <h1 id="ola2"><?php echo $texto["chamada1"] ?></h1>
                </div>
            </div>
            <div class="row" style="padding-top: 58px;">
                <div class="col-lg-1 col-md-2 col-sm-4 col-4">
                   <a href="#scroll"> <img src="../imagens/setagr-bx.png" class="img-fluid"></a>
                </div>
            </div>
        </div> 
            <img src="../imagens/meia-onda.png" class="img-fluid" style="position:relative; left:0; padding-top:336px;">
            <div class="container" id="scroll">
            <div class="row" style="padding-top: 51px; padding-bottom:33px">
                <div class="col-lg-10 col-md-11 col-sm-12 col-12">
                    <h2 id="somos1"><?php echo $texto["chamada2"] ?></h2>
                </div>
            </div>
            <div class="row justify-content-center" style="padding-top: 33px; padding-bottom:83px;">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <h3 id="somos2"><?php echo $texto["subtitulo1"] ?></h3>
                </div>
            </div>
            <div class="row" style="padding-bottom: 52px;">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 offset-lg-2 offset-md-2">
                    <h4 id="somos3" style="padding-bottom:20px;"><?php echo $texto["topico1"] ?></h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 offset-lg-1 offset-md-1 offset-sm-0 offset-0">
                    <p id="somos4"><?php echo $texto["texto1"] ?></p>
                </div>
            </div>
            <div class="row" style="padding-bottom: 52px;">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 offset-lg-2 offset-md-2">
                    <h4 id="somos3" style="padding-bottom:20px;"><?php echo $texto["topico2"] ?></h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 offset-lg-1 offset-md-1 offset-sm-0 offset-0">
                    <p id="somos4"><?php echo $texto["texto2"] ?></p>
                </div>
            </div>
            <div class="row" style="padding-bottom: 52px;">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 offset-lg-2 offset-md-2">
                    <h4 id="somos3" style="padding-bottom:20px;"><?php echo $texto["topico3"] ?></h3>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12 offset-lg-1 offset-md-1 offset-sm-0 offset-0">
                    <p id="somos4"><?php echo $texto["texto3"] ?></p>
                </div>
            </div>
        </div>

        <img src="../imagens/ondas-roxa.png" class="img-cent" style="position:relative; padding-top: 160px; bottom:-15px;">
    
    </div>

        <div class="container-fluid" style="background: #8BD5F5; padding:0;">
            
            <div class="container">
                <div class="row" style="padding-top: 187px; padding-bottom:70px;">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                        <h1 id="somos5"><?php echo $texto["chamada3"] ?></h1>
                    </div>
                </div>
            </div>

            <img src="../imagens/meia-roxa.png" style="position: relative; left:0px; margin-bottom:20px">

            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12 col-12">
                        <p id="somos6" style="padding-bottom:20px;"><?php echo $texto["historia"] ?></p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12 offset-lg-2 offset-md-2 offset-sm-0 ">
                        <p class="somos7"><?php echo $texto["hist1"] ?></p>
                        <p class="somos7"><?php echo $texto["hist2"] ?></p>
                        <p class="somos7"><?php echo $texto["hist3"] ?></p>
                        <p class="somos7"><?php echo $texto["hist4"] ?></p>
                        <p class="somos7"><?php echo $texto["hist5"] ?></p>
                    </div>
                </div>

                <div id="tamanho" class="row" style="position: relative; padding-top:171px; bottom:-158px;">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="redonda-tres">
                            <img src="<?php echo $texto["img1"] ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="redonda-tres">
                            <img src="<?php echo $texto["img2"] ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="redonda-tres">
                            <img src="<?php echo $texto["img3"] ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    

    <div class="container-fluid" id="chamada5">
        <div class="container" style="padding-bottom: 171px;">
            <div class="row justify-content-center"  style="padding-top: 290px; padding-bottom:200px">
                <div class="col-lg-10 col-md-10 col-sm-11 col-11">
                    <h1 id="somos8"><?php echo $texto["chamada4"] ?></h1>
                </div>
            </div>

            <img src="../imagens/ondas-roxa.png" class="img-cent" style="padding-bottom: 171px;">

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