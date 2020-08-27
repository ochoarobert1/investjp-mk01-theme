var menuBtn = '',
    menuCtn = '',
    viewMore = '',
    menuContent = '';

AOS.init({
    disable: false,
    startEvent: 'DOMContentLoaded',
    initClassName: 'aos-init',
    animatedClassName: 'aos-animate',
    useClassNames: false,
    disableMutationObserver: false,
    debounceDelay: 50,
    throttleDelay: 99,

    offset: 120,
    delay: 0,
    duration: 400,
    easing: 'ease',
    once: false,
    mirror: false,
    anchorPlacement: 'top-bottom'
});


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
    if (viewMore != null) {
        viewMore[0].addEventListener('click', function() {
            const offsetTop = document.getElementById('next').offsetTop;

            scroll({
                top: offsetTop,
                behavior: "smooth"
            });
        }, false);
    }


}

document.addEventListener("DOMContentLoaded", documentCustomLoad, false);
