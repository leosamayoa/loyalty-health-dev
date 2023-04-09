(function($){


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

    /* Scroll Magic Controller */
    var scrollController = new ScrollMagic.Controller(),
        mpFirstPath = gsap.timeline(),
        mqlLG = window.matchMedia('(max-width: 1500px)'),
        mqlVLG = window.matchMedia('(min-width: 1760px)');

    $(window).resize(resetPaths);


    function resetPaths() {
      console.log('resetting');
      
      gsap.killTweensOf('#blue-circle')                
      
       initMPPath();
    }
    
    initMPPath()

    function initMPPath() {
     
      if(mqlLG.matches) {
      
        console.log('too small for path')
        
      } else if(mqlVLG.matches) {
        console.log('v large!')
        mpFirstPath
        .to("#blue-circle", {
            duration: 3, 
            delay: 0,
            repeat: 0,
            paused: false,
            yoyo: false,
            ease: "none",
            motionPath:{
              path: "#mp-path-follow-1",
              align: "#mp-path-follow-1",
              alignOrigin: [0.5, 0.5]
            },
          }) 
        
          var mpFirstFollow = new ScrollMagic.Scene({
             triggerElement: "#mp-section-one",
              triggerHook: .5,
              duration: 5200
            })
              .setTween(mpFirstPath)
              .addTo(scrollController);  
        } else {
          console.log('md match!')
        mpFirstPath
        .to("#blue-circle", {
            duration: 3, 
            delay: 0,
            repeat: 0,
            paused: false,
            yoyo: false,
            ease: "none",
            motionPath:{
              path: "#mp-path-follow-1",
              align: "#mp-path-follow-1",
              alignOrigin: [0.5, 0.5]
            },
          }) 
        
          var mpFirstFollow = new ScrollMagic.Scene({
             triggerElement: "#mp-section-one",
              triggerHook: .5,
              duration: 4000
            })
              .setTween(mpFirstPath)
              .addTo(scrollController);  
  
      }
     }

    /* Section One */
    var mpSectionOneTL = gsap.timeline(), 
    mpSplitText1 = new SplitText("#mp-section-one .text-content", {type:"words,chars"}), 
    mpS1chars = mpSplitText1.chars; //an array of all the divs that wrap each character

    mql = window.matchMedia('(max-width: 768px)');
    var mqlXL = window.matchMedia('(max-width: 1200px)');

    mpSectionOneTL
    .from(mpS1chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")

    /* Section Two */
    var mpSectionTwoTL = gsap.timeline(), 
    mpSplitText2 = new SplitText("#mp-section-two .text-content", {type:"words,chars"}), 
    mpS2chars = mpSplitText2.chars; //an array of all the divs that wrap each character

    mpSectionTwoTL
    .from(mpS2chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")



    /* Section Three */
    var mpSectionThreeTL = gsap.timeline(), 
    mpSplitText3 = new SplitText("#mp-section-three .text-content", {type:"words,chars"}), 
    mpS3chars = mpSplitText3.chars; //an array of all the divs that wrap each character

    mpSectionThreeTL
    .from(mpS3chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")


    /* Section Four */
    var mpSectionFourTL = gsap.timeline(), 
    mpSplitText4 = new SplitText("#mp-section-four .text-content", {type:"words,chars"}), 
    mpS4chars = mpSplitText4.chars; //an array of all the divs that wrap each character

    mpSectionFourTL
    .from(mpS4chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")


    $(window).resize(initImagesOverlayAnimation);


    function initImagesOverlayAnimation() {
      console.log('resetting');
      
      gsap.killTweensOf('.image-wrap')                
      gsap.killTweensOf('.solutions-bottom-overlay')                
      
      initImagesOverlayAnimation();
    }
    
    initImagesOverlayAnimation()

    function initImagesOverlayAnimation() {

      if(mql.matches) {
        console.log('match');
        
        const mpSectionOneSceneText = new ScrollMagic.Scene({
          triggerElement: "#mp-section-one",
          triggerHook: .65,
          duration: 400
        })
          .setTween(mpSectionOneTL)
          .addTo(scrollController);

          const mpSectionTwoSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-two",
            triggerHook: .75,
            duration: 700
          })
            .setTween(mpSectionTwoTL)
            .addTo(scrollController);


          const mpSectionThreeSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-three",
            triggerHook: .7,
            duration: 500
          })
            .setTween(mpSectionThreeTL)
            .addTo(scrollController);


          const mpSectionFourSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-four",
            triggerHook: .75,
            duration: 500
          })
            .setTween(mpSectionFourTL)
            .addTo(scrollController);
      } else {
        const mpSectionOneSceneText = new ScrollMagic.Scene({
          triggerElement: "#mp-section-one",
          triggerHook: .45,
          duration: 600
        })
          .setTween(mpSectionOneTL)
          .addTo(scrollController);
  
          var mpSectionOneSM = new gsap.timeline();
  
      mpSectionOneSM
      .to("#mp-section-one .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
      .to("#mp-section-one .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: 800}})
  
        const mpSectionOneScene = new ScrollMagic.Scene({
          triggerElement: "#mp-section-one",
          triggerHook: .4,
           duration: 1100
        })
          .setTween(mpSectionOneSM)
          .addTo(scrollController);

          const mpSectionTwoSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-two",
            triggerHook: .45,
            duration: 600
          })
            .setTween(mpSectionTwoTL)
            .addTo(scrollController);
            
            var mpSectionTwoSM = new gsap.timeline();
            mpSectionTwoSM
            .to("#mp-section-two .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
            .to("#mp-section-two .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: -800}})
    
              const hrSectionTwoScene = new ScrollMagic.Scene({
                triggerElement: "#mp-section-two",
                triggerHook: .8,
                duration: 1200
              })
                .setTween(mpSectionTwoSM)
                .addTo(scrollController);



          const mpSectionThreeSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-three",
            triggerHook: .45,
            duration: 600
          })
            .setTween(mpSectionThreeTL)
            .addTo(scrollController);
    
            var mpSectionThreeSM = new gsap.timeline();
            mpSectionThreeSM
            .to("#mp-section-three .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
            .to("#mp-section-three .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: 800}})
        
              const hrSectionThreeScene = new ScrollMagic.Scene({
                triggerElement: "#mp-section-three",
                triggerHook: .8,
                 duration: 1200
              })
                .setTween(mpSectionThreeSM)
                .addTo(scrollController);

          const mpSectionFourSceneText = new ScrollMagic.Scene({
            triggerElement: "#mp-section-four",
            triggerHook: .45,
            duration: 600
          })
            .setTween(mpSectionFourTL)
            .addTo(scrollController);
            
            var mpSectionFourSM = new gsap.timeline();
            mpSectionFourSM
            .to("#mp-section-four .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
            .to("#mp-section-four .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: -800}})
        
              const hrSectionFourScene = new ScrollMagic.Scene({
                triggerElement: "#mp-section-four",
                triggerHook: .8,
                 duration: 1200
              })
                .setTween(mpSectionFourSM)
                .addTo(scrollController);

      }
    }
    


    /* Section Five */
    var mpSectionFivSM = gsap.timeline();
    const mpSectionSixScene = new ScrollMagic.Scene({
      triggerElement: "#mp-section-five",
      triggerHook: .5,
      duration: 500
   })
    .setTween(mpSectionFivSM)
    .addTo(scrollController);
 
      var hasSVGFiveanimated = false;
      mpSectionSixScene.on('enter', function() {
        $('#bottom-section-svg').css('opacity', '1')
        $('#bottom-section-svg').addClass('draw-slow')
  
        if(!hasSVGFiveanimated) {
          animateGraphic('bottom-section-svg');
          hasSVGFiveanimated = true;
        }
      })
  
      mpSectionSixScene.on('leave', function() {
        setTimeout( function() {
          $('#bottom-section-svg').removeClass('draw-slow')
        }, 500)
      })
  
  
  })(jQuery);