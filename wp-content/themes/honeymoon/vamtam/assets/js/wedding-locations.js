
var locations = [
    [
        "Wedding Ceremony",
        "Victoria Gardens",
        "<span>Palla Bakhtawarpur Rd</span><br/><span>Bakoli, New Delhi</span><br/><span>Delhi - 110036</span>",
        "28.8098775",
        "77.1502018"
    ],
    [
        "Engagement",
        "Maharaja Banquets",
        "<span>A-1/20A, Main New Rohtak Road, Opposite Metro Pillar No. 256</span><br/><span>Paschim Vihar, New Delhi</span><br/><span>Delhi - 110063</span>",
        "28.6686719",
        "77.0997513"
    ]
];

gmarkers = [];

var map = new google.maps.Map(document.getElementById('wedding_locations_map'), {
    zoom: 11,
    zoomControl: false,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: false,
    center: new google.maps.LatLng(28.755537, 77.199887),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

function createMarker(latlng, html) {
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        animation: google.maps.Animation.DROP
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(html);
        infowindow.open(map, marker);
    });
    return marker;
}

for (var i = 0; i < locations.length; i++) {
    gmarkers[locations[i][0]] =
        createMarker(new google.maps.LatLng(locations[i][3], locations[i][4]), "<h4>" + locations[i][0] + "</h4><strong>" + locations[i][1] + "</strong><br>" + locations[i][2]);
}

jQuery("a[href='#ENGAGEMENT']").click(function(event) {
  var div = jQuery("div#locations");
  jQuery('html,body').animate({scrollTop: div.offset().top},'slow'); 
  event.preventDefault();
  google.maps.event.trigger(gmarkers['Engagement'],'click');
});

jQuery("a[href='#WEDDING']").click(function(event) {
  var div = jQuery("div#locations");
  jQuery('html,body').animate({scrollTop: div.offset().top},'slow'); 
  event.preventDefault();
  google.maps.event.trigger(gmarkers['Wedding Ceremony'],'click');
});

jQuery(".expanded a, .collapsed a").click(function(eve) {
    var container = jQuery(this).parents("div");
    eve.preventDefault();
    container.children(".expanded, .collapsed").toggle();
});

jQuery("li.comment").addClass('grid-1-3');
jQuery("div#comments").addClass('grid-1-1');

jQuery(document).ready(function() {
    if (!jQuery('div#comments').html().trim()) { jQuery('div#comments').html(''); }
});
