<?php
include("php/conexao.php");
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Narrative - História</title>

    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">
</head>

<body>

<?php

$query = mysqli_query($con, "SELECT * FROM contaUsuario inner join historia on idUsuarioHistoria = idConta AND idHistoria =" . $_GET["id"]);
while ($exibe = mysqli_fetch_array($query)) {

?>

    <section id="container">
        <input type="hidden" name="campo_codigo" value="<?php echo $exibe[5] ?>">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center">
                <a href="javascript:javascript:history.go(-1)"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <span><?php echo $exibe[6] ?></span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="text-gradient">
            <b><?php echo $exibe[7] ?></b>
            <div class="h-location"><span id="cidadeSave"><?php echo $exibe[8] ?></span> <span>|</span> <span id="estadoSave"><?php echo $exibe[9] ?></span> <span>|</span> <span id="dataSave"><?php echo $exibe[10] ?></span> <span>-</span> <span id="horaSave"><?php echo $exibe[11] ?></span></div>
        </div>

        </div>
        
        <div class="history-img">
            <img class="mask-img-history" src="img/history/users/<?php echo $exibe[4] ?>" alt="Usuário">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="img/history/views/<?php echo $exibe[19] ?>" class="history-img-content" alt="Paisagem"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tag-area">
            <div class="tag-gradient">
                <a href=""><span><?php echo $exibe[10] ?></span></a>
            </div>
            <div class="tag-gradient">      
                <a href=""><span><?php echo $exibe[11] ?></span></a>
            </div>
            <div class="tag-gradient">
                <a href=""><span><?php echo $exibe[12] ?></span></a>
            </div>
            <div class="tag-gradient">
                <a href=""><span><?php echo $exibe[13] ?></span></a>
            </div>
        </div>

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">

        <div class="history-text-container">
            <div class="myBox">
                <p>
                <?php echo $exibe[14] ?> 
                    </p>
                </p>
            </div>
        </div>
        
        <div class="sub-options">
            <div class="sub-options-block-1">
                <img src="img/icons/flag.svg" alt="Denunciar">
            </div>
            <img src="img/components/crop_line.svg" alt="Linha">
            <div class="sub-options-block-2">
                <img src="img/icons/share.svg" alt="Compartilhar">
            </div>
            <img src="img/components/crop_line.svg" alt="Linha">
            <div class="sub-options-block-3">
                <img src="img/icons/star.svg" alt="Favoritar">
            </div>
        </div>
        
    </section>

    <?php } ?>

    <script>
        new Splide( '.splide' ).mount();
    </script>


</body>

</html>