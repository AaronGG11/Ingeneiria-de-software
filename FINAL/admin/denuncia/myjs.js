
function ocultarDatos(){
    datos_denunciante = document.getElementById("datosDenunciante");
    datos_denunciante.setAttribute("Class","collapse");
}

function mostrarDatos(){
    datos_denunciante = document.getElementById("datosDenunciante");
    datos_denunciante.setAttribute("Class","row");
}



function muestraMapa() {
    espacio = document.createElement("br")
    mapa_eti = document.createElement("div");
    mapa_eti.setAttribute("id","map_canvas");

    mapa = document.getElementById("mapa");
    mapa.appendChild(espacio);
    mapa.appendChild(mapa_eti);


    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 12,
        center: new google.maps.LatLng(19.4326077, -99.13320799999997),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }); 

    // creates a draggable marker to the given coords
    var vMarker = new google.maps.Marker({
        position: new google.maps.LatLng(19.4326077, -99.13320799999997),
        draggable: true
    });  

    // adds a listener to the marker
    // gets the coords when drag event ends
    // then updates the input with the new coords
    google.maps.event.addListener(vMarker, 'dragend', function (evt) {
        $("#txtLat").val(evt.latLng.lat().toFixed(6));
        $("#txtLng").val(evt.latLng.lng().toFixed(6));

        map.panTo(evt.latLng);
    });

    // centers the map on markers coords
    map.setCenter(vMarker.position);

    // adds the marker on the map
    vMarker.setMap(map);

}
