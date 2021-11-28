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

        <!--script>
                /**
                $(document).ready(function () {
                    $("#registerButton").click(function () {
                        var url = "php/cadastrar.php";
                        var nome = $("#name").val();
                        var email = $.trim($("#email").val());
                        var password = $.trim($("#password").val());
                        $("#status").text("Criando novo usuário...");
                        var dataString = "name=" + nome + "&email=" + email + "&password=" + password + "&register=";
                        $.ajax({
                            type: "POST", crossDomain: true, cache: false,
                            url: url,
                            data: dataString,
                            success: function (data) {
                                if ($.trim(data == "success")) {
                                    alert("Dados Inseridos com sucesso");
                                    $("#status").text("Cadastrado com sucesso!");
                                }
                                else if ($.trim(data == "exist")) {
                                    alert("A conta já existe!");
                                    $("#status").text("Está conta já existe");
                                }       
                                else if ($.trim(data == "error")) {
                                    alert("Falha ao cadastrar!");
                                    $("#status").text("Falha no Cadastro");
                                }       
                            }
                        });
                    });
                });
                **/
            </script-->

</head>

<body>
    <section id="container">
        <div class="blue-header animate-apper">
            <div class="blue-header-top">
                <img src="img/components/line_top.svg" alt="Linha">
            </div>
            <div class="blue-header-center">
                <a href="index.php"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <span>Criar Conta</span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="form-conta animate-apper list">
            <form action="php/cadastrar.php" method="post">

                <input type="hidden" id="id">
                    <div class="input-block">
                        <label><b>Nome</b></label>
                        <input type="text" name="name" id="name" maxlength="30" required>
                    </div>
                    <div class="input-block">
                        <label><b>E-mail</b></label>
                        <input type="text" id="email" name="email" maxlength="50" required>
                    </div>
                        <div class="input-block">
                            <label><b>Senha</b></label>
                            <input type="password" name="password" id="password" maxlength="20" required>
                        </div>
                        <div class="input-block">
                            <label><b>Repetir Senha</b></label>
                            <input type="password" name="confirm_password" id="confirm_password" maxlength="20" required>
                        </div>
                    <span id='message'></span>
                <div class="subtexto termos">
                    <input type="checkbox" value="Condicoes" name="condicoes" required><span>Concordo com os <a href="#" target="conteudo">Termos & Condições</a></span> 
                </div>
                <button type="submit" class="button-gradient" id="registerButton--">Criar Conta</button>
            </form>
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
<script language="javascript">
            var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("As senhas não correspondem");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</html>