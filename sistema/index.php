<?php
    require_once("../conexao/conexao.php");

    session_start();

    if( isset( $_POST["usuario"] )){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $login = "SELECT * FROM login WHERE usuario = '{$usuario}' and senha = '{$senha}' ";

        $acesso = mysqli_query($conexao,$login);
        if(!$acesso){
            die("Falha na conexão com o banco de dados.");
        }
        $info = mysqli_fetch_assoc($acesso);
        if( empty($info)){
            $mensagem = "Login sem sucesso.";
        }else{
            $_SESSION["user_portal"] = $info["usuario"];
            header("location:pagina-inicial.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ameri Metais</title>
        <link rel="icon" type="image/x-icon" href="../imagens/icone.ico"> 
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="/css/swiper-bundle.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        
<style>
            @media screen{
                .pc {
                display: block;
                }
                .mobile {
                display: none;
                }
            }
            @media all and (max-width: 479px) {
                .pc {
                display: none;
                }
                .mobile {
                display: block;
                }
            }
        </style>


    </head>
    
    <body style="background-color: #0A1733;">
    
    <div class="pc">    
        <div class="container" id="container-login" style="background-color: transparent;">
            
            <div class="row" style="margin-top: 72px; margin-bottom:60px;">
                <di class="col-3 offset-3">
                    <img class="img-fluid" src="../imagens/logo-menu-branco.png">
                </di>
                <div class="col-3 offset-1">
                    <p class="texto-gestor">Gestor de conteúdo<br>Ameri Metais - V.1.0</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6 offset-3">
                    <img class="img-fluid" id="onda-menu" src="../imagens/ondas-adm.png">
                </div>
            </div>

            <div class="row" style="margin-top: 70px;">
                
                    <form action="index.php" method="post">
                        <div class="col-4 offset-4">
                            <label class="label-login" style="margin-bottom: 14px;">Login:</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Digite seu login">
                            
                        </div>
                        <div class="col-4 offset-4" style="margin-top: 17px;">
                            <label class="label-login" style="margin-bottom: 14px;">Senha:</label>
                            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                            
                        </div>
                        <div class="col-4 offset-4" style="margin-top: 17px;">
                            <button style="margin-top: 15px; width:100%;" type="submit" class="btn btn-info">Entrar</button> 
                        </div>
                        <div class="col-4 offset-4" style="margin-top: 17px;">
                            <a href="senha.php" class="a-senha">Esqueceu a senha?</a>
                        </div>
                        
                    </form>
                    <?php 
                        if( isset($mensagem)){
                    ?>
                    <p> <?php echo $mensagem ?> </p>
                    <?php
                        }
                    ?>
            </div>

        </div>
        <div class="container-fluid rodape-login">
            <div class="container">
                <div class="row">    
                    <div class="col-4">
                        <p class="texto-rodape">GESTOR DE CONTEÚDO - AMERI METAIS - V.1.0</p>
                    </div>
                    <div class="col-3 offset-5">
                        <p class="texto-rodape">DESENVOLVIDO POR  &nbsp <a class="amarela" href="https://www.instagram.com/firmarela/">Firmarela</a></p>
                    </div>
                </div>
            </div>

        </div>
        </div>   

    <div class="mobile">
        <img src="../imagens/logo-menu-branco.png" style="position:absolute; top:100px; left:50px">
        <p class="texto-gestor" style="position:absolute; top:200px; left:50px">Gestor de conteúdo<br>Ameri Metais - V.1.0</p>
        <img class="img-fluid" id="onda-menu" src="../imagens/ondas-adm.png" style="position:absolute; top:280px; left:0px">
        <p class="texto-gestor" style="position:absolute; top:350px; left:50px; width:200px; color: white; font-size:18px">Acesso ao gestor de conteúdo somente é permitido via desktop</p>
        <a href="../"><button style="position:absolute; top:450px; left:50px; width:200px;" class="btn btn-info">Ir para site</button></a>
        
        
        
        <div class="container-fluid rodape-login">
            
                <div class="row">    
                    <div class="col-7">
                        <p style="font-size:8px; padding-top:8px;" class="texto-rodape">GESTOR DE CONTEÚDO - AMERI METAIS - V.1.0</p>
                    </div>
                    <div class="col-5 ">
                        <p style="font-size:8px; padding-top:8px;" class="texto-rodape">DESENVOLVIDO POR &nbsp &nbsp &nbsp<a class="amarela" href="https://www.instagram.com/firmarela/">Firmarela</a></p>
                    </div>
                </div>
            

        </div>
    </div>


    
        <script src="/js/swiper-bundle.min.js"></script>
        <script src="/js/main.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

        
        
</html>