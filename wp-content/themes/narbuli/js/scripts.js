'use strict';

let ENTITY = {

    init: function init() {

        ENTITY.masks();

        var swiper = new Swiper(".mySwiper", {
            simulateTouch: false,
            loop: true,
            autoplay: {
                delay: 6000,
            },
            navigation: {
                prevEl: ".t-slds__arrow-left",
                nextEl: ".t-slds__arrow-right",
            },
        });
    },

    masks: function masks() {
        $('input[name="contact_phone"]').mask( '00-000-000', { placeholder: 'xx-xxx-xxx' } );
    },

};

$(document).ready( ENTITY.init() );