'use strict';

let ENTITY = {

    init: function init() {

        ENTITY.masks();
        ENTITY.main_slider();

        setTimeout(function() { 
            $(".hs-form-iframe").contents().find(".hubspot-link__container").remove();
        }, 3000);
        
    },

    main_slider: function main_slider() {
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