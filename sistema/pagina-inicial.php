<?php
    require_once("../conexao/conexao.php"); 
    session_start();
    $mensagem=0;
    if( !isset( $_SESSION["user_portal"] )){
        header("location:index.php");
    }
    
    if( isset($_POST["chamada1"]) ){
        $chamada1 = $_POST["chamada1"];
        $pasta_temporaria = $_FILES["imagem"]["tmp_name"];
        $arquivo = $_FILES["imagem"]["name"];
        $pasta = "../imagens";
        if($arquivo != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
            $imagem1 = $pasta . "/" . $arquivo;
        }else{
            $imagem1 = $_POST["imagem_antiga"];
        }
        $sql = "UPDATE paginainicial SET chamada1='$chamada1', imagem1='$imagem1' ";
        $atualizar = mysqli_query($conexao, $sql);
        $mensagem = 1;
    }
    
    if( isset($_POST["chamada2"]) ){
        $chamada2 = $_POST["chamada2"];
        $pasta_temporaria = $_FILES["banner2"]["tmp_name"];
        $arquivo = $_FILES["banner2"]["name"];
        $pasta = "../imagens";
        if($arquivo != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
            $imagem1 = $pasta . "/" . $arquivo;
        }else{
            $imagem1 = $_POST["imagem2_antiga"];
        }
        $sql = "UPDATE paginainicial SET imagem2='$imagem1', chamada2='$chamada2' ";
        $atualizar = mysqli_query($conexao, $sql);
        $mensagem = 1;
    }
    
    if( isset($_POST["chamada3"]) ){
        $chamada3 = $_POST["chamada3"];
        $pasta_temporaria = $_FILES["banner3"]["tmp_name"];
        $arquivo = $_FILES["banner3"]["name"];
        $pasta = "../imagens";
        if($arquivo != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
            $imagem3 = $pasta . "/" . $arquivo;
        }else{
            $imagem3 = $_POST["imagem3_antiga"];
        }
        $sql = "UPDATE paginainicial SET imagem3='$imagem3', chamada3='$chamada3' ";
        $atualizar = mysqli_query($conexao, $sql);
        $mensagem = 1;
    }

    if( isset($_POST["texto1"])){
        $pasta = "../imagens";
        $pasta2 = "imagens";
        $pasta_temporaria13 = $_FILES["imagem"]["tmp_name"][13];
        $pasta_temporaria = $_FILES["imagem"]["tmp_name"][0];
        $pasta_temporaria1 = $_FILES["imagem"]["tmp_name"][1];
        $pasta_temporaria2 = $_FILES["imagem"]["tmp_name"][2];
        $pasta_temporaria3 = $_FILES["imagem"]["tmp_name"][3];
        $pasta_temporaria4 = $_FILES["imagem"]["tmp_name"][4];
        $pasta_temporaria5 = $_FILES["imagem"]["tmp_name"][5];
        $pasta_temporaria6 = $_FILES["imagem"]["tmp_name"][6];
        $pasta_temporaria7 = $_FILES["imagem"]["tmp_name"][7];
        $pasta_temporaria8 = $_FILES["imagem"]["tmp_name"][8];
        $pasta_temporaria9 = $_FILES["imagem"]["tmp_name"][9];
        $pasta_temporaria10 = $_FILES["imagem"]["tmp_name"][10];
        $pasta_temporaria11 = $_FILES["imagem"]["tmp_name"][11];
        $pasta_temporaria12 = $_FILES["imagem"]["tmp_name"][12];
        $arquivo = $_FILES["imagem"]["name"][13];
        $arquivo1 = $_FILES["imagem"]["name"][0];
        $arquivo2 = $_FILES["imagem"]["name"][1];
        $arquivo3 = $_FILES["imagem"]["name"][2];
        $arquivo4 = $_FILES["imagem"]["name"][3];
        $arquivo5 = $_FILES["imagem"]["name"][4];
        $arquivo6 = $_FILES["imagem"]["name"][5];
        $arquivo7 = $_FILES["imagem"]["name"][6];
        $arquivo8 = $_FILES["imagem"]["name"][7];
        $arquivo9 = $_FILES["imagem"]["name"][8];
        $arquivo10 = $_FILES["imagem"]["name"][9];
        $arquivo11 = $_FILES["imagem"]["name"][10];
        $arquivo12 = $_FILES["imagem"]["name"][11];
        $arquivo13 = $_FILES["imagem"]["name"][12];
        

        
        if($arquivo != ""){
            move_uploaded_file($pasta_temporaria13, $pasta . "/" . $arquivo );
            $imagem4 = $pasta . "/" . $arquivo;
        }else{
            $imagem4 = $_POST["imagem4_antiga"];
        }
        
        if($arquivo1 != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo1 );
            $img_swipper1 = $pasta2 . "/" . $arquivo1;
        }else{
            $img_swipper1 = $_POST["imagem_swipper1"];
        }
        if($arquivo2 != ""){
            move_uploaded_file($pasta_temporaria1, $pasta . "/" . $arquivo2 );
            $img_swipper2 = $pasta2 . "/" . $arquivo2;
        }else{
            $img_swipper2 = $_POST["imagem_swipper2"];
        }
        if($arquivo3 != ""){
            move_uploaded_file($pasta_temporaria2, $pasta . "/" . $arquivo3 );
            $img_swipper3 = $pasta2 . "/" . $arquivo3;
        }else{
            $img_swipper3 = $_POST["imagem_swipper3"];
        }
        if($arquivo4 != ""){
            move_uploaded_file($pasta_temporaria3, $pasta . "/" . $arquivo4 );
            $img_swipper4 = $pasta2 . "/" . $arquivo4;
        }else{
            $img_swipper4 = $_POST["imagem_swipper4"];
        }
        if($arquivo5 != ""){
            move_uploaded_file($pasta_temporaria4, $pasta . "/" . $arquivo5 );
            $img_swipper5 = $pasta2 . "/" . $arquivo5;
        }else{
            $img_swipper5 = $_POST["imagem_swipper5"];
        }
        if($arquivo6 != ""){
            move_uploaded_file($pasta_temporaria5, $pasta . "/" . $arquivo6 );
            $img_swipper6 = $pasta2 . "/" . $arquivo6;
        }else{
            $img_swipper6 = $_POST["imagem_swipper6"];
        }
        if($arquivo7 != ""){
            move_uploaded_file($pasta_temporaria6, $pasta . "/" . $arquivo7 );
            $img_swipper7 = $pasta2 . "/" . $arquivo7;
        }else{
            $img_swipper7 = $_POST["imagem_swipper7"];
        }
        if($arquivo8 != ""){
            move_uploaded_file($pasta_temporaria7, $pasta . "/" . $arquivo8 );
            $img_swipper8 = $pasta2 . "/" . $arquivo8;
        }else{
            $img_swipper8 = $_POST["imagem_swipper8"];
        }
        if($arquivo9 != ""){
            move_uploaded_file($pasta_temporaria8, $pasta . "/" . $arquivo9 );
            $img_swipper9 = $pasta2 . "/" . $arquivo9;
        }else{
            $img_swipper9 = $_POST["imagem_swipper9"];
        }
        if($arquivo10 != ""){
            move_uploaded_file($pasta_temporaria9, "../imagens" );
            $img_swipper10 = $pasta2 . "/" . $arquivo10;
        }else{
            $img_swipper10 = $_POST["imagem_swipper10"];
        }
        if($arquivo11 != ""){
            move_uploaded_file($pasta_temporaria10, $pasta . "/" . $arquivo11 );
            $img_swipper11 = $pasta2 . "/" . $arquivo11;
        }else{
            $img_swipper11 = $_POST["imagem_swipper11"];
        }
        if($arquivo12 != ""){
            move_uploaded_file($pasta_temporaria11, $pasta . "/" . $arquivo12 );
            $img_swipper12 = $pasta2 . "/" . $arquivo12;
        }else{
            $img_swipper12 = $_POST["imagem_swipper12"];
        }
        if($arquivo13 != ""){
            move_uploaded_file($pasta_temporaria12, $pasta . "/" . $arquivo13 );
            $img_swipper13 = $pasta2 . "/" . $arquivo13;
        }else{
            $img_swipper13 = $_POST["imagem_swipper13"];
        }
        
    
        
    $texto1 = $_POST["texto1"];
    $texto2 = $_POST["texto2"];
    $novidades1 = $_POST["novidades1"];
    $novidades2 = $_POST["novidades2"];
    $catalogo1 = $_POST["catalogo1"];
    $catalogo2 = $_POST["catalogo2"];
    
    

    $sql = "UPDATE paginainicial SET texto1='$texto1', texto2='$texto2', novidades1='$novidades1', novidades2='$novidades2', catalogo1='$catalogo1', catalogo2='$catalogo2', catalogoimg='$imagem4' ";
    $atualizar = mysqli_query($conexao, $sql);
    
    
    $nome1 = $_POST["swipper_nome1"];
    $nome2 = $_POST["swipper_nome2"];
    $nome3 = $_POST["swipper_nome3"];
    $nome4 = $_POST["swipper_nome4"];
    $nome5 = $_POST["swipper_nome5"];
    $nome6 = $_POST["swipper_nome6"];
    $nome7 = $_POST["swipper_nome7"];
    $nome8 = $_POST["swipper_nome8"];
    $nome9 = $_POST["swipper_nome9"];
    $nome10 = $_POST["swipper_nome10"];
    $nome11 = $_POST["swipper_nome11"];
    $nome12 = $_POST["swipper_nome12"];
    $nome13 = $_POST["swipper_nome13"];
    $cat1 = $_POST["swipper_cat1"];
    $cat2 = $_POST["swipper_cat2"];
    $cat3 = $_POST["swipper_cat3"];
    $cat4 = $_POST["swipper_cat4"];
    $cat5 = $_POST["swipper_cat5"];
    $cat6 = $_POST["swipper_cat6"];
    $cat7 = $_POST["swipper_cat7"];
    $cat8 = $_POST["swipper_cat8"];
    $cat9 = $_POST["swipper_cat9"];
    $cat10 = $_POST["swipper_cat10"];
    $cat11 = $_POST["swipper_cat11"];
    $cat12 = $_POST["swipper_cat12"];
    $cat13 = $_POST["swipper_cat13"];
    
    $sql = "UPDATE swipper SET imagem='$img_swipper1', nome='$nome1', categoria=$cat1 WHERE idswipper=0 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper2', nome='$nome2', categoria=$cat2 WHERE idswipper=1 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper3', nome='$nome3', categoria=$cat3 WHERE idswipper=2 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper4', nome='$nome4', categoria=$cat4 WHERE idswipper=3 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper5', nome='$nome5', categoria=$cat5 WHERE idswipper=4 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper6', nome='$nome6', categoria=$cat6 WHERE idswipper=5 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper7', nome='$nome7', categoria=$cat7 WHERE idswipper=6 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper8', nome='$nome8', categoria=$cat8 WHERE idswipper=7 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper9', nome='$nome9', categoria=$cat9 WHERE idswipper=8 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper10', nome='$nome10', categoria=$cat10 WHERE idswipper=9 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper11', nome='$nome11', categoria=$cat11 WHERE idswipper=10 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper12', nome='$nome12', categoria=$cat12 WHERE idswipper=11 ";
    $atualizar = mysqli_query($conexao, $sql);
    $sql = "UPDATE swipper SET imagem='$img_swipper13', nome='$nome13', categoria=$cat13 WHERE idswipper=12 ";
    $atualizar = mysqli_query($conexao, $sql);
    

    $mensagem = 1;
}
$sql = "SELECT * FROM paginainicial";
    $info = mysqli_query($conexao,$sql);
    if(!$info){
        die("Erro no banco de dados");
    }
    
$sql2 = "SELECT * FROM swipper";
    $info_swipper = mysqli_query($conexao,$sql2);
    if(!$info_swipper){
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
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="../css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/f1debf2a03.js" crossorigin="anonymous"></script>

    </head>
    
    <body>
        

    <div class="sidenav">
      <a href="../" data-bs-toggle="tooltip" title="Visitar site" target="_blank"><img id="logo-menu" src="../imagens/logo-menu-branco.png"></a>
        <img class="img-fluid onda-sidenav" src="../imagens/ondas1.png">

        <a class="a-menu ativo" href="pagina-inicial.php">Página inicial</a>
        
        <a class="a-menu" href="pagina-somos.php">Quem somos</a>
        
        <a class="a-menu" href="pagina-produto.php">Produtos</a>
        
        <a class="a-menu" href="pagina-contato.php">Contato</a>
        
        <a class="a-menu" href="../" target="_blank">Visitar site</a>

    </div>

        <?php $texto = mysqli_fetch_assoc($info); ?>

    <div class="main">
        
        

        <div class="container">
            <div class="row" style="margin-top: 73px; margin-bottom: 43px;"> 
                <div class="col-6">
                    <h1 class="gestor">Gestor de conteúdo - Ameri Metais - V.1.0</h1>
                </div>
                <div class="col-2 offset-2">
                    <h1 class="gestor">Página Inicial</h1>
                </div>
                <div class="col-2">
                    <a href="logout.php"><button class="botao-azul">Sair</button></a>
                </div>
            </div>
        <hr style="margin-bottom: 54px;">

        <h2 class="banners">Banners iniciais</h2>
        <p class="texto-banners">Selecione as imagens e textos de sua escolha para adicionar no slider</p>
        
        <?php if($mensagem==1){ ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Atualização feita com sucesso</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php }
        
        ?>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Banner 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Banner 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Banner 3</button>
            </li>
        </ul>
            <div class="tab-content" id="myTabContent" style="margin-top: 65px;">
                
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="pagina-inicial.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="imagem_antiga" value="<?php echo $texto["imagem1"] ?>">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="item-sistema" style="display: inline-block">Imagem </h3>
                            <p class="texto-sistema" style="display: inline-block">Tamanho proporcional a 1440px x 990px</p>
                            <div class="retangulo">
                                <img class="img-center banner-preview" src="<?php echo $texto["imagem1"] ?>" id="preview-selected-image7">
                            </div>
                            <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <div class="div-label">
                                        <label class="label-carrossel" for="arquivo7" style="margin-top: 0;">Selecionar</label>
                                        <input name="imagem" class="imagem-carrosel" type="file" id="arquivo7" accept="image/*" onchange="previewImage7(event);">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                        <h3 class="item-sistema">Texto</h3>
                        <textarea name="chamada1" rows="3" style="width: 80%;"><?php echo $texto["chamada1"] ?></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        <h3 class="item-sistema" style="margin-top: 47.4px;">Link do botão (saiba mais)</h3>
                        <textarea rows="2" style="width: 80%;"></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>



                </div>
                
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="pagina-inicial.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="id" name="imagem2_antiga" value="<?php echo $texto["imagem2"] ?>">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="item-sistema" style="display: inline-block">Imagem </h3>
                            <p class="texto-sistema" style="display: inline-block">Tamanho proporcional a 1440px x 990px</p>
                            <div class="retangulo">
                                <img id="preview-selected-image8" class="img-center banner-preview" src="<?php echo $texto["imagem2"] ?>">
                            </div>
                            <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <div class="div-label">
                                        <label class="label-carrossel" for="arquivo8" style="margin-top: 0;">Selecionar</label>
                                        <input name="banner2" class="imagem-carrosel" type="file" id="arquivo8" accept="image/*" onchange="previewImage8(event);">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                        <h3 class="item-sistema">Texto</h3>
                        <textarea name="chamada2" rows="3" style="width: 80%;"><?php echo $texto["chamada2"] ?></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        <h3 class="item-sistema" style="margin-top: 47.4px;">Link do botão (saiba mais)</h3>
                        <textarea rows="2" style="width: 80%;"></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
                
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <form action="pagina-inicial.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="imagem3_antiga" value="<?php echo $texto["imagem3"] ?>">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="item-sistema" style="display: inline-block">Imagem </h3>
                            <p class="texto-sistema" style="display: inline-block">Tamanho proporcional a 1440px x 990px</p>
                            <div class="retangulo">
                                <img id="preview-selected-image9" class="img-center banner-preview" src="<?php echo $texto["imagem3"] ?>">
                            </div>
                            <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <div class="div-label">
                                        <label class="label-carrossel" for="arquivo9" style="margin-top: 0;">Selecionar</label>
                                        <input name="banner3" class="imagem-carrosel" type="file" id="arquivo9" accept="image/*" onchange="previewImage9(event);">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                        <h3 class="item-sistema">Texto</h3>
                        <textarea name="chamada3" rows="3" style="width: 80%;"><?php echo $texto["chamada3"] ?></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        <h3 class="item-sistema" style="margin-top: 47.4px;">Link do botão (saiba mais)</h3>
                        <textarea rows="2" style="width: 80%;"></textarea>
                        <div class="row" style="margin-top: 41px;">
                                <div class="col-3">
                                    <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <hr style="margin-top: 54px; margin-bottom:54px">

            <h2 class="banners">Bloco 02</h2>
            <p class="texto-banners">Digite os textos que vão compor os blocos abaixo:</p>
            <form action="pagina-inicial.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="id" name="imagem4_antiga" value="<?php echo $texto["catalogoimg"] ?>">
            <div class="row">
                <div class="col-6">
                    <h3 class="item-sistema">Texto</h3>
                    <textarea name="texto1" rows="3" style="width: 80%;"><?php echo $texto["texto1"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="item-sistema">Texto</h3>
                    <textarea name="texto2" rows="3" style="width: 80%;"><?php echo $texto["texto2"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="margin-top: 54px; margin-bottom:54px">

            <h2 class="banners">Bloco 03 - Carrosseis de produtos</h2>
            <p class="texto-banners">Selecione as imagens (proporcional a 300px x 300px) e digite os textos que vão compor o carrossel de categoria de produtos</p>

            <?php
                $swipper = mysqli_fetch_all($info_swipper,MYSQLI_BOTH);
                
            ?>

<input type="hidden" id="id" name="imagem_swipper1" value="<?php echo $swipper[0]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper2" value="<?php echo $swipper[1]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper3" value="<?php echo $swipper[2]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper4" value="<?php echo $swipper[3]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper5" value="<?php echo $swipper[4]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper6" value="<?php echo $swipper[5]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper7" value="<?php echo $swipper[6]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper8" value="<?php echo $swipper[7]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper9" value="<?php echo $swipper[8]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper10" value="<?php echo $swipper[9]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper11" value="<?php echo $swipper[10]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper12" value="<?php echo $swipper[11]["imagem"] ?>">
<input type="hidden" id="id" name="imagem_swipper13" value="<?php echo $swipper[12]["imagem"] ?>">


            <div class="row">
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 01</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image1" class="img-center img-crr" src="../<?php echo $swipper[0]["imagem"]; ?>">
                               
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper1">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper1" accept="image/*" onchange="previewSwipper1(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 01</h3>
                            <textarea name="swipper_nome1" style="width: 100%;"><?php echo $swipper[0]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat1" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[0]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 02</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image2" class="img-center img-crr" src="../<?php echo $swipper[1]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper2">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper2" accept="image/*" onchange="previewSwipper2(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 02</h3>
                            <textarea name="swipper_nome2" style="width: 100%;"><?php echo $swipper[1]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat2" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[1]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 03</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image3" class="img-center img-crr" src="../<?php echo $swipper[2]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper3">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper3" accept="image/*" onchange="previewSwipper3(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 03</h3>
                            <textarea name="swipper_nome3" style="width: 100%;"><?php echo $swipper[2]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat3" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[2]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 04</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image4" class="img-center img-crr" src="../<?php echo $swipper[3]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper4">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper4" accept="image/*" onchange="previewSwipper4(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 04</h3>
                            <textarea name="swipper_nome4" style="width: 100%;"><?php echo $swipper[3]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat4" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[3]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 05</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image5" class="img-center img-crr" src="../<?php echo $swipper[4]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper5">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper5" accept="image/*" onchange="previewSwipper5(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 05</h3>
                            <textarea name="swipper_nome5" style="width: 100%;"><?php echo $swipper[4]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat5" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[4]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 06</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image6" class="img-center img-crr" src="../<?php echo $swipper[5]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper6">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper6" accept="image/*" onchange="previewSwipper6(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 06</h3>
                            <textarea name="swipper_nome6" style="width: 100%;"><?php echo $swipper[5]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat6" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[5]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 07</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image111" class="img-center img-crr" src="../<?php echo $swipper[6]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper111">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper111" accept="image/*" onchange="previewSwipper111(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 07</h3>
                            <textarea name="swipper_nome7" style="width: 100%;"><?php echo $swipper[6]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat7" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[6]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 08</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image222" class="img-center img-crr" src="../<?php echo $swipper[7]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper222">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper222" accept="image/*" onchange="previewSwipper222(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 08</h3>
                            <textarea name="swipper_nome8" style="width: 100%;"><?php echo $swipper[7]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat8" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[7]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 09</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image333" class="img-center img-crr" src="../<?php echo $swipper[8]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper333">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper333" accept="image/*" onchange="previewSwipper333(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 09</h3>
                            <textarea name="swipper_nome9" style="width: 100%;"><?php echo $swipper[8]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat9" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[8]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 10</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image444" class="img-center img-crr" src="../<?php echo $swipper[9]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper444">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper444" accept="image/*" onchange="previewSwipper444(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 10</h3>
                            <textarea name="swipper_nome10" style="width: 100%;"><?php echo $swipper[9]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat10" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[9]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 11</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image555" class="img-center img-crr" src="../<?php echo $swipper[10]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper555">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper555" accept="image/*" onchange="previewSwipper555(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 11</h3>
                            <textarea name="swipper_nome11" style="width: 100%;"><?php echo $swipper[10]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat11" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[10]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 12</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image666" class="img-center img-crr" src="../<?php echo $swipper[11]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper666">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper666" accept="image/*" onchange="previewSwipper666(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 12</h3>
                            <textarea name="swipper_nome12" style="width: 100%;"><?php echo $swipper[11]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat12" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[11]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-6" style="margin-bottom: 54px;">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="item-sistema">Imagem 13</h3>
                            <div class="retangulo-pequeno">
                                <img id="preview-swipper-image777" class="img-center img-crr" src="../<?php echo $swipper[12]["imagem"]; ?>">
                                
                            </div>
                            <div class="div-label">
                                <label class="label-carrossel" for="swipper777">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="swipper777" accept="image/*" onchange="previewSwipper777(event);">
                            </div>
                            
                        </div>
                        
                        <div class="col-6">
                            <h3 class="item-sistema">Texto 13</h3>
                            <textarea name="swipper_nome13" style="width: 100%;"><?php echo $swipper[12]["nome"]; ?></textarea>
                            <h3 class="item-sistema" style="margin-top: 31px;">Categoria</h3>
                            <select name="swipper_cat13" class="form-select" aria-label="Default select example">
                                <option selected>Categoria:
                                <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($swipper[12]["categoria"]==$linha["id_categoria"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                </option>
                                
                            </select>
                        </div>
                        
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <button style="width: 100%; margin-top: 17px;" class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>

                
            </div>

            <hr style="margin-bottom: 54px;">

            <h2 class="banners">Bloco 04 - Novidades</h2>
            <p class="texto-banners">Selecione as imagens e digite os textos que vão compor o carrossel de categoria de produtos</p>

            <div class="row">
                <div class="col-6">
                    <h3 class="item-sistema">Texto - Título</h3>
                    <textarea name="novidades1" rows="3" style="width: 80%;"><?php echo $texto["novidades1"] ?></textarea>
                    <button class="botao-azul" style="margin-top: 26px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                </div>
                <div class="col-6">
                    <h3 class="item-sistema">Texto - Chamada</h3>
                    <textarea name="novidades2" rows="3" style="width: 80%;"><?php echo $texto["novidades2"] ?></textarea>
                    <button class="botao-azul" style="margin-top: 26px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                </div>
                <div class="col-6" style="margin-top: 37px;">
                    <h3 class="item-sistema">Email a ser enviado os leads</h3>
                    <textarea rows="3" style="width: 80%;"></textarea>
                    <button class="botao-azul" style="margin-top: 26px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                </div>
            </div>
        
            <hr style="margin-bottom: 54px; margin-top:54px;">

            <h2 class="banners">Bloco 05 - Catálogo</h2>
            <p class="texto-banners">Selecione as imagens e digite os textos que vão compor o carrossel de categoria de produtos</p>

            <div class="row">
                <div class="col-2">
                    <h3 class="item-sistema">Imagem</h3>
                    <div class="retangulo-pequeno" style="height:200px">
                        <img class="img-center preview-1" src="../<?php echo $texto["catalogoimg"] ?>" id="preview-selected-image15">
                        
                    </div>
                    <div class="div-label">
                        <label class="label-carrossel" for="arquivo15">Selecionar</label>
                        <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo15" accept="image/*" onchange="previewImage15(event);">
                    </div>
                    
                </div>
                <div class="col-4" >
                    <h3 class="item-sistema">Texto - Título</h3>
                    <textarea name="catalogo1" rows="3" style="width: 100%;"><?php echo $texto["catalogo1"] ?></textarea>
                    <button class="botao-azul" style="margin-top: 26px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                </div>
                <div class="col-6" >
                    <h3 class="item-sistema">Texto - Chamada</h3>
                    <textarea name="catalogo2" rows="3" style="width: 80%;"><?php echo $texto["catalogo2"] ?></textarea>
                    <button class="botao-azul" style="margin-top: 26px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                </div>
            </div>




        </div>
        

        


        </form>
        
    </div>
    
    <div class="container-fluid rodape-firmarela">
        <div class="container">

            <p class="desenvolvido">Desenvolvido por &nbsp<a class="amarela" href="https://www.instagram.com/firmarela/"> Firmarela</a></p>

        </div>

    </div>
    
        
        <script src="../js/swiper-bundle.min.js"></script>
        <script src="../js/main.js"> </script>
        <script src="funcoes.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

        
        
</html>