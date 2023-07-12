<?php
    require_once("../conexao/conexao.php"); 
    session_start();

    if( !isset( $_SESSION["user_portal"] )){
        header("location:index.php");
    }

    if( isset($_POST["titulo"])){
        

            
        $titulo = $_POST["titulo"];
        $texto = $_POST["texto"];
        $sac = $_POST["sac"];
        $endereco = $_POST["endereco"];
        $mapa = $_POST["mapa"];
        

        $sql = "UPDATE contato SET titulo='$titulo', texto='$texto', sac='$sac', endereco='$endereco', mapa='$mapa' ";
        $atualizar = mysqli_query($conexao, $sql);
        $mensagem=1;
    }

    $sql = "SELECT * FROM contato";
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
        
        <script src="https://kit.fontawesome.com/f1debf2a03.js" crossorigin="anonymous"></script>
        
        

    </head>
    
    <body>
        

    <div class="sidenav">
         <a href="../" data-bs-toggle="tooltip" title="Visitar site" target="_blank"><img id="logo-menu" src="../imagens/logo-menu-branco.png"></a>
        <img class="img-fluid onda-sidenav" src="../imagens/ondas1.png">

        <a class="a-menu" href="pagina-inicial.php">Página inicial</a>
        
        <a class="a-menu" href="pagina-somos.php">Quem somos</a>
        
        <a class="a-menu" href="pagina-produto.php">Produtos</a>
        
        <a class="a-menu ativo" href="pagina-contato.php">Contato</a>
        
        <a class="a-menu" href="../" target="_blank">Visitar site</a>

    </div>
    
    
    
    

        <?php $texto = mysqli_fetch_assoc($info); ?>

        <div class="main">
            
            
            
            
        

        
        
            
            
            
        <form action="pagina-contato.php" method="post">
        
        
        

    <div class="container" >
    <div class="row" style="margin-top: 73px; margin-bottom: 43px;"> 
                    <div class="col-6">
                        <h1 class="gestor">Gestor de conteúdo - Ameri Metais - V.1.0</h1>
                    </div>
                    <div class="col-2 offset-2">
                        <h1 class="gestor">Contato</h1>
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

            <h2 class="banners">Bloco 01 - Contato</h2>
            <p class="texto-banners">Edite a página de contato</p>

        <h3 class="item-sistema" style="margin-top: 30px;">Título da página</h3>     
        <textarea name="titulo" rows="1" style="width:100%;"><?php echo $texto["titulo"] ?></textarea> 
        <h3 class="item-sistema" style="margin-top: 30px;">Chamada</h3>  
        <textarea name="texto" rows="1" style="width:100%;"><?php echo $texto["texto"] ?></textarea>
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-3 col-md-3 col-sm-8 col-8">
                <h3 class="item-sistema" style="margin-top: 30px;">SAC</h3>  
                <textarea name="sac" rows="1" style="width:100%;"><?php echo $texto["sac"] ?></textarea>
                
            </div>
            <div class="col-9">
                <h3 class="item-sistema" style="margin-top: 30px;">Endereço</h3>  
                <textarea name="endereco" rows="5" style="width:100%;"><?php echo $texto["endereco"] ?></textarea>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="item-sistema" style="margin-top: 30px;">Link Google Maps</h3>
                <textarea name="mapa" rows="1" style="width:100%;"><?php echo $texto["mapa"] ?></textarea>
                <?php echo $texto["mapa"] ?>
            </div>
        </div>
    </div>

            <div class="container-fluid" id="footer" style="margin-top: 80px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <button class="botao-azul" type="submit">ATUALIZAR</button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        

    </body>

        
        
</html>