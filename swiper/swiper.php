<?php
$sql2 = "SELECT * FROM swipper";
    $info_swipper = mysqli_query($conexao,$sql2);
    $swipper = mysqli_fetch_all($info_swipper,MYSQLI_BOTH);
?>


<div class="swiper mySwiper " style="padding-left: 55.5px;">
                    
                        <div class="swiper-wrapper " >
                        <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[0]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[0]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[0]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[1]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[1]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[1]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[2]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[2]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[2]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[3]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[3]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[3]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[4]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[4]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[4]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[5]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[5]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[5]["nome"]; ?></p>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[6]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[6]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[6]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[7]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[7]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[7]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[8]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[8]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[8]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[9]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[9]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[9]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[10]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[10]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[10]["nome"]; ?></p>
                            </div>
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[11]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[11]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[11]["nome"]; ?></p>
                            </div>
                            
                            <div class="swiper-slide">
                                <div class="redonda">
                                    <a href="../produtos/index.php?codigo=<?php echo $swipper[12]["categoria"]; ?>"> <img class="img-fluid img-cent img-swipper" src="../<?php echo $swipper[12]["imagem"]; ?>" > </a>
                                </div>
                                <p class="texto-swiper"><?php echo $swipper[12]["nome"]; ?></p>
                            </div>
                            
                            
                        </div>
                        
                        <div class="swiper-button-next swiper-navBtn">
                            <img src="../imagens/seta-dir.png" id="teste3">
                        </div>
                        <div class="swiper-button-prev swiper-navBtn">
                            <img src="../imagens/seta-esq.png">
                        </div>
                       
                    </div>