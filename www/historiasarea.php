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

    <meta http-equiv="Content-Security-Policy"
        content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Narrative - Histórico</title>
</head>

<body>
    <section id="container">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center ">
                <a href="javascript:javascript:history.go(-1)"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <div class="text-historic">
                    <b>Av. Pref. Jonas Banks Leite</b>
                    <span>Registro | São Paulo - Brasil | 10/11/21 - 19:05</span>
                </div>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="search-gradient">
            <div class="input-block-white">
                <label for="search"><span>Procurar</span></label>
                <input type="text" id="search" name="search">
            </div>
            <img class="id-icon" src="img/icons/search.svg" alt="Procurar">
        </div>

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">

        <div class="order-by">
            <img src="img/icons/sort.svg" alt="Ordernar"><b>Ordernar por</b>
        </div>

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">
    
    <div id="historic-list">

    <?php
				$query = mysqli_query($con, "SELECT * FROM contaUsuario inner join historia on idUsuarioHistoria = idConta");
				while ($exibe = mysqli_fetch_array($query)) { 
			?>
        <div class="historic-session">
        <a class="my-stories-link" href="historialer.php?id=<?php echo $exibe[5] ?>">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/<?php echo $exibe[4] ?>" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/<?php echo $exibe[19] ?>" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b><?php echo $exibe[6] ?></b>
                    <span><?php echo $exibe[1] ?></span>
                    <div class="historic-session-desc-sub">
                        <span><?php echo $exibe[10] ?> - <?php echo $exibe[11] ?> |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span><?php echo $exibe[18] ?> Favoritos</span>
                    </div>
                </div>
            </div>
            </a>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span><?php echo $exibe[10] ?></span>
                </div>
                <div class="tag-gradient-history">
                    <span><?php echo $exibe[11] ?></span>
                </div>
                <div class="tag-gradient-history">
                    <span><?php echo $exibe[12] ?></span>
                </div>
                <div class="tag-gradient-history">
                    <span><?php echo $exibe[13] ?></span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <?php
				}
			?> 

    </div>

    <div class="blue-underline"></div>

    </section>
</body>

<script language="javascript">
    window.onload = function onfocus() {
        document.getElementById('search').focus();
    };
</script>

</html>