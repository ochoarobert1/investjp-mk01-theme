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
            const offsetTop = document.getElementById('next').offsetTop;

            scroll({
                top: offsetTop,
                behavior: "smooth"
            });
        }, false);
    }

    specialCard = document.getElementsByClassName('card-wrapper');
    if (specialCard[0] != null) {
        for (var i = 0; i < specialCard.length; i++) {
            specialCard[i].addEventListener('click', function () {
                jQuery('#specialModal').modal('show');
            }, false);
        }
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


}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
