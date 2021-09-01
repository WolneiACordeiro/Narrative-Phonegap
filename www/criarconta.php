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
    <title>Narrative - Criar Conta</title>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#insert").click(function () {
                var nome = $("#name").val();
                var email = $("#email").val();
                var senha = $("#password").val();
                var dataString = "name=" + nome + "&email=" + email + "&password=" + senha + "&insert=";
                if ($.trim(nome).length > 0 & $.trim(email).length > 0 & $.trim(senha).length > 0) {
                    $.ajax({
                        type: "POST",
                        url: "php/cadastrar.php",
                        data: dataString,
                        crossDomain: true,
                        cache: false,
                        beforeSend: function () {
                            $("#insert").val('Connectando ao banco...');
                        },
                        success: function (data) {
                            if ($.trim(data = "success")) {
                                alert("Dados Inseridos com sucesso");
                                $("#insert").val('Cadastrar');
                            } else if (data == "error") {
                                alert("error");
                            }
                        }
                    });
                }
                return false;
            });
        });
    </script>

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
                <span>Criar Conta</span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="form-conta animate-apper list">
            <input type="hidden" id="id">
                <div class="input-block">
                    <label><b>Nome</b></label>
                    <input type="text" id="name">
                </div>
                <div class="input-block">
                    <label><b>E-mail</b></label>
                    <input type="text" id="email">
                </div>
                <div class="input-block">
                    <label><b>Senha</b></label>
                    <input type="password" id="password" >
                </div>
                <div class="input-block">
                    <label><b>Repetir Senha</b></label>
                    <input type="password" id="repeatpassword">
                </div>
            <div class="termos subtexto">
                <input type="checkbox" value="Condicoes" name="condicoes"><span>Concordo com os <a href="#" target="conteudo">Termos & Condições</a></span> 
            </div>
            <a class="link animate-apper" id="insert">
                <div class="button-gradient">
                    Criar Conta
                </div>
            </a>
            <!--div>
                <input type="button" id="insert" value="Cadastrar">
            </div-->
        </div>
        
        
        

    </section>

    <div class="blue-wave">
        <img src="img/components/wave.svg" width="100%" alt="Wave">
    </div>
</body>

<script language="javascript">
    window.onload = function onfocus() {
        document.getElementById('name').focus();
    };
</script>

</html>