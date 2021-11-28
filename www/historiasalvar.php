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

    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <script src="js/index.js"></script>

    <title>Narrative - História</title>

    <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">

    <script>
        window.onload = function() {
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            document.getElementById("dataSave").innerHTML = `${date}`;
            document.getElementById("dataTag").innerHTML = `${date}`;

            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            document.getElementById("horaSave").innerHTML = `${time}`;
            document.getElementById("horaTag").innerHTML = `${time}`;
        }
    </script>

</head>

<body>

<?php
  $usuario_id = $_GET["id"];
  $usuario_lat = $_GET["lat"];
  $usuario_long = $_GET["long"];
  $query = mysqli_query($con,"SELECT * FROM contausuario WHERE idConta = $usuario_id");
  $exibeUsuario = mysqli_fetch_array($query); 
?>

    <script type="text/javascript">
        function showPreview(event){
            areaMostrar = document.getElementById('mostrar-image');
            var meuHTML = "";
            let num = event.target.files.length;
            let contx = 0;
        if(event.target.files.length > 0){

            for (var x = 1; x <= num; x++) {
                var src = URL.createObjectURL(event.target.files[`${contx}`]);
                meuHTML += `<li class="splide__slide"><img id="file-preview" src="${src}" class="history-img-content" alt="Default"></li>`;
                contx++;
            }
            
            
            areaMostrar.innerHTML = meuHTML;
             }
             
                new Splide('.splide').mount();
        }
    </script>

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

        <input type="hidden" id="postId" name="postId" value="<?php echo $usuario_id ?>">
        <input type="hidden" id="latLocal" name="latLocal" value="<?php echo $usuario_lat ?>">
        <input type="hidden" id="longLocal" name="longLocal" value="<?php echo $usuario_long ?>">

        <div class="text-gradient">
            <b id="localSave">Av. Pref Jonas Banks Leite</b>
            <div class="h-location"><span id="cidadeSave">Registro</span> <span>|</span> <span id="estadoSave">São Paulo - Brasil</span> <span>|</span> <span id="dataSave">21/04/21</span> <span>-</span> <span id="horaSave">16:05</span></div>
        </div>

        <div class="historysave-img">

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list" id="mostrar-image">
                        <li class="splide__slide"><img id="file-preview" src="img/history/views/deafult_view.jpg"
                                class="history-img-content" alt="Default"></li>
                    </ul>
                </div>
            </div>

            <div class="mask-icon-history-1">
                <img src="img/icons/photo.svg" alt="Selecionar Foto">
            </div>
            <div class="mask-icon-history-2">
                <label for="file" class="input-image-label"><img src="img/icons/photolibrary.svg" alt="Selecionar Foto"></label>
            </div>
        </div>

        <div class="tag-area">
            <div class="tag-gradient">
                <span id="dataTag">10/11/21</span>
            </div>
            <div class="tag-gradient">
                <span id="horaTag">19:05</span>
            </div>
            <div class="tag-gradient">
                <a id="myBtn"><span id="tag-1">#</span></a>
            </div>
            <div class="tag-gradient">
                <a id="myBtn02"><span id="tag-2">#</span></a>
            </div>
        </div>

        <div class="center">
            <div class="form-input">
                <input type="file" id="file" name="file" accept="image/*" onchange="showPreview(event);"  hidden>
            </div>
        </div> 

        <img src="img/components/blue_line_2.svg" alt="Linha Azul">

        <div class="history-text-container">
            <textarea id="historiaTexto" class="myBox textarea-insert" placeholder="Me conte algo..."></textarea>
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
                <a id="myBtn06"><img src="img/icons/save.svg" alt="Salvar"></a>
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

        <div id="myModal06" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <h2>Salvar</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-body-sub">
                        <p>Terminar e salvar?</p>
                        <div class="modal-body-options">
                            <a class="modal-option-delete" id="insert" onclick="cadastrar()">
                                <div class="user-options-yes">
                                    <h1>Sim</h1>
                                </div>
                            </a>
                            <a class="modal-option-delete close-06" href="#">
                                <div class="user-options-no">
                                    <h1>Não</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>

        </div>

    </section>

    <script type="text/javascript">

function cadastrar() {

    var tituloSave = document.getElementById('titulo-1').innerText;
    var localSave = document.getElementById('localSave').innerText;
    var cidadeSave = document.getElementById('cidadeSave').innerText;
    var estadoSave = document.getElementById('estadoSave').innerText;
    var dataSave = document.getElementById('dataSave').innerText;
    var horaSave = document.getElementById('horaSave').innerText;
    var tagUm = document.getElementById('tag-1').innerText;
    var tagDois = document.getElementById('tag-2').innerText;
    var latLocal = $("#latLocal").val();
    var longLocal = $("#longLocal").val();
    var postId = $("#postId").val();
    var historiaTexto = $("#historiaTexto").val();

    console.log(tituloSave);
    console.log(localSave);
    console.log(cidadeSave);
    console.log(estadoSave);
    console.log(dataSave);
    console.log(horaSave);
    console.log(tagUm);
    console.log(tagDois);
    console.log(latLocal);
    console.log(longLocal);
    console.log(postId);
    console.log(historiaTexto);

    var dataString = "tituloSave=" + tituloSave + "&localSave=" + localSave + "&cidadeSave=" + cidadeSave + "&estadoSave=" + estadoSave + "&dataSave=" + dataSave + "&horaSave=" + horaSave + "&tagUm=" + tagUm + "&tagDois=" + tagDois + "&latLocal=" + latLocal + "&longLocal=" + longLocal + "&postId=" + postId + "&historiaTexto=" + historiaTexto + "&insert=";

    if ($.trim(tituloSave).length > 0 & $.trim(localSave).length > 0 & $.trim(cidadeSave).length > 0 & $.trim(estadoSave).length > 0 & $.trim(dataSave).length > 0 & $.trim(horaSave).length > 0 & $.trim(tagUm).length > 0 & $.trim(tagDois).length > 0 & $.trim(latLocal).length > 0 & $.trim(longLocal).length > 0 & $.trim(postId).length > 0 & $.trim(historiaTexto).length > 0) {

        $.ajax({
            type: "POST",
            url: "php/cadastrarhistoria.php",
            data: dataString,
            crossDomain: true,
            cache: false,
            beforeSend: function () {
                $("#insert").val('Conectando ao banco...');
            },
            success: function (data) {
                if ($.trim(data == "success")) {
                    console.log("Sucesso");
                    window.location.assign(`historiasucesso.php?id=${postId}`);
                    $("#insert").val('Cadastrar');
                } else if (data == "error") {
                    console.log("Erro");
                }
            }
        });
    }

    if (file.files.length > 0) {
        let formData = new FormData();
        formData.append("file", file.files[0]);
        fetch("php/cadastrarhistoria.php", {
            method: 'POST',
            body: formData,
        })
            .then(respuesta => respuesta.text())
            .then(decodificado => {
                console.log(decodificado);
            });
    } else {
        alert("Selecione um arquivo");
    }

    return false;

}

</script>

    <script src="js/modal.js"></script>
    <script src="js/modal_2.js"></script>
    <script src="js/modal_3.js"></script>
    <script src="js/modal_6.js"></script>
    <script>
        new Splide('.splide').mount();
    </script>

</body>

</html>