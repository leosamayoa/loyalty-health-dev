jQuery(document).ready(function($){

    /* Script for Quick form */
    $('#gform_2 #input_2_3').blur(function(){
        $('#gform_2 #input_2_22').val($(this).val());
    });

    /* Code taken from the "lh-hr.js" for hand icon animation*/

    var hrSectionSixSM = gsap.timeline();
    var hasSVGSixanimated = false;

    const hrSectionSixScene = new ScrollMagic.Scene({
      triggerElement: ".managed-services",
      triggerHook: .5,
      duration: 500
    })
    .setTween(hrSectionSixSM)
    .addTo(scrollController);

    // hrSectionSixScene.on('enter', function() {
        
        $('#bottom-section-svg').css('opacity', '1')
        $('#bottom-section-svg').addClass('draw-slow')

        if(!hasSVGSixanimated) {
            animateGraphic('bottom-section-svg');
            hasSVGSixanimated = true;
        }
    // })
  
    // hrSectionSixScene.on('leave', function() {
        setTimeout( function() {
            console.log('On Timeout');
            $('#bottom-section-svg').removeClass('draw-slow')
        }, 500)
    // })

    function removeStroke(element) {
        gsap.to(element, 10, {delay: 5 ,ease:"ease", stroke: 'transparent'});
    }

    function animateGraphic(svg) {
        animateFill($('#' + svg + ' path'));
        animateFill($('#' + svg + ' ellipse'));
    }

    function animateFill(element) {

        $.each(element, function() {
          if(!$(this).is("[fill]")) {
            $(this).attr('fill','#000')
          }
          if($(this).attr('fill')) {
    
            if($(this).attr('fill').includes("url")) {
              var color = $(this).attr('fill');
              gsap.to($(this), 6, {delay: 0 ,ease: Linear.easeIn, opacity: 1, fill: color, startAt: {fill:color, opacity: 0}});
            } else {
            var color = $(this).attr('fill');
            gsap.to($(this), 5, {delay: .5 ,ease: Linear.easeIn, fill: color, opacity: 1, startAt: {fill: 'transparent'}});
            gsap.to($(this), 5, {delay: .5 ,ease: Linear.easeIn, fill: color, startAt: {fill: 'transparent'}});
            removeStroke($(this));
    
            }
          } 
        })
      }

    /* End code taken from the "lh-hr.js" for hand icon animation */

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