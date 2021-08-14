var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
        app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

function corrigirTexto(texto) {

    var textoUpper = texto.slice(0, 1);
    var textoUpperTransform = textoUpper.toUpperCase();
    var textoLower = texto.slice(1, texto.length);
    var textoLowerTransform = textoLower.toLowerCase();
    var textoFinal = textoUpperTransform + textoLowerTransform;

    return textoFinal;

}

function inserirTagUm() {
      var tagum = document.getElementById("tagum").value;
      var tagum = tagum.toUpperCase();
      var tagum = tagum.replaceAll(/\s/g, '');
      document.getElementById("tag-1").innerHTML = `#${tagum}`;
}

function inserirTagDois() {
    var tagdois = document.getElementById("tagdois").value;
    var tagdois = tagdois.toUpperCase();
    var tagdois = tagdois.replaceAll(/\s/g, '');
    document.getElementById("tag-2").innerHTML = `#${tagdois}`;
}

function inserirTitulo() {
    var titulo = document.getElementById("titulo").value;
    var titulo = corrigirTexto(titulo);
    if (titulo.trim() == ``) {
        document.getElementById("titulo-1").innerHTML = `Insira um Título`;
    } else {
        document.getElementById("titulo-1").innerHTML = `${titulo}`;
    }
}
