const france = { lat: 48.855728, lng: 2.363126 };
const miami = { lat: 25.790280, lng: -80.128474 };
let city;

const adressFr = document.querySelector('.fr');
const adressUs = document.querySelector('.us');
const iconBase = 'http://localhost:8888/wp-content/uploads/2018/02/Pin.png';
const stylers = [{
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [{
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [{
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "administrative.country",
        "elementType": "all",
        "stylers": [{
            "visibility": "simplified"
        }]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry",
        "stylers": [{
            "visibility": "simplified"
        }]
    },
    {
        "featureType": "administrative.country",
        "elementType": "labels.text",
        "stylers": [{
            "visibility": "simplified"
        }]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [{
                "visibility": "simplified"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [{
                "visibility": "simplified"
            },
            {
                "gamma": "0.00"
            },
            {
                "lightness": "74"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [{
            "lightness": "3"
        }]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [{
            "visibility": "off"
        }]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{
            "visibility": "simplified"
        }]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
];


// FUNCTIONS
// INITIALIZE MAP
function initMyMap() {
    return new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: city,
        disableDefaultUI: true,
        styles: stylers
    });
}
// INITIALIZE MARKER
function initMyMarker() {
    new google.maps.Marker({
        position: city,
        map: initMyMap(),
        icon: iconBase
    });
}

// ON LOAD CHOOSE MAP BY IP LOCALISATION
async function initMap() {
    await $.get("https://ipinfo.io", function(response) {
        if (response.country !== 'US') {
            city = france
        } else {
            city = miami;
        }
    }, "jsonp")
    initMyMap()
    initMyMarker()
}

// ON CLICK FR
adressFr.addEventListener('click', function() {
    city = france;
    initMyMap();
    initMyMarker()
})
//  ON CLICK US
adressUs.addEventListener('click', function() {
    city = miami;
    initMyMap();
    initMyMarker()
})


