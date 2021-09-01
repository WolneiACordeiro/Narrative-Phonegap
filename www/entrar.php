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
            <form name="criar-conta" action="main.php">
                <div class="input-block">
                    <label for="user_name"><b>E-mail</b></label>
                    <input type="text" id="email" name="campo_login">
                </div>
                <div class="input-block">
                    <label for="user_email"><b>Senha</b></label>
                    <input type="text" id="password" name="campo_senha">
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
                <span>Esqueceu sua conta? <a href="#" target="conteudo">Recuperar Conta</a></span> 
            </div>
        </div>
        
        <a class="link animate-apper" id="enter">
            <div class="button-gradient">
                Entrar
            </div>
        </a>
        </form>

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