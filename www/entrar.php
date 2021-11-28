<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />

    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <title>Narrative - Entrar</title>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginButton").click(function(){
                var   email     = $.trim($("#email").val());
                var   password    = $.trim($("#password").val());
                $("#status").text("Buscando usuário...");
                //var loginString ="email="+ email  +"&password="+ password +"&login=";
	            var url ="php/logar.php?email="+ email  +"&password="+ password;
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: url,
                    success: function(data){

                    if($.trim(data) != 0) {
						$.getJSON(url, function(result) {       
                            $.each(result, function(i, field) {
                                var    id    = field.idConta;
                                $("#status").text("Logado com Sucesso..!");
                                localStorage.loginstatus = "true";
                            
                                window.location.href = "main.php?id=" + id;
                                localStorage.setItem('idparam' , id);
				            });			
                        
                        });
                    } 
                    else if(data == "error")
                        {
                            $("#status").text("Usuário Incorreto..!");
                        }	
                    }
                });
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
                <a href="index.php"><img class="back-icon"
                        src="img/icons/arrow_back_white_24dp.svg" alt="Voltar"></a>
                <span>
                    Entrar
                </span>
            </div>
            <div class="blue-header-bottom">
                <img src="img/components/line_bot.svg" alt="Linha">
            </div>
        </div>
        <div class="bottom-block"></div>

        <div class="form-entrar animate-apper">
            <!-- <form name="criar-conta"> -->
                <div class="input-block">
                    <label for="user_name"><b>E-mail</b></label>
                    <input type="text" id="email" maxlength="50" required>
                </div>
                <div class="input-block">
                    <label for="user_email"><b>Senha</b></label>
                    <input type="password" id="password" maxlength="20" required>
                </div>
            <div class="login-options">
                <div class="login-options-option">
                    <a href="#"><img src="img/icons/google_icon.svg" alt="Google"></a>
                </div>
                <div class="login-options-option">
                    <a href="#"><img src="img/icons/facebook_icon.svg" alt="Facebook"></a>
                </div>
                <div class="login-options-option">
                    <a href="#"><img src="img/icons/twitter_icon.svg" alt="Twitter"></a>
                </div>
            </div>
            <div class="recuperar-conta subtexto">
            <span>Não tem uma conta? <a href="criarconta.php" >Criar Conta</a></span> 
                <span>Esqueceu sua conta? <a href="#" >Recuperar Conta</a></span> 
            </div>
            <button type="button" class="button-gradient" id="loginButton">Entrar</button>
            <!-- </form> -->
        </div>

    </section>

    <div class="blue-wave">
        <img src="img/components/wave.svg" width="100%" alt="Wave">
    </div>
</body>

<script language="javascript">
    window.onload = function onfocus() {
        document.getElementById('email').focus();
    };
</script>

</html>