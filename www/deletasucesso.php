<?php
include("php/conexao.php");
$id = $_GET["id"];
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
    <title>Narrative</title>
</head>

<body>
    <input type="hidden" id="postId" name="postId" value="<?php echo $id ?>">
    <section id="container">

        <div class="logo animate-apper">
            <div class="big-icon-sucess">
                <img src="img/icons/check_circle.svg" alt="Sucesso!">
            </div>
            <img src="img/components/blue_line_2.svg" alt="Linha Azul">
            <h2>História Deletada com sucesso!</h2>
        </div>
        

    </section>
    <div class="wave animate-apper">
        <img src="img/components/wave.svg" width="100%" alt="Wave">
    </div>

    <script>
        setTimeout(function(){
            var idConta = document.getElementById("postId").value;
 	        window.location.assign(`minhashistorias.php?id=${idConta}`); 
        }, 3000);
    </script>
</body>

</html>