var isPause=false;
function  downloadData() {
    $.ajax({
        type: 'POST',
        url: API.Data.base_url+"/service/api",
        data:  {_token: API.Data.token},
        success: function(result){
        var json = result.transactions;
        var i = 0;
        while(i < json.length)
        {
            var long = json[i].longitude;
            var lat = json[i].latitude;
            var latlng = {"lat": parseFloat(lat), "lng": parseFloat(long)};


            if(isPause == false)
                createMarker(latlng,parseFloat(lat),parseFloat(long));

            i++;
        }


    }});
}

var map = new google.maps.Map(document.getElementById('someMeaningfulId'), {
    center: {lat: 52, lng: 10},
    scrollwheel: false,
    zoom: 5
});

function  startTimer() {
    setTimeout(function(){ downloadData(); startTimer(); }, 1000);
}


var image = {
    url: API.Data.base_url+'/favicon.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var image_dollar = {
    url: API.Data.base_url+'/dollar_1.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var image_dollar2 = {
    url: API.Data.base_url+'/dollar_2.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var markers = [];

var infowindow =  new google.maps.InfoWindow({
    content: ''
});


function createMarker(myLatLng,lat,long) {
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: null,
        icon: (Math.random() < 0.5 ? image_dollar : image_dollar2),

    });
    bindInfoWindow(marker, map, infowindow, "<p></p>",lat,long);

    markers.push(marker);

    setTimeout(function(){

        if(isPause == false)
            marker.setMap(map);

        marker.setAnimation(google.maps.Animation.BOUNCE);

        setTimeout(function()
        {
            if(isPause == false)
                marker.setMap(null);

        }, Math.random() * 300 * sliderValue);
    }, Math.random() * 2000);

}
function bindInfoWindow(marker, map, infowindow, html,lat,long) {
    google.maps.event.addListener(marker, 'mouseover', function() {
        $.ajax({
            url: "http://maps.googleapis.com/maps/api/geocode/json?latlng="+parseFloat(lat)+","+parseFloat(long)+"&sensor=true",

            success: function(result){
                adress=result.results[0].formatted_address;
                html="<p>" + adress + "</p>";
                infowindow.setContent(html);
                infowindow.open(map, marker);
            },
            error: function (error) {
                adress='No adress found';
                html="<p>" + adress + "</p>"
                infowindow.setContent(html);
                infowindow.open(map, marker);
            }
        });


    });
    google.maps.event.addListener(marker, 'mouseout', function() {
        infowindow.close();
    });
}


var sliderValue = 1;

function togglePause() {
    if (isPause){
        isPause=false;
    }else{
        isPause = true;
    }

}
$(document).ready(function () {
    $('#ex1').slider({
        formatter: function(value) {
            return 'Current value: ' + value;
        }
    }).on('slide', function (val) {
        sliderValue = val.value;
    });

    startTimer();
});