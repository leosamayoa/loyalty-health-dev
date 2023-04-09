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

    /* Path Follow */
    /* Scroll Magic Controller */
    var scrollController = new ScrollMagic.Controller(),
    hrFirstPath = gsap.timeline(),
    // hrSecondPath = gsap.timeline(),
    mql = window.matchMedia('(min-width: 1500px)'),
    mqlVLG = window.matchMedia('(min-width: 1760px)');
    
    
    function resetPaths() {
      console.log('resetting');
      
      gsap.killTweensOf('#blue-circle')
      hrPathFollow();
    }
    
    hrPathFollow();

    $(window).resize(resetPaths)


    function hrPathFollow() {
      if(mqlVLG.matches) {
         console.log('matches LG!');
        
        hrFirstPath
        .to("#blue-circle", {
            duration: 3, delay: 0, repeat: 0,paused: false, yoyo: false,ease: "none",
            motionPath:{
              path: "#hr-path-1",
              align: "#hr-path-1",
              alignOrigin: [0.5, 0.5]
            },
          }) 
        var hrFirstFollow = new ScrollMagic.Scene({
          triggerElement: "#hr-section-one",
          triggerHook: 0.5,
          duration: 100
        })
          .setTween(hrFirstPath)
          .addTo(scrollController);

        // hrSecondPath
        // .to("#blue-circle", {
        //     duration: 3,delay: 0, repeat: 0,paused: false, yoyo: false, ease: "none",
        //     motionPath:{
        //       path: "#hr-path-2",
        //       align: "#hr-path-2",
        //       alignOrigin: [0.5, 0.5]
        //     },
        //   }) 

        // var hrSecondFollow = new ScrollMagic.Scene({
        //   triggerElement: "#hr-wheel",
        //   triggerHook: 0,
        //   duration: 5600
        // })
          // .setTween(hrSecondPath)
          // .addTo(scrollController);
      } else if (mql.matches) {
        console.log('md match')

        hrFirstPath
        .to("#blue-circle", {
            duration: 3, delay: 0, repeat: 0,paused: false, yoyo: false,ease: "none",
            motionPath:{
              path: "#hr-path-1",
              align: "#hr-path-1",
              alignOrigin: [0.5, 0.5]
            },
          }) 
        var hrFirstFollow = new ScrollMagic.Scene({
          triggerElement: "#hr-section-one",
          triggerHook: 0.5,
          duration: 100
        })
          .setTween(hrFirstPath)
          .addTo(scrollController);

        // hrSecondPath
        // .to("#blue-circle", {
        //     duration: 3,delay: 0, repeat: 0,paused: false, yoyo: false, ease: "none",
        //     motionPath:{
        //       path: "#hr-path-2",
        //       align: "#hr-path-2",
        //       alignOrigin: [0.5, 0.5]
        //     },
        //   }) 

        // var hrSecondFollow = new ScrollMagic.Scene({
        //   triggerElement: "#hr-wheel",
        //   triggerHook: 0,
        //   duration: 4500
        // })
          // .setTween(hrSecondPath)
          // .addTo(scrollController);
      }
    }
    /** END path follow */

    /* HR Wheel */
    var hrSectionOneTL = gsap.timeline(), 
    mySplitText = new SplitText("#hr-section-one .content-wrap", {type:"words,chars"}), 
    hrS1chars = mySplitText.chars; //an array of all the divs that wrap each character

    hrSectionOneTL
    .from(hrS1chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")

   const hrSectionOneSceneText = new ScrollMagic.Scene({
      triggerElement: "#hr-section-one",
      triggerHook: .9,
      duration: 300
   })
      .setTween(hrSectionOneTL)
      .addTo(scrollController);


    const hrSectionOneScene = new ScrollMagic.Scene({
      triggerHook: .5,
      triggerElement: "#hr-section-one",
       duration: 1000
    })
    .addTo(scrollController)

    var hrWheelTL = new gsap.timeline(),
        hrCirclesTL = new gsap.timeline(),
        hrCircleTL = new gsap.timeline();

    // hrSectionOneScene.on('enter', function() {
    //   hrWheelTL.to("#hr-wheel", 60, {ease: "none", rotation:360, repeat: -1})
    //   hrCirclesTL.to("#circle-wrap", 30, {ease: "none", transformOrigin:"50% 50%", rotation:"+=360", repeat: -1})
    //   hrCircleTL.to("#circle-wrap .circle", 30, { transformOrigin:"50% 50%", rotation:"-=360", repeat:-1, ease:"none"});
    // })
    hrSectionOneScene.on('leave', function() {
      console.log('exit')
      hrWheelTL.clear()
      hrCirclesTL.clear();
      hrCircleTL.clear();
    })

    /* Section Two */
    mqlSM = window.matchMedia('(max-width: 678px)');
    var mqlXl = window.matchMedia('(max-width: 1200px)');

    function resetImagesOverlayAnimation() {
      
      gsap.killTweensOf('.image-wrap')
      gsap.killTweensOf('.solutions-bottom-overlay')
      initImagesOverlayAnimation();
    }
    
    initImagesOverlayAnimation();

    $(window).resize(resetImagesOverlayAnimation)


    function initImagesOverlayAnimation() {
    if(mqlXl.matches) {
      console.log('too small for animation')
     } else {
       var hrSectionTwoSM = new gsap.timeline();
     hrSectionTwoSM
     .to("#hr-section-two .image-wrap", 5.5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -100}})
     .to("#hr-section-two .solutions-bottom-overlay", 5.5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: 800}})
 
       const hrSectionTwoScene = new ScrollMagic.Scene({
         triggerElement: "#hr-section-two",
         triggerHook: .4,
          duration: 600
       })
         .setTween(hrSectionTwoSM)
         .addTo(scrollController);

         var hrSectionThreeSM = new gsap.timeline();
         hrSectionThreeSM
         .to("#hr-section-three .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
         .to("#hr-section-three .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: -800}})
       
           const hrSectionThreeScene = new ScrollMagic.Scene({
             triggerElement: "#hr-section-three",
             triggerHook: .4,
             duration: 700
           })
             .setTween(hrSectionThreeSM)
             .addTo(scrollController);


         var hrSectionFourSM = new gsap.timeline();
         hrSectionFourSM
         .to("#hr-section-four .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
         .to("#hr-section-four .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: 800}})
     
           const hrSectionFourScene = new ScrollMagic.Scene({
             triggerElement: "#hr-section-four",
             triggerHook: .4,
             duration: 1400
           })
             .setTween(hrSectionFourSM)
             .addTo(scrollController);


         var hrSectionFiveSM = new gsap.timeline();
         hrSectionFiveSM
         .to("#hr-section-five .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
         .to("#hr-section-five .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: -800}})
     
           const hrSectionFiveScene = new ScrollMagic.Scene({
             triggerElement: "#hr-section-five",
             triggerHook: .4,
             duration: 700
           })
             .setTween(hrSectionFiveSM)
             .addTo(scrollController);

          var hrSectionSixSM = new gsap.timeline();
          hrSectionSixSM
          .to("#hr-section-six .image-wrap", .5, {ease:"none", opacity: 1, y:0, startAt: {opacity:0, y: -300}})
          .to("#hr-section-six .solutions-bottom-overlay", .5, {ease:"none", opacity: 1, x:0, startAt: {opacity:0, x: 800}})
      
            const hrSectionSixScene = new ScrollMagic.Scene({
              triggerElement: "#hr-section-six",
              triggerHook: .4,
              duration: 1400
            })
              .setTween(hrSectionSixSM)
              .addTo(scrollController);
     }
    }





     /**  Wheels **/
     setTimeout( function() {
      $('.ani1').addClass('draw')
      $('.ani2').addClass('draw')
      $('.ani3').addClass('draw-blue')
      $('.ani4').addClass('draw')
      $('.ani5').addClass('draw-blue')
    }, 500)

    setTimeout( function() {
      $('.ani1').removeClass('draw')
      $('.ani2').removeClass('draw')
      $('.ani3').removeClass('draw-blue')
      $('.ani4').removeClass('draw')
      $('.ani5').removeClass('draw-blue')

      $('.ani1, .ani2, .ani4').css({
        'stroke' : '#000',
        'stroke-width' : '2'
      });

      $('.ani3, .ani5').css({
        'stroke' : '#08a5f6',
        'stroke-width' : '2'
      });
     
    }, 5000)









  //    var headline = $('#hr-section-one .section-heading'),
  //    mySplitText = new SplitText(headline, {type:"words,chars"}), 
  //    chars = mySplitText.chars, //an array of all the divs that wrap each character
  //    hasS3GraphicAnimated = false;


  //   var sectionTwoWheel;
  //       if(mqlSM.matches) {          
  //         sectionTwoWheel = new ScrollMagic.Scene({
  //           triggerElement: "#hr-section-one .section-heading",
  //                     triggerHook: .9,
  //                     duration: 700
  //         })

  //          .addTo(scrollController);
  //       } else {
  //         sectionTwoWheel = new ScrollMagic.Scene({
  //           triggerElement: "#hr-section-one .section-heading",
  //                     triggerHook: .85,
  //                     duration: 500
  //         })

  //          .addTo(scrollController);
  //       }
  // sectionTwoWheel.on("enter", function (event) {
            
  //     $('#hr-section-one #wheels').addClass('draw-sm');
  //     gsap.to("#wheels path", 4, {delay:0,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, })   
  //     // gsap.to("#hr-section-one .svg-ul-icon-path", 3, {delay:0.5,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, onComplete: removeIconStroke, stagger: 0.05})
  //     // gsap.to("#hr-section-one .svg-ul-icon-path-one", 3, {delay:1,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, stagger: 0.05})

  //     setTimeout(function() {
  //     animateGraphic('wheels')
  //     },3000)
      

  //     function removeIconStroke() {
      
  //     removeStroke($('#hr-section-one .svg-ul-icon'))
  //     gsap.to("#hr-section-one .svg-ul-icon-path-one", 2, {delay:1,ease: Linear.easeIn, fill: '#08a5f6', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})
  //     gsap.to("#hr-section-one .svg-ul-icon-path", 2, {delay:0,ease: Linear.easeIn, fill: 'black', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})       

  //     setTimeout(function() {
  //       $('#hr-section-one #wheels').removeClass('draw-sm');
  //     }, 3000)

  //   }
      
  //   if(!hasS3GraphicAnimated) {
      
  //     $('#hr-section-one #wheels').addClass('draw-sm');
  //       hasS3GraphicAnimated = true;
  //     }
    
  //   });







    var hrSectionTwoTL = gsap.timeline(), 
    hrSplitText2 = new SplitText("#hr-section-two .text-content", {type:"words,chars"}), 
    hrS2chars = hrSplitText2.chars; //an array of all the divs that wrap each character

    hrSectionTwoTL
    .from(hrS2chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")

   if(mqlSM.matches) {
     console.log('match')
      const hrSectionTwoSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-two",
          triggerHook: .7,
          duration: 400
      })
      .setTween(hrSectionTwoTL)
      .addTo(scrollController);
    } else {  
          
      const hrSectionTwoSceneText = new ScrollMagic.Scene({
        triggerElement: "#hr-section-two",
        triggerHook: .6,
        duration: 600
     })
        .setTween(hrSectionTwoTL)
        .addTo(scrollController);
    }

      /* Section Three */
      var hrSectionThreeTL = gsap.timeline(), 
        hrSplitText3 = new SplitText("#hr-section-three .text-content", {type:"words,chars"}), 
        hrS3chars = hrSplitText3.chars; //an array of all the divs that wrap each character
    
        hrSectionThreeTL
        .from(hrS3chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")

       // mobile
        if(mqlSM.matches) {
  
          const hrSectionThreeSceneText = new ScrollMagic.Scene({
            triggerElement: "#hr-section-three",
            triggerHook: .75,
            duration: 400
          })
            .setTween(hrSectionThreeTL)
            .addTo(scrollController);

        } else {

          const hrSectionThreeSceneText = new ScrollMagic.Scene({
            triggerElement: "#hr-section-three",
            triggerHook: .6,
            duration: 600
          })
            .setTween(hrSectionThreeTL)
            .addTo(scrollController);
        }



      /* Section Four */
      var hrSectionFourTL = gsap.timeline(), 
      hrSplitText4 = new SplitText("#hr-section-four .text-content", {type:"words,chars"}), 
      hrS4chars = hrSplitText4.chars; //an array of all the divs that wrap each character
  
      hrSectionFourTL
      .from(hrS4chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")
  

      // mobile
      if(mqlSM.matches) {
        const hrSectionFourSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-four",
          triggerHook: .85,
          duration: 400
        })
          .setTween(hrSectionFourTL)
          .addTo(scrollController);
      } else {
        const hrSectionFourSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-four",
          triggerHook: .6,
          duration: 600
        })
          .setTween(hrSectionFourTL)
          .addTo(scrollController);
      }



      /* Section Five */
      var hrSectionFiveTL = gsap.timeline(), 
      hrSplitText5 = new SplitText("#hr-section-five .text-content", {type:"words,chars"}), 
      hrS5chars = hrSplitText5.chars; //an array of all the divs that wrap each character
  
      hrSectionFiveTL
      .from(hrS5chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")
  
      // mobile
      if(mqlSM.matches) {
        const hrSectionFiveSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-five",
          triggerHook: .75,
          duration: 500
        })
          .setTween(hrSectionFiveTL)
          .addTo(scrollController);
      } else {
        const hrSectionFiveSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-five",
          triggerHook: .6,
          duration: 600
        })
          .setTween(hrSectionFiveTL)
          .addTo(scrollController);

      }

      /* Section Six */
      var hrSectionFiveTL = gsap.timeline(), 
      hrSplitText5 = new SplitText("#hr-section-six .text-content", {type:"words,chars"}), 
      hrS5chars = hrSplitText5.chars; //an array of all the divs that wrap each character
  
      hrSectionFiveTL
      .from(hrS5chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.3}, "+=0")
  
      // mobile
      if(mqlSM.matches) {
        const hrSectionFiveSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-six",
          triggerHook: .75,
          duration: 400
        })
          .setTween(hrSectionFiveTL)
          .addTo(scrollController);
      } else {
        const hrSectionFiveSceneText = new ScrollMagic.Scene({
          triggerElement: "#hr-section-six",
          triggerHook: .6,
          duration: 600
        })
          .setTween(hrSectionFiveTL)
          .addTo(scrollController);

      }


      /* Section Bottom */

    var hrSectionSixSM = gsap.timeline();
    const hrSectionSixScene = new ScrollMagic.Scene({
      triggerElement: "#hr-section-six",
      triggerHook: .5,
      duration: 500
   })
    .setTween(hrSectionSixSM)
    .addTo(scrollController);

 
      var hasSVGSixanimated = false;
      hrSectionSixScene.on('enter', function() {
        $('#bottom-section-svg').css('opacity', '1')
        $('#bottom-section-svg').addClass('draw-slow')
  
        if(!hasSVGSixanimated) {
          animateGraphic('bottom-section-svg');
          hasSVGSixanimated = true;
        }
      })
  
      hrSectionSixScene.on('leave', function() {
        setTimeout( function() {
          $('#bottom-section-svg').removeClass('draw-slow')
        }, 500)
      })
  
  })(jQuery);