var menuBtn = '',
    menuCtn = '',
    viewMore = '',
    menuContent = '',
    specialCard = '';

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


}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
