var menuBtn = '',
    menuCtn = '',
    viewMore = '',
    menuContent = '',
    specialCard = '';

/* SET COOKIES */
function setCookie(cname, cvalue, exdays) {
    "use strict";
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

/* GET COOKIES */
function getCookie(cname) {
    "use strict";
    var name = cname + "=",
        ca = document.cookie.split(';'),
        i = 0;
    for (i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

AOS.init();


function menuOpen() {
    "use strict";
    menuBtn.classList.toggle('btn-menu-open');
    menuCtn = document.getElementById('menuCtn');
    menuCtn.classList.toggle('menu-mobile-open');
}


/* CUSTOM ON LOAD FUNCTIONS */
function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');

    menuBtn = document.getElementById('menuBtn');
    menuBtn.addEventListener('click', menuOpen, false);

    viewMore = document.getElementsByClassName('hero-view-more');
    if (viewMore[0] != null) {
        viewMore[0].addEventListener('click', function () {
            const offsetTop = document.getElementById('explore').offsetTop;

            scroll({
                top: offsetTop,
                behavior: "smooth"
            });
        }, false);
    }
    /* COOKIE CONSENT */
    // IF COOKIE IF SET OR NOT
    var cookieElement = document.getElementsByClassName('investjp-privacy-policy-accept');
    var cookieConsent = getCookie("cookie_consent");
    if (cookieConsent != '') {
        cookieElement[0].classList.add("hidden-policy");
    } else {
        cookieElement[0].classList.remove("hidden-policy");
    }

    // SET COOKIE ON CLICK
    var cookieBtn = document.getElementById('privacy-policy-accept-btn');
    cookieBtn.addEventListener("click", function () {
        setCookie('cookie_consent', 'cookie_consent', 7);
        var cookieElement = document.getElementsByClassName('investjp-privacy-policy-accept');
        cookieElement[0].classList.add("hidden-policy");
    }, false);

    var mapContent = document.getElementById('map');
    if (mapContent != '') {
        var info = 'action=load_locations';
        /* SEND AJAX */
        var newRequest = new XMLHttpRequest();
        newRequest.open('POST', custom_admin_url.ajax_url, true);
        newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        newRequest.onload = function () {
            var result = JSON.parse(newRequest.responseText);
            if (result.success == true) {
                var theCoords = result.data;

                mapboxgl.accessToken = 'pk.eyJ1Ijoib2Nob2Fyb2JlcnQxIiwiYSI6ImNrZjVsa3QwMTBleXIyem54azRhNjRkbzUifQ.kaUskuoajoOKezeLtjjFSg';

                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [-3.716149396882429, 40.370705899966964],
                    zoom: 11.5
                });



                map.on('load', function () {
                    map.loadImage(
                        custom_admin_url.marker_url,
                        // Add an image to use as a custom marker
                        function (error, image) {
                            if (error) throw error;
                            map.addImage('custom-marker', image);



                            map.addSource('places', {
                                'type': 'geojson',
                                'data': {
                                    type: 'FeatureCollection',
                                    features: theCoords
                                }
                            });

                            // Add a layer showing the places.
                            map.addLayer({
                                'id': 'places',
                                'type': 'symbol',
                                'source': 'places',
                                'layout': {
                                    'icon-image': 'custom-marker',
                                    'icon-allow-overlap': true
                                }
                            });
                        }
                    );


                    // Create a popup, but don't add it to the map yet.
                    var popup = new mapboxgl.Popup({
                        closeButton: true,
                        closeOnClick: false
                    });

                    map.on('mouseover', 'places', function (e) {
                        // Change the cursor style as a UI indicator.
                        map.getCanvas().style.cursor = 'pointer';

                        var coordinates = e.features[0].geometry.coordinates.slice();
                        var description = e.features[0].properties.description;

                        // Ensure that if the map is zoomed out such that multiple
                        // copies of the feature are visible, the popup appears
                        // over the copy being pointed to.
                        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                        }

                        // Populate the popup and set its coordinates
                        // based on the feature found.
                        popup.setLngLat(coordinates).setHTML('<h3>' + e.features[0].properties.title + '</h3><p>' + e.features[0].properties.description + '</p>').addTo(map);
                    });

                    map.on('click', 'places', function (e) {
                        jQuery('#specialModal').modal('show');
                    });

                    map.on('mouseleave', 'places', function () {
                        map.getCanvas().style.cursor = '';
                        popup.remove();
                    });
                });
            }
        }
        newRequest.send(info);
    }
}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
