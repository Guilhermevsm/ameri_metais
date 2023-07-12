<?php
    require_once("../conexao/conexao.php"); 
    session_start();

    if( !isset( $_SESSION["user_portal"] )){
        header("location:index.php");
    }


    if( isset($_POST["ola"])){
        
        $pasta_temporaria = $_FILES["imagem"]["tmp_name"][0];
        $arquivo = $_FILES["imagem"]["name"][0];
        $arquivo2 = $_FILES["imagem"]["name"][1];
        $arquivo3 = $_FILES["imagem"]["name"][2];
        $arquivo4 = $_FILES["imagem"]["name"][3];
        $pasta = "../imagens";

        
        if($arquivo != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
            $imagem1 = $pasta . "/" . $arquivo;
        }else{
            $imagem1 = $_POST["imagem_antiga"];
        }
        if($arquivo2 != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo2 );
            $imagem2 = $pasta . "/" . $arquivo2;
        }else{
            $imagem2 = $_POST["imagem2_antiga"];
        }
        if($arquivo3 != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo3 );
            $imagem3 = $pasta . "/" . $arquivo3;
        }else{
            $imagem3 = $_POST["imagem3_antiga"];
        }
        if($arquivo4 != ""){
            move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo4 );
            $imagem4 = $pasta . "/" . $arquivo4;
        }else{
            $imagem4 = $_POST["imagem4_antiga"];
        }
         
        $ola = $_POST["ola"];
        $chamada1 = $_POST["chamada1"];
        $chamada2 = $_POST["chamada2"];
        $subtitulo1 = $_POST["subtitulo1"];
        $topico1 = $_POST["topico1"];
        $topico2 = $_POST["topico2"];
        $topico3 = $_POST["topico3"];
        $texto1 = $_POST["texto1"];
        $texto2 = $_POST["texto2"];
        $texto3 = $_POST["texto3"];
        $chamada3 = $_POST["chamada3"];
        $historia = $_POST["historia"];
        $hist1 = $_POST["hist1"];
        $hist2 = $_POST["hist2"];
        $hist3 = $_POST["hist3"];
        $hist4 = $_POST["hist4"];
        $hist5 = $_POST["hist5"];
        $chamada4 = $_POST["chamada4"];

        

        $sql = "UPDATE quemsomos SET ola='$ola', chamada1='$chamada1', chamada2='$chamada2', subtitulo1='$subtitulo1', topico1='$topico1', topico2='$topico2', topico3='$topico3', texto1='$texto1', texto2='$texto2', texto3='$texto3', chamada3='$chamada3', historia='$historia', hist1='$hist1', hist2='$hist2', hist3='$hist3', hist4='$hist4', hist5='$hist5', img1='$imagem2', img2='$imagem3', img3='$imagem4', chamada4='$chamada4', foto='$imagem1' ";
        $atualizar = mysqli_query($conexao, $sql);
        $mensagem = 1;
    }

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
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="../css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    
    <body>
        

    <div class="sidenav">
        <a href="../" data-bs-toggle="tooltip" title="Visitar site" target="_blank"><img id="logo-menu" src="../imagens/logo-menu-branco.png"></a>
        <img class="img-fluid onda-sidenav" src="../imagens/ondas1.png">

        <a class="a-menu" href="pagina-inicial.php">Página inicial</a>
        
        <a class="a-menu ativo" href="pagina-somos.php">Quem somos</a>
        
        <a class="a-menu" href="pagina-produto.php">Produtos</a>
        
        <a class="a-menu" href="pagina-contato.php">Contato</a>
        
        <a class="a-menu" href="../" target="_blank">Visitar site</a>

    </div>

        

    <div class="main">
    <?php $textos = mysqli_fetch_assoc($info); ?>
        <form action="pagina-somos.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id" name="imagem2_antiga" value="<?php echo $textos["img1"] ?>">
        <input type="hidden" id="id" name="imagem3_antiga" value="<?php echo $textos["img2"] ?>">
        <input type="hidden" id="id" name="imagem4_antiga" value="<?php echo $textos["img3"] ?>">
        <input type="hidden" id="id" name="imagem_antiga" value="<?php echo $textos["foto"] ?>">
        

        <div class="container">
            <div class="row" style="margin-top: 73px; margin-bottom: 43px;"> 
                <div class="col-6">
                    <h1 class="gestor">Gestor de conteúdo - Ameri Metais - V.1.0</h1>
                </div>
                <div class="col-2 offset-2">
                    <h1 class="gestor">Quem somos</h1>
                </div>
                <div class="col-2">
                    <a href="logout.php"><button class="botao-azul">Sair</button></a>
                </div>
            </div>
        <hr style="margin-bottom: 54px;">
        <?php if($mensagem==1){ ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Atualização feita com sucesso</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <?php }
        
        ?>

        <h2 class="banners">Bloco 01</h2>
        <p class="texto-banners">Selecione as imagens e textos de sua escolha para adicionar no slider</p>

        
                
            <div class="row">
                <div class="col-5">
                    <h3 class="item-sistema" style="display: inline-block">Imagem </h3>
                    <p class="texto-sistema" style="display: inline-block">Tamanho proporcional a 675px x 950px</p>
                    <div class="retangulo2">
                        <img id="preview-selected-image10" class="img-center foto-preview" src="<?php echo $textos["foto"] ?>">
                    </div>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <div class="div-label">
                                <label class="label-carrossel" for="arquivo" style="margin-top: 0;">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo" accept="image/*" onchange="previewImage10(event);">
                            </div>
                        </div>
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 offset-1">
                    <h3 class="item-sistema">Título</h3>
                    <textarea name="ola" rows="3" style="width: 80%;"><?php echo $textos["ola"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                            <div class="col-3">
                                <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                            </div>
                        </div>
                    <h3 class="item-sistema" style="margin-top: 47.4px;">Chamada</h3>
                    <textarea name="chamada1" rows="3" style="width: 80%;"><?php echo $textos["chamada1"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                            <div class="col-3">
                                <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                            </div>
                        </div>
                </div>
            </div>

            <hr style="margin-top: 54px; margin-bottom:54px">

            <h2 class="banners">Bloco 02</h2>
            <p class="texto-banners">Digite os textos que vão compor os blocos abaixo:</p>

            <div class="row">
                <div class="col-6">
                    <h3 class="item-sistema">Título principal</h3>
                    <textarea name="chamada2" rows="3" style="width: 80%;"><?php echo $textos["chamada2"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit">Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="item-sistema">Descritivo</h3>
                    <textarea name="subtitulo1" rows="3" style="width: 80%;"><?php echo $textos["subtitulo1"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Título valores - 01</h3>
                    <textarea name="topico1" rows="3" style="width: 80%;"><?php echo $textos["topico1"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Descritivo valores - 01</h3>
                    <textarea name="texto1" rows="3" style="width: 80%;"><?php echo $textos["texto1"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Título valores - 02</h3>
                    <textarea name="topico2" rows="3" style="width: 80%;"><?php echo $textos["topico2"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Descritivo valores - 02</h3>
                    <textarea name="texto2" rows="3" style="width: 80%;"><?php echo $textos["texto2"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Título valores - 03</h3>
                    <textarea name="topico3" rows="3" style="width: 80%;"><?php echo $textos["topico3"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 57px;">
                    <h3 class="item-sistema">Descritivo valores - 03</h3>
                    <textarea name="texto3" rows="3" style="width: 80%;"><?php echo $textos["texto3"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="margin-top: 54px; margin-bottom:54px">

            <h2 class="banners">Bloco 03 - História</h2>
            <p class="texto-banners">Selecione as imagens e digite os textos que vão compor o carrossel de categoria de produtos</p>

            <div class="row">
            <div class="col-5">
                <h3 class="item-sistema">Texto - Título</h3>
                <textarea name="chamada3" rows="3" style="width: 100%;"><?php echo $textos["chamada3"] ?></textarea>
                <div class="row" style="margin-top: 41px;">
                    <div class="col-3">
                        <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                    </div>
                </div>
                <h3 class="item-sistema" style="margin-top: 64px;">Subtítulo</h3>
                <textarea name="historia" rows="3" style="width: 100%;"><?php echo $textos["historia"] ?></textarea>
                <div class="row" style="margin-top: 41px;">
                    <div class="col-3">
                        <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <h3 class="item-sistema">Texto - Chamada</h3>
                <textarea name="hist1" rows="4" style="width: 88%;"><?php echo $textos["hist1"] ?></textarea>
                <textarea name="hist2" rows="4" style="width: 88%;"><?php echo $textos["hist2"] ?></textarea>
                <textarea name="hist3" rows="4" style="width: 88%;"><?php echo $textos["hist3"] ?></textarea>
                <textarea name="hist4" rows="4" style="width: 88%;"><?php echo $textos["hist4"] ?></textarea>
                <textarea name="hist5" rows="4" style="width: 88%;"><?php echo $textos["hist5"] ?></textarea>
                <div class="row" style="margin-top: 41px;">
                    <div class="col-3">
                        <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                    </div>
                </div>
            </div>  
            

                
            </div>

            <hr style="margin-top: 54px;margin-bottom: 54px;">

            <h2 class="banners">Bloco 04 - Fotos institucionais</h2>
            <p class="texto-banners">Selecione as imagens que vão compor as imagens institucionais</p>

            <div class="row">
                <div class="col-3">
                    <div class="retangulo3">
                        <img id="preview-selected-image11" class="redonda-preview" src="<?php echo $textos["img1"] ?>">
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="div-label">
                                <label class="label-carrossel" for="arquivo11">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo11" accept="image/*" onchange="previewImage11(event);">
                            </div>
                        </div>
                        <div class="col-6" style="margin-top: 17px;">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-3 offset-1">
                    <div class="retangulo3">
                        <img id="preview-selected-image12" class="redonda-preview" src="<?php echo $textos["img2"] ?>">
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="div-label">
                                <label class="label-carrossel" for="arquivo12">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo12" accept="image/*" onchange="previewImage12(event);">
                            </div>
                        </div>
                        <div class="col-6" style="margin-top: 17px;">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-3 offset-1">
                    <div class="retangulo3">
                        <img id="preview-selected-image13" class="redonda-preview" src="<?php echo $textos["img3"] ?>">
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="div-label">
                                <label class="label-carrossel" for="arquivo13">Selecionar</label>
                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo13" accept="image/*" onchange="previewImage13(event);">
                            </div>
                        </div>
                        <div class="col-6" style="margin-top: 17px;">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
                </div>
                <div class="col-7" style="margin-top: 66px;">
                    <h3 class="item-sistema">Frase central</h3>
                    <textarea name="chamada4" rows="3" style="width: 100%;"><?php echo $textos["chamada4"] ?></textarea>
                    <div class="row" style="margin-top: 41px;">
                        <div class="col-3">
                            <button class="botao-azul" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                        </div>
                    </div>
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