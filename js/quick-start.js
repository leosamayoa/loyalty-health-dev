jQuery(document).ready(function($){

    /* Script for Quick form */
    $('#gform_2 #input_2_3').blur(function(){
        $('#gform_2 #input_2_22').val($(this).val());
    });

    /* Greensock scripts */
    var scrollController = new ScrollMagic.Controller();
    var benefitsSection1 = gsap.timeline();
    
    var mqlSM = window.matchMedia('(max-width: 678px)');
    var mqlXl = window.matchMedia('(max-width: 1200px)');

    // splitText = new SplitText(".quick-start-benefits", {type:"words,chars"}), 
    // splitTextChar = splitText.chars; //an array of all the divs that wrap each character

    benefitsSection1
    .to(".quick-start-benefits .in-left .green-bg, .quick-start-benefits .in-left .blue-bg", 5.5, {
        ease:"ease", 
        opacity: 1, 
        x:0, 
        stagger: 2,
        markers:true,
        startAt: {opacity:0, x: -200}}, "+=0")

    // mobile
    if(mqlSM.matches) {
    const benefitsSceneLeft = new ScrollMagic.Scene({
        triggerElement: ".quick-start-benefits",
        triggerHook: .85,
        duration: 400
    })
    .setTween(benefitsSection1)
    .addTo(scrollController);

    } else {
    const benefitsSceneLeft = new ScrollMagic.Scene({
        triggerElement: ".quick-start-benefits",
        triggerHook: .6,
        duration: 600
    })
        .setTween(benefitsSection1)
        .addTo(scrollController);
    }

    var scrollController2 = new ScrollMagic.Controller();
    var benefitsSection2 = gsap.timeline();

    benefitsSection2
    .to(".quick-start-benefits .in-right .green-bg, .quick-start-benefits .in-right .blue-bg", 5.5, {
        ease:"ease", 
        opacity: 1, 
        x:0, 
        stagger: 2,
        markers:true,
        startAt: {opacity:0, x: 200}}, "+=0")

    // mobile
    if(mqlSM.matches) {
    const benefitsSceneRight = new ScrollMagic.Scene({
        triggerElement: ".quick-start-benefits",
        triggerHook: .85,
        duration: 400
    })
        .setTween(benefitsSection2)
        .addTo(scrollController2);

    } else {
    const benefitsSceneRight = new ScrollMagic.Scene({
        triggerElement: ".quick-start-benefits",
        triggerHook: .6,
        duration: 600
    })
        .setTween(benefitsSection2)
        .addTo(scrollController2);
    }
});