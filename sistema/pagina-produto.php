<?php 
require_once("../conexao/conexao.php"); 
session_start();

if( !isset( $_SESSION["user_portal"] )){
    header("location:index.php");
}

if( isset($_GET["tipo_selector"])){
    $produto_selector = $_GET["tipo_selector"];
    $sql = "SELECT * FROM produto WHERE tipo=$produto_selector";
    $query1 = mysqli_query($conexao,$sql);
    
}

if( isset($_GET["id_updade"])){
    $produto = $_GET["id_updade"];
    $sql = "SELECT * FROM produto WHERE idproduto=$produto";
    $query = mysqli_query($conexao,$sql);
    $sql = "SELECT * FROM produto WHERE idproduto=$produto";
    $query1 = mysqli_query($conexao,$sql);
    $produto_info =  mysqli_fetch_array($query, MYSQLI_BOTH);
}

if( isset($_POST["idproduto_remover"])){
    $id = $_POST["idproduto_remover"];
    

    $sql = "DELETE FROM produto WHERE idproduto=$id;";
    $remover = mysqli_query($conexao,$sql);
    $mensagem = 1;
}

if( isset($_POST["nome_produto_add"])){
    $nome = $_POST["nome_produto_add"];
    $descricao = $_POST["desc_produto_add"];

    $sql = "INSERT INTO categoria_produto (nome_categoria, texto_categoria) VALUES ('$nome', '$descricao')";
    $adicionar = mysqli_query($conexao,$sql);
    $mensagem = 1;
}


if (isset($_POST["update_button"])) {
    if($_POST["nome_produto_update"]==""){
        $descricao = $_POST["desc_produto_update"];
        $id_categoria = $_POST["id_categoria_update"];
        $sql = "UPDATE categoria_produto SET texto_categoria='$descricao' WHERE id_categoria=$id_categoria ";
        $adicionar = mysqli_query($conexao,$sql);
        $mensagem = 1;
    }else{
        $nome = $_POST["nome_produto_update"];
        $descricao = $_POST["desc_produto_update"];
        $id_categoria = $_POST["id_categoria_update"];
    
        $sql = "UPDATE categoria_produto SET nome_categoria='$nome', texto_categoria='$descricao' WHERE id_categoria=$id_categoria ";
        $adicionar = mysqli_query($conexao,$sql);
        $mensagem = 1;
    }
    
} else if (isset($_POST["delete_button"])) {
    $id_categoria = $_POST["id_categoria_update"];
    $sql = "DELETE FROM categoria_produto WHERE id_categoria=$id_categoria;";
    $adicionar = mysqli_query($conexao,$sql);
    $mensagem = 1; 
}
     


if( isset($_POST["nome_add"])){
    foreach($_FILES as $fotos)
        $pasta_temporaria = $_FILES["imagem"]["tmp_name"][0];
        $arquivo = $_FILES["imagem"]["name"][0];
        $arquivo2 = $_FILES["imagem"]["name"][1];
        $arquivo3 = $_FILES["imagem"]["name"][2];
        $pasta = "../imagens";

            
            
    move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
    move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo2 );
    move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo3 );
              

    $nome = $_POST["nome_add"];
    $descricao = $_POST["descricao_add"];
    $tipo = $_POST["categoria_produto_add"];
    $imagem = $pasta . "/" . $arquivo;
    $imagem2 = $pasta . "/" . $arquivo2;
    $imagem3 = $pasta . "/" . $arquivo3;
    $codigo = $_POST["codigo_add"];
    $marca = $_POST["marca_add"];
    $linha = $_POST["linha_add"];
    $categoria = $_POST["categoria_add"];
    $espec1 = $_POST["espec1_add"];
    $espec2 = $_POST["espec2_add"];
    $espec3 = $_POST["espec3_add"];
    $espec4 = $_POST["espec4_add"];
    $espec5 = $_POST["espec5_add"];
    $espec6 = $_POST["espec6_add"];
    $espec7 = $_POST["espec7_add"];
    $espec8 = $_POST["espec8_add"];
    $espec9 = $_POST["espec9_add"];
    $espec10 = $_POST["espec10_add"];
    $instalacao = $_POST["instalacao_add"];
    $texto = $_POST["texto_add"];
    if(isset($_POST["exclusivo_add"])){
        $exclusivo = $_POST["exclusivo_add"];
    }else{
        $exclusivo=0;
                }

    $sql = "INSERT INTO produto (nome, descricao, tipo, imagem, imagem2, imagem3, codigo, marca, linha, categoria, espec1, espec2, espec3, espec4, espec5, espec6, espec7, espec8, espec9, espec10, instalacao, texto, exclusivo) VALUES ('$nome', '$descricao', $tipo, '$imagem', '$imagem2', '$imagem3', '$codigo', '$marca', '$linha', '$categoria', '$espec1', '$espec2', '$espec3', '$espec4', '$espec5', '$espec6', '$espec7', '$espec8', '$espec9', '$espec10', '$instalacao', '$texto', $exclusivo)";
    $adicionar = mysqli_query($conexao,$sql);
    if(!$adicionar){
        die("Erro no banco de dados");
        $mensagem = "Erro";
    }else{
        $mensagem = 1;
    }
    

    

}

if( isset($_POST["nome_categoria_add"])){
    $nome = $_POST["nome_categoria_add"];
    $texto = $_POST["desc_categoria_add"];
    

    $sql = "INSERT INTO categoria_produto (nome_categoria, texto_categoria) VALUES ('$nome', '$texto')";
    $adicionar = mysqli_query($conexao,$sql);
    if(!$adicionar){
        die("Erro no banco de dados");
        $mensagem = "Erro";
    }else{
        $mensagem = 1;
    }
}

if( isset($_POST["nome_categoria_update"])){
    $nome = $_POST["nome_categoria_update"];
    $texto = $_POST["desc_categoria_update"];
    $id = $_POST["id_categoria_update"];
    
    $sql = "UPDATE categoria_produto SET nome_categoria='$nome', texto_categoria='$texto' WHERE id_categoria=$id";
    $atualizar = mysqli_query($conexao,$sql);
    $mensagem = 1;
}

if( isset($_POST["nome_updade"])){
        
    $pasta_temporaria = $_FILES["imagem"]["tmp_name"][0];
    $arquivo = $_FILES["imagem"]["name"][0];
    $arquivo2 = $_FILES["imagem"]["name"][1];
    $arquivo3 = $_FILES["imagem"]["name"][2];
    $pasta = "../imagens";

    
    if($arquivo != ""){
        move_uploaded_file($pasta_temporaria, $pasta . "/" . $arquivo );
        $imagem = $pasta . "/" . $arquivo;
    }else{
        $imagem = $_POST["imagem_antiga"];
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
        
    $produto_id = $_POST["idproduto"];
    $nome = $_POST["nome_updade"];
    $descricao = $_POST["descricao_updade"];
    $tipo = $_POST["tipo_updade"];
    $codigo = $_POST["codigo_updade"];
    $marca = $_POST["marca_updade"];
    $linha = $_POST["linha_updade"];
    $categoria = $_POST["categoria_updade"];
    $espec1 = $_POST["espec1_updade"];
    $espec2 = $_POST["espec2_updade"];
    $espec3 = $_POST["espec3_updade"];
    $espec4 = $_POST["espec4_updade"];
    $espec5 = $_POST["espec5_updade"];
    $espec6 = $_POST["espec6_updade"];
    $espec7 = $_POST["espec7_updade"];
    $espec8 = $_POST["espec8_updade"];
    $espec9 = $_POST["espec9_updade"];
    $espec10 = $_POST["espec10_updade"];
    $instalacao = $_POST["instalacao_updade"];
    $texto = $_POST["texto_updade"];
    if(isset($_POST["exclusivo_updade"])){
        $exclusivo = $_POST["exclusivo_updade"];
    }else{
        $exclusivo=0;
    }

    $sql = "UPDATE produto SET nome='$nome', descricao='$descricao', tipo=$tipo, imagem='$imagem', imagem2='$imagem2', imagem3='$imagem3', codigo='$codigo', marca='$marca', linha='$linha', categoria='$categoria', espec1='$espec1', espec2='$espec2', espec3='$espec3', espec4='$espec4', espec5='$espec5', espec6='$espec6', espec7='$espec7', espec8='$espec8', espec9='$espec9', espec10='$espec10', instalacao='$instalacao', texto='$texto', exclusivo=$exclusivo WHERE idproduto = $produto_id";
    $atualizar = mysqli_query($conexao, $sql);
    $mensagem = 1;
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
        
        <a class="a-menu" href="pagina-somos.php">Quem somos</a>
        
        <a class="a-menu ativo" href="pagina-produto.php">Produtos</a>
        
        <a class="a-menu" href="pagina-contato.php">Contato</a>
        
        <a class="a-menu" href="../" target="_blank">Visitar site</a>

    </div>

        

    <div class="main">
        
        
        

            <div class="container">
                <div class="row" style="margin-top: 73px; margin-bottom: 43px;"> 
                    <div class="col-6">
                        <h1 class="gestor">Gestor de conteúdo - Ameri Metais - V.1.0</h1>
                    </div>
                    <div class="col-2 offset-2">
                        <h1 class="gestor">Produtos</h1>
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

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Categorias</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Produtos</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent" style="margin-top: 65px;">
                
                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p class="texto-banners">Adicione ou edite a categoria que desejar:</p>
                        
                        <div class="row">
                            
                            <ul class="nav nav-tabs" id="myTab-categoria" role="tablist">
                                <li class="nav-item li-categoria" role="presentation">
                                    <button class="nav-link btn-categoria active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-categoria" type="button" role="tab" aria-controls="home-categoria" aria-selected="true">Adicionar nova categoria</button>
                                </li>
                                <li class="nav-item li-categoria" role="presentation">
                                    <button class="nav-link btn-categoria" id="profile-tab" data-bs-toggle="tab" data-bs-target="#categoria" type="button" role="tab" aria-controls="categoria" aria-selected="false">Editar categoria</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent" style="margin-top: 65px;">
                
                                <div class="tab-pane fade show active" id="home-categoria" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="pagina-produto.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="item-sistema">Título da categoria</h3>
                                            <textarea name="nome_categoria_add" rows="2" style="width: 80%;"></textarea>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="item-sistema">Breve descrição</h3>
                                            <textarea name="desc_categoria_add" rows="5" style="width: 80%;"></textarea>                                              
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 offset-3">
                                            <button class="botao-azul" style="width: 100%; margin-top:50px; margin-bottom:50px;" type="submit" onClick='return confirmSubmit()'>Adicionar</button>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                        <h3 class="item-sistema">Destacar categoria na página principal de produtos</h3>
                                        <select class="form-select" aria-label="Default select example" style="width: 80%;">
                                        <option selected>Selecionar</option>
                                            <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                        </select>
                                        <button class="botao-azul" style="margin-top: 25px;" type="submit" onClick='return confirmSubmit()'>Atualizar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="categoria" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="pagina-produto.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="item-sistema">Selecione a categoria para edição</h3>
                                            <select name="id_categoria_update" class="form-select" aria-label="Default select example" style="width: 80%;">
                                            <option selected>Selecionar</option>
                                            <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                            </select>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Selecione novo título para categoria</h3>
                                            <textarea name="nome_categoria_update" rows="2" style="width: 80%;"></textarea>
                                    
                                        <input style="margin-top:20px" class="botao-azul" onClick='return confirmSubmit()'  type="submit"  name="update_button" value="Atualizar" />
                                        
                                        <input style="margin-top:20px" class="botao-azul" onClick='return confirmRemover()'  type="submit" name="delete_button" value="Remover" />
                                        
                                        </div>
                                        <div class="col-6">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Edite a descrição</h3>
                                            <textarea name="desc_categoria_update" rows="5" style="width: 80%;"></textarea>
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
                        
                        
                    </div>

                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="home-tab">
                        <p class="texto-banners">Adicione ou edite os produtos e suas descrições:</p>
                        <ul class="nav nav-tabs" id="myTab-categoria" role="tablist">
                            <li class="nav-item li-categoria" role="presentation">
                                <button class="nav-link btn-categoria" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-categoria2" type="button" role="tab" aria-controls="home-categoria2" aria-selected="true">Adicionar novo produto</button>
                            </li>
                            <li class="nav-item li-categoria" role="presentation">
                                <button class="nav-link btn-categoria active" id="profile2-tab" data-bs-toggle="tab" data-bs-target="#categoria3" type="button" role="tab" aria-controls="categoria3" aria-selected="false">Editar produto</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent2" style="margin-top: 65px;">
                                                    
                        

                                <div class="tab-pane fade show" id="home-categoria2" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="pagina-produto.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="item-sistema">Selecione a categoria para seu produto</h3>
                                            <select name="categoria_produto_add" class="form-select" aria-label="Default select example" style="width: 80%;">
                                            <option selected>Selecionar</option>
                                            <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                            </select>                                             
                                        </div>
                                        <div class="col-6">
                                            <h3 class="item-sistema">Adicionar selo?</h3>
                                            <div class="form-check form-switch" style="padding-bottom: 10px;">
                                                <input name="exclusivo_add" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Mecanismo 1/4 de volta</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <img class="img-exclusivo" src="../imagens/exclusivo.png">
                                                </div>
                                                <div class="col-8">
                                                    <p class="texto-exclusivo">Mecanismo ¼ volta é atualmente o modelo mais utilizado em residências urbanas, por ser um sistema prático e confortável. Seu sistema de abertura é mais fácil, sendo necessário girar apenas ¼ de volta (90 graus). A vedação de cerâmica garante alta durabilidade, resistência, e economia de água. Funciona muito bem em locais onde a pressão da água é muito forte.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <h3 class="item-sistema">Adicionar imagem principal</h3>
                                            <div class="retangulo4">
                                                <img id="preview-selected-image" src="../imagens/Group 594.png" class="img-center preview-1">
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="formFile1">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="formFile1" accept="image/*" onchange="previewImage(event);">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <h3 class="item-sistema">Imagem 02</h3>
                                            <div class="retangulo5">
                                                <img id="preview-selected-image2" src="../imagens/photo_size_select_actual_24px.png" class="img-center  preview-1">
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="formFile2">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="formFile2" accept="image/*" onchange="previewImage2(event);">
                                            </div>
                                            <h3 class="item-sistema" style="margin-top: 42px;">Imagem 03</h3>
                                            <div class="retangulo5">
                                                <img id="preview-selected-image3"  src="../imagens/photo_size_select_actual_24px.png" class="img-center  preview-1" >
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="formFile3">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="formFile3" accept="image/*" onchange="previewImage3(event);">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Digite o título do produto</h3>
                                            <textarea name="nome_add" rows="1" style="width: 100%;">Torneira parede 2060</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Descrição do produto</h3>
                                            <textarea name="descricao_add" rows="1" style="width: 100%;">cano sino red giratória super luxo 1/4 volta</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Especificações técnicas do produto e garantia</h3>
                                            <textarea name="espec1_add" rows="1" style="width: 100%;">Torneira com acabamento e estrutura produzida em metal</textarea>
                                            <textarea name="espec2_add" rows="1" style="width: 100%;">Acompanha acessórios para instalação (porca e arruela)</textarea>
                                            <textarea name="espec3_add" rows="1" style="width: 100%;">Bitola entrada de água: 1/2</textarea>
                                            <textarea name="espec4_add" rows="1" style="width: 100%;">Comprimento total do tubo colorido: 50cm</textarea>
                                            <textarea name="espec5_add" rows="1" style="width: 100%;">Mecanismo de abertura: 1/4 de volta de cerâmica</textarea>
                                            <textarea name="espec6_add" rows="1" style="width: 100%;">Imagens ilustrativas</textarea>
                                            <textarea name="espec7_add" rows="1" style="width: 100%;">Cores: azul, vermelho e preto</textarea>
                                            <textarea name="espec8_add" rows="1" style="width: 100%;"></textarea>
                                            <textarea name="espec9_add" rows="1" style="width: 100%;"></textarea>
                                            <textarea name="espec10_add" rows="1" style="width: 100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Whatsapp para contato de vendas</h3>
                                            <textarea rows="1" style="width: 80%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h3 class="item-sistema" style="margin-top: 30px;">Detalhes / Especificações técnicas do produto</h3>
                                        <div class="col-3">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Digite o código do produto</h3>
                                            <textarea name="codigo_add" rows="1" style="width: 100%;">2060</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Marca</h3>
                                            <textarea name="marca_add" rows="1" style="width: 100%;">Ameri Metais</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Linha</h3>
                                            <textarea name="linha_add" rows="1" style="width: 100%;">Cozinha/Banheiro</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Categoria</h3>
                                            <textarea name="categoria_add" rows="1" style="width: 100%;">Torneiras</textarea>
                                        </div>
                                        <div class="col-9">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Título</h3>
                                            <textarea name="instalacao_add" rows="1" style="width: 100%;">Torneira para instalação em parede</textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Texto descritivo</h3>
                                            <textarea name="texto_add" rows="10" style="width: 100%;">Uma das novidades mais belas e funcionais em torneiras, com sua base toda em metal possui grande resistência, seu formato trás modernidade, inovação e requinte.</textarea>
                                        </div>
                                        <button class="botao-azul" style="margin-top: 25px;" type="submit" onClick='return confirmSubmit()'>Adicionar</button>
                                    </div> 
                                    </form>
                                </div>
                            
                                <div class="tab-pane fade show active" id="categoria3" role="tabpanel" aria-labelledby="home-tab">
                                    
                                        
                                    <div class="row">
                                        <div class="col-12" style="margin-bottom: 30px;">
                                            <form action="pagina-produto.php" method="get">
                                                    <h3 class="item-sistema">Selecione a categoria de seu produto</h3>
                                            <select name="tipo_selector" class="form-select" aria-label="Default select example" style="width: 100%;">
                                            <option>Selecionar</option>
                                            <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($linha["id_categoria"]==$produto_info["tipo"] || $linha["id_categoria"]==$produto_selector){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                            </select>                                <button style="margin-top:10px;" class="botao-azul" type="submit">Selecionar</button>
                                            </form>
                                        </div>
                                        
                                        
                                        <div class="col-12" style="margin-bottom: 30px;">
                                            <form action="pagina-produto.php" method="get">
  
                                            <h3 class="item-sistema">Selecione seu produto</h3>
                                            <select name="id_updade" class="form-select" aria-label="Default select example" style="width: 100%;">
                                            <option>Selecionar</option>
                                            <?php 
                                               if(isset($query1)){ 

                                                while ($linha = mysqli_fetch_assoc($query1)){
                                            ?>

                                            <option <?php if($linha["idproduto"]==$produto_info[0]){echo "selected";} ?> value="<?php echo $linha["idproduto"] ?>"><?php echo $linha["nome"] ?> - <?php echo $linha["descricao"] ?></option>

                                            <?php   } }   ?>
                                            </select> 
                                            
                                                                                       
                                        <button style="margin-top:10px;" class="botao-azul" type="submit">Ir</button>
                                                   
                                                                                       </form>
                                        </div>
                                        
                                
                                       <form action="pagina-produto.php" method="post" enctype="multipart/form-data">
                                           <input type="hidden" id="id" name="imagem_antiga" value="<?php echo $produto_info["imagem"] ?>">
                                           <input type="hidden" id="id" name="imagem2_antiga" value="<?php echo $produto_info["imagem2"] ?>">
                                           <input type="hidden" id="id" name="imagem3_antiga" value="<?php echo $produto_info["imagem3"] ?>">
                                           <input type="hidden" id="id" name="idproduto" value="<?php echo $produto_info[0] ?>">
                                           
                                           
                                           <div class="col-6" style="margin-bottom: 30px;">
                                                    <h3 class="item-sistema">Alterar categoria</h3>
                                            <select name="tipo_updade" class="form-select" aria-label="Default select example" style="width: 80%;">
                                            <option>Selecionar</option>
                                            <?php 
                                                $sql = "SELECT * FROM categoria_produto";
                                                $categoria = mysqli_query($conexao,$sql);

                                                while ($linha = mysqli_fetch_assoc($categoria)){
                                            ?>

                                            <option <?php if($linha["id_categoria"]==$produto_info["tipo"]){echo "selected";} ?> value="<?php echo $linha["id_categoria"] ?>"><?php echo $linha["nome_categoria"] ?></option>

                                            <?php    }   ?>
                                            </select>                                    
                                        </div>
                                           
                                        <div class="col-6">
                                            <h3 class="item-sistema">Adicionar selo?</h3>
                                            <div class="form-check form-switch" style="padding-bottom: 10px;">
                                                <input name="exclusivo_updade" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="1">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Mecanismo 1/4 de volta</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-5">
                                            <h3 class="item-sistema">Adicionar imagem principal</h3>
                                            <div class="retangulo4">
                                                <img id="preview-selected-image4" src="<?php echo $produto_info["imagem"] ?>" class="img-center preview-1">
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="arquivo4">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo4" accept="image/*" onchange="previewImage4(event);">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <h3 class="item-sistema">Imagem 02</h3>
                                            <div class="retangulo5">
                                                <img id="preview-selected-image5" src="<?php echo $produto_info["imagem2"] ?>" class="img-center preview-1">
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="arquivo5">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo5" accept="image/*" onchange="previewImage5(event);">
                                            </div>
                                            <h3 class="item-sistema" style="margin-top: 42px;">Imagem 03</h3>
                                            <div class="retangulo5">
                                                <img id="preview-selected-image6" src="<?php echo $produto_info["imagem3"] ?>" class="img-center preview-1">
                                            </div>
                                            <div class="div-label">
                                                <label class="label-carrossel" for="arquivo6">Selecionar</label>
                                                <input name="imagem[]" class="imagem-carrosel" type="file" id="arquivo6" accept="image/*" onchange="previewImage6(event);">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <h3 id="nome_produto" class="item-sistema" style="margin-top: 30px;">Digite o título do produto</h3>
                                            <textarea name="nome_updade" rows="1" style="width: 100%;"><?php echo $produto_info[1] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Descrição do produto</h3>
                                            <textarea name="descricao_updade" rows="1" style="width: 100%;"><?php echo $produto_info[2] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Especificações técnicas do produto e garantia</h3>
                                            <textarea name="espec1_updade" rows="1" style="width: 100%;"><?php echo $produto_info[11] ?></textarea>
                                            <textarea name="espec2_updade" rows="1" style="width: 100%;"><?php echo $produto_info[12] ?></textarea>
                                            <textarea name="espec3_updade" rows="1" style="width: 100%;"><?php echo $produto_info[13] ?></textarea>
                                            <textarea name="espec4_updade" rows="1" style="width: 100%;"><?php echo $produto_info[14] ?></textarea>
                                            <textarea name="espec5_updade" rows="1" style="width: 100%;"><?php echo $produto_info[15] ?></textarea>
                                            <textarea name="espec6_updade" rows="1" style="width: 100%;"><?php echo $produto_info[16] ?></textarea>
                                            <textarea name="espec7_updade" rows="1" style="width: 100%;"><?php echo $produto_info[17] ?></textarea>
                                            <textarea name="espec8_updade" rows="1" style="width: 100%;"><?php echo $produto_info[18] ?></textarea>
                                            <textarea name="espec9_updade" rows="1" style="width: 100%;"><?php echo $produto_info[19] ?></textarea>
                                            <textarea name="espec10_updade" rows="1" style="width: 100%;"><?php echo $produto_info[20] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Whatsapp para contato de vendas</h3>
                                            <textarea rows="1" style="width: 80%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h3 class="item-sistema" style="margin-top: 30px;">Detalhes / Especificações técnicas do produto</h3>
                                        <div class="col-3">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Digite o código do produto</h3>
                                            <textarea name="codigo_updade" rows="1" style="width: 100%;"><?php echo $produto_info[7] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Marca</h3>
                                            <textarea name="marca_updade" rows="1" style="width: 100%;"><?php echo $produto_info[8] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Linha</h3>
                                            <textarea name="linha_updade" rows="1" style="width: 100%;"><?php echo $produto_info[9] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Categoria</h3>
                                            <textarea name="categoria_updade" rows="1" style="width: 100%;"><?php echo $produto_info[10] ?></textarea>
                                        </div>
                                        <div class="col-9">
                                            <h3 class="item-sistema" style="margin-top: 30px;">Título</h3>
                                            <textarea name="instalacao_updade" rows="1" style="width: 100%;"><?php echo $produto_info[21] ?></textarea>
                                            <h3 class="item-sistema" style="margin-top: 30px;">Texto descritivo</h3>
                                            <textarea name="texto_updade" rows="10" style="width: 100%;"><?php echo $produto_info[22] ?></textarea>
                                        </div>
                                        <button class="botao-azul" style="margin-top: 25px;" type="submit" onClick='return confirmAtt()'>Atualizar</button>
                                        </form>
                                    </div>
                                    <form action="pagina-produto.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" id="id" name="idproduto_remover" value="<?php echo $produto_info[0] ?>">
                                <button class="botao-azul" style="margin-top: 25px; background:red;" type="submit" onClick='return confirmAtt()'>Remover Produto</button>
                                
                                </form>
                                </div>
                                
                                
                            </div>
                            

                    </div>
                
                </div>            

            </div>
        
        
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