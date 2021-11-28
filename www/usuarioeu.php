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
    <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
    <script src="js/less.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <title>Narrative - Usuário</title>

    <script>
      function enableSaveImg() {
        document.getElementById("save-button-area").style.visibility = 'visible';
      }
    </script>
</head>

<body>

<?php
  $usuario_id = $_GET["id"];
  $query = mysqli_query($con,"SELECT * FROM contausuario WHERE idConta = $usuario_id");
  $exibe = mysqli_fetch_array($query); 

  $imagem = $exibe[4];
  $nomeConta = $exibe[1];
?>

    <section id="container">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center">
                <a href="main.php?id=<?php echo $usuario_id ?>"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <span>Minha Conta</span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <form action="php/avatarupdate.php" method="post" enctype="multipart/form-data"> 
            <input type="hidden" id="campo-id" name="campo_id" value="<?php echo $usuario_id ?>">
            <div>
                <div class="user-information">
                    <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' name="arquivo" id="imageUpload" accept=".png, .jpg, .jpeg" onchange="enableSaveImg()"/>
                    <label for="imageUpload">
                        <img src="img/icons/image_black.svg" width="23px">
                    </label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" name="file" style="background-image: url(img/history/users/<?php echo $imagem ?>);" >
                    </div>
                </div>
            </div>
                    <b><?php echo $nomeConta ?></b>
                </div>

            <div id="save-button-area">
                <button type="submit"  value="Sumbit" class="button-save-gradient" id="salvarButton">Salvar</button>
            </div>
        </form>

            <div class="user-options-container">

            <div class="user-options">
                <img class="" src="img/components/blue_line.svg" alt="Linha Azul">
                <a href="historico.php">
                    <div class="user-options-option">
                        <img src="img/icons/history.svg" alt="Histórico"><b>Histórico</b>
                    </div>
                </a>
            </div>
            <div class="user-options">
                <img class="" src="img/components/blue_line.svg" alt="Linha Azul">
                <a href="#">
                    <div class="user-options-option">
                        <img src="img/icons/user.svg" alt="Perfil"><b>Perfil</b>
                    </div>
                </a>
            </div>
            <div class="user-options">
                <img class="" src="img/components/blue_line.svg" alt="Linha Azul">
                <a href="#">
                    <div class="user-options-option">
                        <img src="img/icons/settings.svg" alt="Configurações"><b>Configurações</b>
                    </div>
                </a>
            </div>
            <div class="user-options">
                <img class="" src="img/components/blue_line.svg" alt="Linha Azul">
                <a href="minhashistorias.php?id=<?php echo $usuario_id ?>">
                    <div class="user-options-option">
                        <img src="img/icons/write.svg" alt="Minhas Histórias"><b>Minhas Histórias</b>
                    </div>
                </a>
            </div>
            <div class="user-options">
                <img class="" src="img/components/blue_line.svg" alt="Linha Azul">
                <a id="myBtn">
                    <div class="user-options-option">
                        <img src="img/icons/leave.svg" alt="Sair"><b>Sair</b>
                    </div>
                </a>
            </div>

            </div>

        </div>

        <div id="myModal" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <h2>Sair</h2>
                </div>
                <div class="modal-body">
                    <div class="modal-body-sub">
                        <p>Deseja realmente sair?</p>
                        <div class="modal-body-options">
                            <a class="modal-option" href="index.php">
                                <div class="user-options-yes">
                                    <h1>Sim</h1>
                                </div>
                            </a>
                            <a class="modal-option close" href="#">
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

        <!--div class="blue-underline"></div-->
        
    </section>
    
    <script src="js/modal.js"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function () {
            readURL(this);
        });
    </script>

</body>

</html>