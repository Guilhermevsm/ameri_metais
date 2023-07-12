<?php
    require_once("../conexao/conexao.php");

    $categoria = "SELECT * FROM categoria_produto";
    $lista_produtos = mysqli_query($conexao, $categoria);
    $lista_produtos2 = mysqli_query($conexao, $categoria);
    if(!$lista_produtos){
        die("Erro no banco.");
    }
    
    if(isset($_GET["PRODUTO-pesquisa"])){
        $nome_pesquisa = $_GET["PRODUTO-pesquisa"];
        $produto_sql = "SELECT * FROM pesquisa WHERE nome LIKE '%$nome_pesquisa%' OR nome_categoria LIKE '%$nome_pesquisa%' ";
        $pesquisa_placer = mysqli_query($conexao, $produto_sql);
        $pesquisa_placer2 = mysqli_query($conexao, $produto_sql);
        $pesquisa_placer3 = mysqli_query($conexao, $produto_sql);
        
    }
    
    if( isset($_GET["produto"]) ){
        $idproduto = $_GET["produto"];
        
        $produto_sql = "SELECT * FROM produto WHERE idproduto=$idproduto";
        $produto_placer = mysqli_query($conexao, $produto_sql);
        $produto_placer2 = mysqli_query($conexao, $produto_sql);
        $produto_placer3 = mysqli_query($conexao, $produto_sql);
        $_id_cat = mysqli_fetch_array($produto_placer2);
        $_id_categoria = $_id_cat["tipo"]-1;
    }else{

        if(isset ( $_GET["codigo"] )){
            $_id_categoria = $_GET["codigo"]-1;
            $produto_sql = "SELECT * FROM produto WHERE tipo=$_id_categoria+1";
            $produto_placer = mysqli_query($conexao, $produto_sql);
        }else{
            $_id_categoria = 1;
            $produto_sql = "SELECT * FROM produto WHERE tipo=$_id_categoria+1";
            $produto_placer = mysqli_query($conexao, $produto_sql);
        }
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
    
    <body>
        
        <div class="container" id="menu" style=" background-color: transparent; z-index:4;">
            <nav class="navbar navbar-dark navbar-expand-md" style="padding-top: 50px; background-color: transparent;  opacity:1; position:relative; z-index:10;">
                <div class="container " id="container-menu" style="background-color: transparent;">
                    <a href="../"><img class="img-fluid logo-menu" src="../imagens/logo-menu.png" alt="Ameri Metais" style="height:100%; padding-bottom:8px;"></a>
                    <button class="navbar-toggler btn-span1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon btn-span"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar" style="background-color: transparent; position:relative; top:0;">
                        <ul class="navbar-nav menu-col">
                            <a class="nav-link" href="../" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Principal
                            </li></a>
                            <a class="nav-link" href="../quem-somos/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Quem somos
                            </li></a>
                            <a class="nav-link" href="../produtos/" style="color: #0A1733;"><li class="nav-item menu-selecionado-bold">
                                Produtos
                            </li></a>
                            <a class="nav-link" href="../contato/" style="color: #0A1733;"><li class="nav-item menu-selecionado">
                                Contato
                            </li></a>
                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    <img src="../imagens/ondas1.png" class="img-fluid" style="position:relative; top:80px;">
    <hr class="hr">
    <div class="container">
        <div class="row justify-content-between" style="position:relative; top: 101px;">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
               <a href="../produtos/" class="produtos-a"> <h5> Produtos > </a><b> <?php $produto = mysqli_fetch_all($lista_produtos2, MYSQLI_BOTH); echo $produto[$_id_categoria][1]; ?> </b> </h5>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12">
                <form action="../produtos/index.php" method="get">
                    <input id="pesquisa-produto" type="text" class="form-control" placeholder="digite aqui e pesquise seu produto Ameri" name="PRODUTO-pesquisa" style="width: 100%;">
                </form>
            </div>
        </div>

        <div class="row">
            
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 lista-lateral" style="margin-bottom:25px;">
                
                <button id="chamada-menu" class="navbar-toggler dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#listaprodutos" aria-controls="listaprodutos" aria-expanded="false" aria-label="Toggle navigation">
                        <span>Selecione uma categoria: &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                    </button>
                <div class="collapse navbar-collapse teste-drop" id="listaprodutos" >
                    
                    <ul id="lista-prod" class="lista-produtos">
                    
                    <?php
                        while($produto2 = mysqli_fetch_array($lista_produtos)){
                    ?>
                    
                    
                        <a style="text-decoration: none;" href="index.php?codigo=<?php echo $produto2["id_categoria"] ?>"><li id="produto<?php echo $produto2["id_categoria"] ?>" class="lista-produtos-item" style="<?php if($produto2["id_categoria"]-1==$_id_categoria){ ?> background-color: #F2F2F2;color:#0A1733;<?php }; ?>"  > <?php echo $produto2["nome_categoria"] ?> </li></a>
                    
                    <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-10 col-10" id="div-produtos">
                <div class="row"> 
                    
                      
                    

                    <?php
                    if(!isset($nome_pesquisa)){
                    ?>
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-10 col-10">
                        <h2 class="titulo-produto"> <?php echo $produto[$_id_categoria][1]; ?> </h2>
                    </div>
                    <?php 
                    }else{
                        
                    ?>
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-10 col-10">
                        <h2 class="titulo-produto"> <?php echo $nome_pesquisa; ?> </h2>
                    </div>
                    <?php
                    };
                    ?>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-2 col-2">
                        <a href="javascript: history.go(-1)"> <img src="../imagens/seta-esq.png"> </a>
                    </div>
                    <?php
                    if(!isset($idproduto) && !isset($nome_pesquisa)){ ?>
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-12 col-12">
                        <h6 class="texto-produto"> <?php echo $produto[$_id_categoria][2]; ?> </h6>
                    </div>
                    <?php } ?>
                    
                </div>
                <div class="row " style="padding-top: 41px;">
                    <?php
                    if(isset($nome_pesquisa)){
                         while($produto_pesquisa = mysqli_fetch_array($pesquisa_placer)){
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                       <a href="../produtos/index.php?produto=<?php echo $produto_pesquisa["idproduto"] ?>"> <div class="card">
                            <img src="<?php echo $produto_pesquisa["imagem"] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $produto_pesquisa["nome"] ?></b></h5>
                                <p class="card-text"><?php echo $produto_pesquisa["descricao"] ?></p>
                            </div>
                            <div class="card-body btn-group" style="width:100%;">
                                <a href="../produtos/index.php?produto=<?php echo $produto_pesquisa["idproduto"] ?>"><button type="button" class="btn1-card" style="border=0;">VISUALIZAR</button></a>
                                <a class="produtos-whats" href="https://api.whatsapp.com/send?phone=556296241707" target="_blank"><button type="button" class="btn2-card produtos-whats">FAZER PEDIDO</button></a>
                            </div>
                        </div></a>
                    </div>
                        
                    <?php 
            
                    
                        }} elseif(!isset($idproduto)){
                            while($produto = mysqli_fetch_array($produto_placer)){
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                       <a href="../produtos/index.php?produto=<?php echo $produto["idproduto"] ?>"> <div class="card">
                            <img src="<?php echo $produto["imagem"] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $produto["nome"] ?></b></h5>
                                <p class="card-text"><?php echo $produto["descricao"] ?></p>
                            </div>
                            <div class="card-body btn-group" style="width:100%;">
                                <a href="../produtos/index.php?produto=<?php echo $produto["idproduto"] ?>"><button type="button" class="btn1-card" style="border=0;">VISUALIZAR</button></a>
                                <a class="produtos-whats" href="https://api.whatsapp.com/send?phone=556296241707" target="_blank"><button type="button" class="btn2-card produtos-whats">FAZER PEDIDO</button></a>
                            </div>
                        </div></a>
                    </div>
                    
                    <?php }}else{ while($produto = mysqli_fetch_array($produto_placer)){?>
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                        
                            <img src="<?php echo $produto["imagem"] ?>" class="img-produto img-fluid">
                            <div class="row justify-content-center" style="padding-top: 15px;">
                        <?php if($produto["imagem2"] != "../imagens/"){ ?>
                                <div class="col-5 img-pequna">
                                    <img style="width: 100%; object-fit: cover;" src="<?php echo $produto["imagem2"] ?>">
                                </div>
                        <?php } if($produto["imagem3"] != "../imagens/"){ ?>
                                <div class="col-5 offset-1 img-pequna">
                                    <img style="width: 100%; object-fit: cover;"  src="<?php echo $produto["imagem3"] ?>">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 offset-lg-1 offset-md-1">
                            <?php if($produto["exclusivo"]){ ?>
                            <div class="row" style="padding-bottom: 20px;">
                                <div class="col-3" style="padding-top: 10px;">
                                    <img src="../imagens/exclusivo.png">
                                </div>
                            </div>
                            <?php } ?>
                            <div class="row" style="padding-bottom: 38px;">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <h5 class="produto-title"><b><?php echo $produto["nome"] ?></b></h5>
                                    <p class="produto-text"><?php echo $produto["descricao"] ?></p>
                                </div>
                            </div>
                            <di class="row">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                                    <h4 id="especs">ESPECIFICAÇÕES TÉCNICAS DO PRODUTO E GARANTIA.</h4>
                                </div>
                            </di>
                            <div class="row" style="padding-bottom: 30px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <ul>
                                        <?php for($i=11; $i<=20; $i++){
                                            if($produto[$i]!=NULL){
                                        ?>
                                        <li class="lista-espec"> <?php echo $produto[$i] ?> </li>
                                        <?php } } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <a href="https://api.whatsapp.com/send?phone=556296241707" target="_blank"><button type="button" class="btn-geral" style="width: 100%; height: auto;padding:10px;">Fazer pedido via Whatsapp</button></a>
                                </div>
                            </div>
                        </div>

                                                 
                        <?php }} ?>
                </div>
            </div>
        </div>

        
    </div>

    
    <div class="container-fluid" style="background-color: #F2F2F2;">
        <div class="container" style="position:relative; margin-top:450px">
        <?php if(isset($idproduto)){$produto = mysqli_fetch_array($produto_placer3); ?>
            <img src="../imagens/ondas-meio.png" class="img-cent" style="position:relative; top: -15px; padding-bottom: 130px;">
            <div class="row" style="padding-bottom: 157px;">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="padding-bottom: 25px;">
                <p class="detalhes">Código: </p><p class="detalhes3"><?php echo $produto["codigo"] ?> </p><br>
                <p class="detalhes">Marca: </p><p class="detalhes3"><?php echo $produto["marca"] ?> </p><br>
                <p class="detalhes">Linha: </p><p class="detalhes3"><?php echo $produto["linha"] ?> </p><br>
                <p class="detalhes">Categoria: </p><p class="detalhes3"><?php echo $produto["categoria"] ?> </p>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-1 offset-md-1">
                <h4 class="detalhes2" style="padding-bottom: 20px; font-weight:bold;"><?php echo $produto["instalacao"] ?></h4>
                <p class="detalhes2"><?php echo $produto["texto"] ?></p>
                <?php if($produto["exclusivo"]){ ?>
                <div class="row"  style="padding-top: 35px;">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                        <img src="../imagens/exclusivo.png">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-9 col-9" style="font-size: 14px;">
                        <p class="detalhes2">Mecanismo ¼ volta é atualmente o modelo mais utilizado em residências urbanas, por ser um sistema prático e confortável. Seu sistema de abertura é mais fácil, sendo necessário girar apenas ¼ de volta (90 graus). A vedação de cerâmica garante alta durabilidade, resistência, e economia de água. Funciona muito bem em locais onde a pressão da água é muito forte.</p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
            

        <?php } ?>
            <img src="../imagens/ondas-meio.png" class="img-cent" style="position:relative; top: -15px; padding-bottom: 143px;">
            <h2 class="text-center" id="h2-produto">Acabamentos disponíveis para torneiras de todas categorias*</h2>
            <p class="text-center" id="p-produto">*Exceto para torneiras gourmet e com filtro que são montadas somente nos volantes C-62 e C-72.</p>

            <div class="row justify-content-center" style="padding-bottom: 180px; padding-top:68px">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-23.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-23</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-31.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-31</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-33.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-33</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-35.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-35</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-40.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-40</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-50.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-50</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-62.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-62</p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
                        <div class="redondo-vol">
                            <img src="../imagens/VOLANTE C-72.png" class="img-volante">
                        </div>
                        <p class="p-volante">Volante C-72</p>
                    </div> 
                </div>
                </div>
            </div>
            <img src="../imagens/ondas-meio.png" class="img-cent" style="position:relative; bottom: -15px;">

        </div>
    </div>

    <div class="container-fluid" id="chamada5">
        <div class="container" style="padding-top: 181px;">
            <h4 class="text-center" style="padding-bottom: 40px;">Selecione o seu tipo de produto Ameri:</h4>

            <?php include_once("../swiper/swiper.php") ?>

                

        </div>
    </div>

    <h4 class="text-center" style="padding-bottom: 17px; padding-top:166px">Receba as novidades da Ameri Metais</h4>
    <p id="texto-pequeno" class="text-center">Fique atento às novidades Ameri. Caso queira um contato ou receber email com promoções cadastre-se abaixo</p>

    <div class="row justify-content-center" style="padding-top: 37px; padding-bottom: 166px; width:100%">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 col-10 " style="padding-bottom: 15px;">
            <form name="form-contato" action="../email/form2.php" method="post">
            <input type="text" class="form-control" placeholder="Digite seu melhor email" name="email">
        </div>
        <div class="col-xl-1 col-lg-1 col-md-2 col-sm-10 col-10">
                        <button type="submit" class="btn-geral" style="height: 40px; width:100%">Enviar ></button>
                        </form>
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
                            <h2>SAC (62)99624-1707</h2>
                            <p id="p2">Rua Francisco Abrantes,Qd.01, Lt.05, Bairro Santa Cruz,Bela Vista de Goiás, CEP 75.240-000</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php mysqli_close($conexao); ?>
            <script src="../js/swiper-bundle.min.js"></script>
            <script src="../js/main.js"> </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>

        
        
</html>