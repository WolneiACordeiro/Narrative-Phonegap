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

</head>

<body>

  <section id="container">
    <div class="blue-header animate-apper">
      <div class="blue-header-top">
        <img src="img/components/line_top.svg" alt="Linha">
      </div>
      <div class="blue-header-center ">
        <a href="index.php"><img class="back-icon" src="img/icons/arrow_back_white_24dp.svg"
            alt="Voltar"></a>
        <div class="text-historic">
          <b>Via delle Terme di Titoi</b>
          <span>Roma | Lácio - Itália | 21/04/21 - 16:05</span>
        </div>
      </div>
      <div class="blue-header-bottom">
        <img src="img/components/line_bot.svg" alt="Linha">
      </div>
    </div>
    <div class="bottom-block"></div>

    <div id="map" class="map-area-view">
      <a href="usuarioeu.php"><img class="mask-img-map" src="img/history/users/user_gisele.jpg" alt="Usuário"></a>
    </div>



  </section>

  <div class="slider-container">
    <section class="center slider">

      <a href="historialer.php?id=1">
        <div class="slider-area">
          <div class="img-area-main">
            <img class="mask-img-history-medium" src="img/history/users/user_milena.jpg" alt="Usuário">
            <img class="img-area" src="img/history/views/coliseum.jpg">
          </div>
          <div class="img-desc">
            <span class="img-title">Coliseum</span>
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
            <span class="img-title">Templo de Vénus e Roma</span>
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
            <span class="img-title">Drinking water fountain</span>
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
            <span class="img-title">Caffè dello Studente</span>
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
            <span class="img-title">Meta Sudans</span>
            <span class="img-desc-text">Aurelia Trevisani</span>
            <span class="img-desc-text">05/01/18 - 11:31</span>
          </div>
        </div>
      </a>

    </section>

    <div class="sub-options main-sub-options">
      <div class="sub-options-block-1">
          <a href="historiasalvar.php?id=1"><img src="img/icons/create-history-2.svg" alt="Procurar" width="35px"></a>
      </div>
      <img src="img/components/crop_line.svg" alt="Linha">
      <div class="sub-options-block-2">
          <img src="img/logo.svg" alt="Logo" width="75px">
      </div>
      <img src="img/components/crop_line.svg" alt="Linha">
      <div class="sub-options-block-3">
          <a href="historico.php"><img src="img/icons/hist_list.svg" alt="Lista"></a>
      </div>
    </div>
    
  </div>

  <div id="myModal" class="modal">

    <div class="modal-content">
        <div class="modal-header">
          <div>
            <h3>Procurar</h3>
          </div>
          <div>
            <span class="close close-x">&times;</span>
          </div>
        </div>
        <div class="modal-body modal-body-search">
            <div class="modal-body-sub">
                <div class="search-gradient">
                  <div class="input-block-white">
                      <input type="text" id="search" name="search">
                  </div>
                  <img class="id-icon-main" src="img/icons/search.svg" alt="Procurar">
              </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>

</div>

  <script src="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.js"></script>

  <script>
    if('geolocation' in navigator){
            /*navigator.geolocation.getCurrentPosition(function(position){
                console.log(position)
            }, function(error){
                console.log(error)
            })*/
            const watcher = navigator.geolocation.watchPosition(function(position){

                let lat = position.coords.latitude;
                let long = position.coords.longitude;
                console.log(lat);
                console.log(long);

                var icons = L.icon({
                iconUrl: 'img/icons/pointhist_v1.svg',
                iconSize: [65, 65]
                });

                var planes = [
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/cafe_studente_2.jpg"></a>', -24.4979, -47.8445],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/templo_venus.jpg"></a>', 41.89281817651182, 12.493038112139613],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/royal_art_cafe.jpg"></a>', 41.89267452521032, 12.49381320968053],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/driking_water.jpg"></a>', 41.8921711495052, 12.493995022683954],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/la_biga.jpg"></a>', 41.89133254291576, 12.492939745568014],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/meta_sudans.jpg"></a>', 41.89265742694833, 12.492922250319955],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/oppio_cafe.jpg"></a>', 41.892225735699, 12.4927678687587],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/passione_diavolo.jpg"></a>', 41.89147109765869, 12.49357571201849],
                  ['<a href="historialer.php?id=1" class="read-history"><img src="img/history/views/coliseum.jpg"></a>', 41.8910790391766, 12.493452340188629]
                ];

                var map = L.map('map', { zoomControl: false }).setView([lat, long], 18);
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
                  iconUrl: 'img/icons/pointmark_v4.svg',
                  iconSize: [130, 130]
                });

                const popup = L.popup({
                  closeButton: false,
                  className: 'map-popup',
                  minWidth: 240,
                  minHeight: 240
                }).setContent('<a href="historiasalvar.php?id=1" class="choose-history"><img src="img/icons/create-history.svg"></a>')

                L.marker([lat, long], { icon }).addTo(map);
            }, function(error){
                console.log(error)
            }, { enableHighAccuracy: true, maximumAge: 30000, timeout: 30000 })
            //navigator.geolocation.clearWatch(watcher)
        }else{
            alert('Erro!')
        }

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
   <script src="js/modal.js"></script>
</body>

</html>