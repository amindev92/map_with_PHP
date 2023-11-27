defaultLocation = [36.4215244, 59.47179];
let currentLocation, currentAccuracy = null;

var map = L.map('map').setView(defaultLocation, 14);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 21,
    attribution: 'Amin Ataei - 2023',
}).addTo(map);


map.on('locationfound', function(e){
    // console.log(e);

    if (currentLocation) {
        map.removeLayer(currentLocation);
        map.removeLayer(currentAccuracy);
    }

    let raduis = e.accuracy / 2;

    let message = `You are within ${raduis} in circel`

    currentLocation = L.marker(e.latlng).addTo(map).bindPopup(message).openPopup();

    currentAccuracy = L.circle(e.latlng, raduis).addTo(map);

})

map.on('locationerror', function(e){
    alert(e.message);
})


function currentLocate(){
    map.locate({ setView: true, maxZoom: 18 });
}


// setTimeout(function() {
//    currentLocate(); 
// }, 2000);



map.on('dblclick', function(e){
    L.marker(e.latlng).addTo(map);
    $('.modal-overlay').fadeIn();
    $('#lat-display').val(e.latlng.lat);
    $('#lng-display').val(e.latlng.lng);
    $('#l-type').val(0);
    $('#l-title').val("");


})



$(document).ready(function(){

    $('.modal-overlay .modal .close').click(function(){
        $('.modal-overlay').fadeOut();
    })

    $('form#addLocationForm').submit(function(e){
        e.preventDefault();
        console.log(e);
        var resultTag = $(this).find('.saveResult');
        $.ajax({
            url: 'process/addLocation.php',
            data: $(this).serialize(),
            method: 'post',
            success: function(response){
                resultTag.html(response);
            }
        })
    })

})
