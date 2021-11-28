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
    <script src="js/index.js"></script>
    <title>Narrative - História</title>

    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">

</head>

<body>

    <section id="container">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center">
                <a href="javascript:javascript:history.go(-1)"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <a id="myBtn03" class="edit-text"><span id="titulo-1">Insira um Título</span></a>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="text-gradient">
            <b>Via delle Terme di Titoi</b>
            <span>Roma | Lácio - Itália | 21/04/21 - 16:05</span>
        </div>

        <div class="historysave-img">

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="img/history/views/deafult_view.jpg"
                                class="history-img-content" alt="Default"></li>
                    </ul>
                </div>
            </div>

            <div class="mask-icon-history-1">
                <img src="img/icons/photo.svg" alt="Selecionar Foto">
            </div>
            <div class="mask-icon-history-2">
                <img src="img/icons/photolibrary.svg" alt="Selecionar Foto">
            </div>
        </div>

        <div class="tag-area">
            <div class="tag-gradient">
                <span>21/04/21</span>
            </div>
            <div class="tag-gradient">
                <span>16:05</span>
            </div>
            <div class="tag-gradient">
                <a id="myBtn"><span id="tag-1">#</span></a>
            </div>
            <div class="tag-gradient">
                <a id="myBtn02"><span id="tag-2">#</span></a>
            </div>
        </div>

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">

        <div class="history-text-container">
            <textarea class="myBox textarea-insert" placeholder="Me conte algo..."></textarea>
        </div>

        <div class="sub-options">
            <div class="sub-options-block-1">
                <img src="img/icons/close.svg" alt="Fechar">
            </div>
            <img src="img/components/crop_line.svg" alt="Linha">
            <div class="sub-options-block-2">
                <img src="img/icons/delete.svg" alt="Limpar">
            </div>
            <div class="sub-options-block-3 block-3-blue">
                <img src="img/icons/save.svg" alt="Salvar">
            </div>
        </div>

        <div id="myModal" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <h2>Tag</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-body-sub">
                        <div class="modal-body modal-body-search">
                            <div class="modal-body-sub">
                                <div class="search-gradient">
                                    <div class="input-block-white">
                                        <input type="text" id="tagum" name="Tagum" maxlength="30">
                                    </div>
                                    <img class="id-icon-main id-icon-main-left" src="img/icons/tag.svg" alt="Tag">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-options close">
                        <a class="modal-option-2" onclick="inserirTagUm()">
                            <div class="user-options-yes">
                                <h1>Salvar</h1>
                            </div>
                        </a>
                        <a class="modal-option-2 close">
                            <div class="user-options-no">
                                <h1>Cancelar</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>

        <div id="myModal02" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <h2>Tag</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-body-sub">
                        <div class="modal-body modal-body-search">
                            <div class="modal-body-sub">
                                <div class="search-gradient">
                                    <div class="input-block-white">
                                        <input type="text" id="tagdois" name="Tagdois" maxlength="30">
                                    </div>
                                    <img class="id-icon-main id-icon-main-left" src="img/icons/tag.svg" alt="Tag">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-options close-02">
                        <a class="modal-option-2" onclick="inserirTagDois()">
                            <div class="user-options-yes">
                                <h1>Salvar</h1>
                            </div>
                        </a>
                        <a class="modal-option-2 close-02">
                            <div class="user-options-no">
                                <h1>Cancelar</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>

        <div id="myModal03" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <h2>Insira um título</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-body-sub">
                        <div class="modal-body modal-body-search">
                            <div class="modal-body-sub">
                                <div class="search-gradient">
                                    <div class="input-block-white">
                                        <input type="text" id="titulo" name="Titulo" maxlength="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body-options close-03">
                        <a class="modal-option-2" onclick="inserirTitulo()">
                            <div class="user-options-yes">
                                <h1>Salvar</h1>
                            </div>
                        </a>
                        <a class="modal-option-2 close-03">
                            <div class="user-options-no">
                                <h1>Cancelar</h1>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>

    </section>

    <script src="js/modal.js"></script>
    <script src="js/modal_2.js"></script>
    <script src="js/modal_3.js"></script>
    <script>
        new Splide('.splide').mount();
    </script>

</body>

</html>