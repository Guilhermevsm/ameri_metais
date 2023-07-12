<?php 
    require_once("conexao/conexao.php"); 
    $sql = "SELECT * FROM paginainicial";
    $info = mysqli_query($conexao,$sql);
    if(!$info){
        die("Erro no banco de dados");
    }
    $sql2 = "SELECT * FROM swipper";
    $info_swipper = mysqli_query($conexao,$sql2);
    $swipper = mysqli_fetch_all($info_swipper,MYSQLI_BOTH);
    
    

?>


<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ameri Metais</title>
        <link rel="icon" type="image/x-icon" href="imagens/icone.ico"> 
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f1debf2a03.js" crossorigin="anonymous"></script>
    
    </head>
    
    <body>
        <?php if(isset($_GET["mensagem"])){ ?>
        <div id="aviso" class="alert alert-primary alert-dismissible fade show" role="alert" onload="focar_contato()">
              <strong>Mensagem enviada!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php } ?>
    <?php $texto = mysqli_fetch_assoc($info); ?>
        <div style="position: relative;">   
        <div class="container" id="menu" style=" background-color: transparent; z-index:4;">
            <nav class="navbar navbar-dark navbar-expand-md" style="padding-top: 50px; background-color: transparent;  opacity:1; position:relative; z-index:10;">
                <div class="container " id="container-menu" style="background-color: transparent;">
                    <a href="#menu"><img class="img-fluid logo-menu" src="imagens/logo-menu.png" alt="Ameri Metais" style="height:100%; padding-bottom:8px;"></a>
                    <button class="navbar-toggler btn-span1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon btn-span"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="background-color: transparent; position:relative; top:0;">
                        <ul class="navbar-nav menu-col">
                            <a class="nav-link" href="../" style="color: #0A1733;"><li class="nav-item menu-selecionado-bold">
                                Principal
                            </li></a>
                            <a class="nav-link" href="quem-somos/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Quem somos
                            </li></a>
                            <a class="nav-link" href="produtos/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Produtos
                            </li></a>
                            <a class="nav-link" href="contato/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Contato
                            </li></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    

        
        

        <div id="carouselFade" class="container-fluid carousel slide carousel-fade" data-bs-ride="carousel" style="padding: 0;">
                <img src="imagens/ondas1.png" class="img-fluid" id="ondas1">
                <div class="carousel-indicators" style="position: absolute; bottom: 100px;">
                    <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" >
                  <div class="carousel-item active">
                  <div class="container-fluid" style="margin: 0; padding:0;">
                    <img src="<?php echo $texto["imagem1"] ?>" class="d-block h-100 img-transp img-crs" alt="0">
                    <div class="container chamada1">
                    <div class="row" style="margin-bottom: 50px;">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9">
                            <h1 class="h1-shadow"><?php echo $texto["chamada1"] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-7">
                            <a href="produtos/"><button type="button" class="btn-geral btn-banner">Saiba mais ></button></a>
                         </div>
                    </div>
                    </div>
                    </div>
              </div>
                  <div class="carousel-item">
                  <div class="container-fluid" style="margin: 0; padding:0;">
                    <img src="<?php echo $texto["imagem2"] ?>" class="d-block h-100 img-crs img-transp" alt="1">
                    <div class="container chamada1">
                    <div class="row" style="margin-bottom: 50px;">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9">
                            <h1 class="h1-shadow"><?php echo $texto["chamada2"] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-7">
                            <a href="produtos/"><button type="button" class="btn-geral btn-banner">Saiba mais ></button></a>
                         </div>
                    </div>
                    </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                  <div class="container-fluid" style="margin: 0; padding:0;">
                    <img src="<?php echo $texto["imagem3"] ?>" class="d-block h-100 img-crs img-transp" alt="2">
                    <div class="container chamada1">
                    <div class="row" style="margin-bottom: 50px;">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9 col-9">
                            <h1 class="h1-shadow"><?php echo $texto["chamada3"] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-7">
                            <a href="produtos/"><button type="button" class="btn-geral btn-banner">Saiba mais ></button></a>
                         </div>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
   
    </div>   
        
        
            <div class="container-fluid" style="position: relative; padding:0;">
            <div class="container-fluid" id="chamada2">
                <div class="container" >
                    <img src="imagens/ondas-meio.png" class="img-cent" id="onda2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
                            <p id="p1" style="padding-bottom: 77px;"><?php echo $texto["texto1"] ?></p>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12" style="padding-bottom: 20px;">
                                <a href="quem-somos/"><button type="button" class="btn-geral-escuro" style="width: 222px; height: 40px;">Saiba mais ></button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <h3 class="h3-chamada2"><?php echo $texto["texto2"] ?></h3>
                        </div>
                    </div>
                </div>
                <img src="imagens/ondas-meio.png" class="img-cent" id="onda1">
            </div>

            

            <div class="container-fluid" id="chamada3">
                <div class="container" style="padding-top: 181px;">
                    <h4 class="text-center" style="padding-bottom: 40px;">Selecione o seu tipo de produto Ameri:</h4>

                    <div class="swiper mySwiper " style="padding-left: 55.5px;">
                    
                        <div class="swiper-wrapper " >
                        <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[0]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[0]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[0]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[1]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[1]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[1]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[2]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[2]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[2]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[3]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[3]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[3]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[4]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[4]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[4]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[5]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[5]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[5]["nome"]; ?></p>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[6]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[6]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[6]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[7]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[7]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[7]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[8]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[8]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[8]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[9]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[9]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[9]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[10]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[10]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[10]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[11]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[11]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[11]["nome"]; ?></p>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="produtos/index.php?codigo=<?php echo $swipper[12]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="<?php echo $swipper[12]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[12]["nome"]; ?></p>
                            </div>
                            
                            
                        </div>
                        
                        <div class="swiper-button-next swiper-navBtn">
                            <img src="imagens/seta-dir.png" id="teste3">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img src="imagens/seta-esq.png">
                        </div>
                       
                    </div>

                </div>

                <img src="imagens/ondas-meio.png" class="img-cent" style="padding-top: 166px; padding-bottom: 168px;">

                <h4 class="text-center" style="padding-bottom: 17px;"><?php echo $texto["novidades1"] ?></h4>
                <p id="texto-pequeno" class="text-center"><?php echo $texto["novidades2"] ?></p>
                
                
<form name="form-contato" action="../email/form2.php" method="post">
                <div class="row justify-content-center" style="padding-top: 37px; padding-bottom: 181px;">
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10 col-10 ju" style="padding-bottom: 15px;">
                        <input type="text" class="form-control" placeholder="Digite seu melhor email" name="email" style="width: 100%;">
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-2 col-sm-10 col-10">
                        <button type="submit" class="btn-geral" style="height: 40px; width:100%">Enviar ></button>
                    </div>
                    
                </div>
                </form>
                <img src="imagens/ondas-meio.png" class="img-cent" id="onda3">
            </div>
            
            <div class="container-fluid" id="chamada4">
                <div class="container" >
                    <div class="catalogo">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 offset-lg-3 offset-md-3 offset-sm-3 offset-3" style="margin-bottom:50px;">
                                <a class="ctg-a" href="download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" style="color:black;"><img src="<?php echo $texto["catalogoimg"] ?>" class="img-fluid" id="img-cat" alt="Catálogo de produtos"></a>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 offset-sm-1 offset-1">
                        <div class="row">
                            
                            <h4><?php echo $texto["catalogo1"] ?></h4>
                            <p><?php echo $texto["catalogo2"] ?></p>
                            <a class="ctg-a" href="download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" style="color:black;"><button class="btn-geral" style="height: 40.2px; width: 100%; max-width:222px;">Baixar catálogo ></button></a>
                        </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
                
            </div>

            <div class="container-fluid" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-4 col-4" style="padding-top:40px">
                            <img src="imagens/logo-footer.png" class="img-fluid">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-8 col-8">
                            
                        </div>
                        
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6" style="padding-top:40px">
                            <dvi class="row g-0" style="margin-bottom:30px;">
                               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"> 
                            <a class="ctg-a" href="download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" style="color:black;"><img src="imagens/seta-bx.png"></a>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                            <p class="a-footer" id="p3" style="float: left;"><a class="a-footer" style="color:white;" href="download/catalogo_ameri.pdf" download="catalogo_ameri.pdf" type="application/pdf" >Baixar catálogo de produtos</a></p>
                            
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
                                <p style="margin-bottom:10px;"><a class="a-footer" href="/">Principal</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="quem-somos/">Quem somos</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="produtos/">Produtos</a></p>
                                <p style="margin-bottom:10px;"><a class="a-footer" href="contato/">Contato</a></p>
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
        
            <script src="js/swiper-bundle.min.js"></script>
            <script src="js/main.js"> </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        
        
</html>