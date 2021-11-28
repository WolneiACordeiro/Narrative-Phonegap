<?php
include("php/conexao.php");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Narrative - Main</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <script type="text/javascript" src="js/jquery.js"></script>

  <script>
      $(document).ready(function() { 
        var idbusca = parseFloat(localStorage.getItem('idparam'));
        var url = "php/consultaid.php?id="+ idbusca;
            $.ajax({
                  type: "POST",crossDomain: true, cache: false,
                  url: url,
                  data: url,
                      success: function(data){
                          $.getJSON(url, function(result) {       			   
                              $.each(result, function(i, field) {
                                                          
                                  var id = field.idConta;
                                  var email = field.emailConta;
                                  var senha = field.senhaConta;  

                              });        
                          });	
                      }
                  });
		    });	
  </script>

  <script>
        window.onload = function() {
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            document.getElementById("dataSave").innerHTML = `${date}`;
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            document.getElementById("horaSave").innerHTML = `${time}`;
        }

        let randomLat = Math.floor(Math.random() * 20000000000);
        let randomLong = Math.floor(Math.random() * 20000000000);

        let valorA = "-24.488" + randomLat;
        let finalLat = parseFloat(valorA);
        let valorB = "-47.841" + randomLong;
        let finalLong = parseFloat(valorB);
        
    </script>

</head>

<body>

<?php
  $usuario_id = $_GET["id"];
  $query = mysqli_query($con,"SELECT * FROM contausuario WHERE idConta = $usuario_id");
  $exibeUsuario = mysqli_fetch_array($query); 

  $imagem = $exibeUsuario[4];
?>
                            
<input type="hidden" id="campo-id" name="campo_id" value="<?php echo $exibeUsuario[0] ?>">

  <section id="container-main">
    <div class="blue-header-main animate-apper">
      <div class="blue-header-top">
        <img src="img/components/line_top.svg" alt="Linha">
      </div>
      <div class="blue-header-center ">
        <a href="entrar.php"><img class="back-icon" src="img/icons/arrow_back_white_24dp.svg"
            alt="Voltar"></a>
        <div class="text-historic">
        <b id="localSave">Av. Pref Jonas Banks Leite</b>
            <div class="h-location-main"><span id="cidadeSave">Registro</span> <span>|</span> <span id="estadoSave">São Paulo - Brasil</span> <br> <span id="dataSave">21/04/21</span> <span>-</span> <span id="horaSave">16:05</span></div>
        </div>
      </div>
      <div class="blue-header-bottom">
        <img src="img/components/line_bot.svg" alt="Linha">
      </div>
    </div>
    <div class="bottom-block"></div>

    <div id="map" class="map-area-view">
      <a href="usuarioeu.php?id=<?php echo $exibeUsuario[0] ?>"><img class="mask-img-map" src='img/history/users/<?php echo $imagem ?>'></a>
    </div>

  </section>

  <div class="slider-container">
    <section class="center slider">

    <?php
				$query = mysqli_query($con, "SELECT * FROM contaUsuario inner join historia on idUsuarioHistoria = idConta");
				while ($exibe = mysqli_fetch_array($query)) { 
			?>

      <a href="historialer.php?id=<?php echo $exibe[5] ?>">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/<?php echo $exibe[4] ?>" alt="Usuário">
            <img class="img-area" src="img/history/views/<?php echo $exibe[19] ?>">
          </div>
          <div class="img-desc">
            <span class="img-title"><?php echo $exibe[6] ?></span>
            <span class="img-desc-text"><?php echo $exibe[1] ?></span>
            <span class="img-desc-text img-desc-date"><?php echo $exibe[10] ?> - <?php echo $exibe[11] ?></span>
          </div>
        </div>
      </a>

			<?php
				}
			?> 

      <!--a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_milena.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/coliseum.jpg">
          </div>
          <div class="img-desc">
            <span class="img-title">Noite Chuvosa - Av. Banks Leite</span>
            <span class="img-desc-text">Milena Bellucci</span>
            <span class="img-desc-text img-desc-date">24/03/19 - 10:06</span>
          </div>
        </div>
      </a>

      <a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_marco.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/templo_venus.JPG">
          </div>
          <div class="img-desc">
            <span class="img-title">1929</span>
            <span class="img-desc-text">Marco Fiorentini</span>
            <span class="img-desc-text">02/12/15 - 11:26</span>
          </div>
        </div>
      </a>

      <a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_nera.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/driking_water.jpg">
          </div>
          <div class="img-desc">
            <span class="img-title">Brasil Sushi Tradicional</span>
            <span class="img-desc-text">Neera Siciliani</span>
            <span class="img-desc-text">21/04/21 - 19:06</span>
          </div>
        </div>
      </a>

      <a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_basilio.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/la_biga.jpg">
          </div>
          <div class="img-desc">
            <span class="img-title">Rei do Churrasquinho</span>
            <span class="img-desc-text">Basilio Conti</span>
            <span class="img-desc-text">18/09/20 - 14:32</span>
          </div>
        </div>
      </a>

      <a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_aurelia.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/meta_sudans.jpg">
          </div>
          <div class="img-desc">
            <span class="img-title">Ed. Bela Vista</span>
            <span class="img-desc-text">Aurelia Trevisani</span>
            <span class="img-desc-text">05/01/18 - 11:31</span>
          </div>
        </div>
      </a-->

    </section>

    <div class="sub-options main-sub-options">
      <div id="historia-localiza" class="sub-options-block-1">
          <a href="historiasalvar.php?id=<?php echo $exibeUsuario[0] ?>&lat=22&long=22"><img src="img/icons/create-history-2.svg" alt="Procurar" width="35px"></a>
      </div>
      <img src="img/components/crop_line.svg" alt="Linha">
      <div class="sub-options-block-2">
          <img src="img/logo.svg" alt="Logo" width="75px">
      </div>
      <img src="img/components/crop_line.svg" alt="Linha">
      <div class="sub-options-block-3">
          <a href="historiasarea.php"><img src="img/icons/hist_list.svg" alt="Lista"></a>
      </div>
    </div>

  </div>
  </div>

  <script src="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.js"></script>

  <script>

    var icons = L.icon({
      iconUrl: 'img/icons/pointhist_v1.svg',
      iconSize: [45, 45]
    });
    var planes = [
      <?php
				$query = mysqli_query($con, "SELECT * FROM contaUsuario inner join historia on idUsuarioHistoria = idConta");
				while ($exibeLocal = mysqli_fetch_array($query)) { 
			?>
      ['<a href="historialer.php?id=<?php echo $exibeLocal[5] ?>" class="read-history"><img src="img/history/views/<?php echo $exibeLocal[19] ?>"></a>', <?php echo $exibeLocal[16] ?>, <?php echo $exibeLocal[17] ?>],
      <?php
				}
			?>
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/templo_venus.jpg"></a>', -24.48872576080994, -47.84101830041374],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/royal_art_cafe.jpg"></a>', -24.488270090517993, -47.84200619179869],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/driking_water.jpg"></a>', -24.489146535964984, -47.84121903633443],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/la_biga.jpg"></a>', -24.488360403679977, -47.84095514753982],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/meta_sudans.jpg"></a>', -24.488465380426263, -47.84181037069064],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/oppio_cafe.jpg"></a>', -24.487781577290555, -47.84120775903551],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/passione_diavolo.jpg"></a>', -24.487859575328095, -47.84101378949418],
      //['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/coliseum.jpg"></a>', -24.48851175809058, -47.84119346266169]
    ];


    var map = L.map('map', { zoomControl: false }).setView([finalLat, finalLong], 18);
    mapLink =
      '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
      'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
    }).addTo(map);

    map.scrollWheelZoom.disable();
    map.dragging.disable();

    for (var i = 0; i < planes.length; i++) {
      marker = new L.marker([planes[i][1], planes[i][2]], {icon: icons})
                    .bindPopup(planes[i][0])
                    .setZIndexOffset(99999999999)
                    .addTo(map);
    }

    var icon = L.icon({
      iconUrl: 'img/icons/pointmark_v3.svg',
      iconSize: [100, 100]
    });

    const popup = L.popup({
      closeButton: false,
      className: 'map-popup',
      minWidth: 240,
      minHeight: 240
    }).setContent('<a href="historiasalvar.php?id=<?php echo $exibeUsuario[0] ?>" class="choose-history"><img src="img/icons/create-history.svg"></a>')

    L.marker([finalLat, finalLong], { icon }).addTo(map);

  </script>

  <script src="js/jquery_2_2_0.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function () {
      $(".center").slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
  </script>

  <script>
      var idUsuario = document.getElementById("campo-id").value;
      document.getElementById("historia-localiza").innerHTML = `<a href="historiasalvar.php?id=${idUsuario}&lat=${finalLat}&long=${finalLong}"><img src="img/icons/create-history-2.svg" alt="Procurar" width="35px"></a>`;
    </script>

</body>

</html>