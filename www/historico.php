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
                    <b>Histórico</b>
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
            
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_marco.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/templo_venus.JPG" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>1929</b>
                    <span>Marco Fiorentini</span>
                    <div class="historic-session-desc-sub">
                        <span>02/12/15 - 11:26 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>101 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>02/12/15</span>
                </div>
                <div class="tag-gradient-history">
                    <span>11:26</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#1929</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Chuva</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_nera.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/driking_water.jpg" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>Brasil Sushi - Tradicional</b>
                    <span>Neera Siciliani</span>
                    <div class="historic-session-desc-sub">
                        <span>21/04/21 - 19:06 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>58 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>21/04/21</span>
                </div>
                <div class="tag-gradient-history">
                    <span>19:06</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Comida</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Japan</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_basilio.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/la_biga.jpg" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>Rei do Churrasquinho</b>
                    <span>Basilio Conti</span>
                    <div class="historic-session-desc-sub">
                        <span>18/09/20 - 14:32 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>329 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>18/09/20</span>
                </div>
                <div class="tag-gradient-history">
                    <span>14:32</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Rei</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Food</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_aurelia.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/meta_sudans.jpg" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>Ed. Bela Vista</b>
                    <span>Aurelia Trevisani</span>
                    <div class="historic-session-desc-sub">
                        <span>05/01/18 - 11:31 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>238 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>05/01/18</span>
                </div>
                <div class="tag-gradient-history">
                    <span>11:31</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Lar</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Novo</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_deodata.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/royal_art_cafe.jpg" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>Secos e Molhados</b>
                    <span>Deodata Fanucci</span>
                    <div class="historic-session-desc-sub">
                        <span>03/04/20 - 10:45 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>358 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>03/04/20</span>
                </div>
                <div class="tag-gradient-history">
                    <span>10:45</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Loja</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Store</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
        <div class="historic-session">
            <div class="historic-session-grid">
                <div class="historic-session-img">
                    <img class="mask-img-history-small" src="img/history/users/user_celio.jpg" alt="Usuário">
                    <img class="history-img-content" src="img/history/views/passione_diavolo.JPG" alt="Paisagem">
                </div>
                <div class="historic-session-desc">
                    <b>Passado vs. Presente</b>
                    <span>Celio Sagese</span>
                    <div class="historic-session-desc-sub">
                        <span>25/01/21 - 11:08 |</span><i> <img src="img/icons/star.svg" alt="Favoritos"> </i><span>256 Favoritos</span>
                    </div>
                </div>
            </div>
            <div class="tag-area-history">
                <div class="tag-gradient-history">
                    <span>25/01/21</span>
                </div>
                <div class="tag-gradient-history">
                    <span>11:08</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#History</span>
                </div>
                <div class="tag-gradient-history">
                    <span>#Registro</span>
                </div>
            </div>
            <img src="img/components/blue-div-line.svg" alt="Divisória">
        </div>
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