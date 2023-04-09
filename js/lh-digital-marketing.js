(function($){

 // setTimeout(function() {

    var scrollController = new ScrollMagic.Controller();
  
    var dmFirstPath = gsap.timeline(),
    dmPathTwo = gsap.timeline(),
    dmPathThree = gsap.timeline(),
    dmPathFour = gsap.timeline(),
    dmPathFive = gsap.timeline(),
    dmPathSix = gsap.timeline(),
    dmPathSeven = gsap.timeline(),
    dmPathEight = gsap.timeline();
  
     /** Path Follows **/
     var mql = window.matchMedia('(min-width: 1500px)');
   //  setTimeout(function() {
    if($('#blue-circle').length > 0) {
      console.log('init')
      gsap.killTweensOf('#blue-circle')
      initPathFollow();
    }
   // }, 50);

     function resetPaths() {
      console.log('resetting');
      
      gsap.killTweensOf('#blue-circle')
      initPathFollow();
    }

     $(window).resize(resetPaths)

     function initPathFollow() {
      
        if(mql.matches) {          
        
            dmFirstPath
            .to("#blue-circle", { duration: 3,  delay: 0, repeat: 0, paused: false,yoyo: false, ease: "none",
                motionPath:{
                  path: "#dm-path-1",
                  align: "#dm-path-1",
                  alignOrigin: [0.5, 0.5]
                },
              }) 
            var dmFirstFollow = new ScrollMagic.Scene({
              triggerElement: "#dm-section-one",
              triggerHook: 0.5,
              duration: 100
            })
              .setTween(dmFirstPath)
              .addTo(scrollController);  
            
              dmPathTwo
              .to("#blue-circle", { duration: 3, delay: 3,repeat: 0,paused: false,yoyo: false,ease: "none",
                  motionPath:{
                    path: "#dm-path-2",
                    align: "#dm-path-2",
                    alignOrigin: [0.5, 0.5]
                  },
                }) 
              var dmFollowTwo = new ScrollMagic.Scene({
                triggerElement: "#dm-section-one",
                triggerHook: 0.1,
                duration: 600
              })
                .setTween(dmPathTwo)
                .addTo(scrollController);
      
                dmPathThree
                .to("#blue-circle", {duration: 3, delay: 2, repeat: 0, paused: false, yoyo: false, ease: "none",
                    motionPath:{
                      path: "#dm-path-3",
                      align: "#dm-path-3",
                      alignOrigin: [0.5, 0.5]
                    },
                  }) 
                var dmFollowThree = new ScrollMagic.Scene({
                  triggerElement: "#dm-section-two",
                  triggerHook: 1,
                  duration: 600
                })
                  .setTween(dmPathThree)
                  .addTo(scrollController);      
        
  
                  dmPathEight
                  .to("#blue-circle", {
                      duration: 3,  delay: 0, repeat: 0, paused: false,yoyo: false,ease: "none",
                      motionPath:{
                        path: "#dm-path-18",
                        align: "#dm-path-18",
                        alignOrigin: [0.5, 0.5]
                      },
                    })
                  .to("#blue-circle", {
                      duration: 3, delay: 0,repeat: 0,paused: false,yoyo: false,ease: "none",
                      motionPath:{
                        path: "#dm-path-19",
                        align: "#dm-path-19",
                        alignOrigin: [0.5, 0.5]
                      },
                    })
                    .from("#blue-circle", {duration: 3, delay: 0, repeat: 0, paused: false,  yoyo: false,ease: "none",
                      motionPath:{
                        path: "#dm-path-20",
                        align: "#dm-path-20",
                        alignOrigin: [0.5, 0.5]
                      },
                    })
      
                    var dmFollowEight = new ScrollMagic.Scene({
                      triggerElement: "#dm-section-seven",
                      triggerHook: 0.8,
                      duration: 400
                    })
                      .setTween(dmPathEight)
                      .addTo(scrollController);

                  } 
                }
  
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
  
    var mqlSM = window.matchMedia('(max-width: 768px)');
  
     /* Section One */
     var dmSectionOneTL = gsap.timeline(), 
     mySplitText = new SplitText("#dm-section-one .text-content", {type:"words,chars"}), 
     dmS1chars = mySplitText.chars; //an array of all the divs that wrap each character
  
     dmSectionOneTL
     .to("#dm-section-one .image-wrap", 10, {ease:"none", y: 0, opacity: 1, startAt: {y:-400, opacity: 0}})
     .from(dmS1chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.03}, "+=0")
     
     var dmSectionOneScene;
     if(mqlSM.matches) {
      dmSectionOneScene = new ScrollMagic.Scene({
        triggerElement: "#dm-section-one",
        triggerHook: .7,
        duration: 500
    })
        .setTween(dmSectionOneTL)
        .addTo(scrollController);
    } else {
      dmSectionOneScene = new ScrollMagic.Scene({
          triggerElement: "#dm-section-one",
          triggerHook: .4,
          duration: 500
      })
          .setTween(dmSectionOneTL)
          .addTo(scrollController);
    }
      
      var hasSVGOneanimated = false;
  
      dmSectionOneScene.on('enter', function() {
        $('#dm-section-one-svg').css('opacity', '1')
        $('#dm-section-one-svg').addClass('draw-slow')
  
        if(!hasSVGOneanimated) {
         animateGraphic('dm-section-one-svg');
         hasSVGOneanimated = true;
        }
      });
  
      dmSectionOneScene.on('leave', function() {
        setTimeout( function() {
          $('#dm-section-one-svg').removeClass('draw-slow')
        }, 500)
      });
  
  
     /* Section Two */
     var dmSectionTwoTL = gsap.timeline();
     dmSplitText2 = new SplitText("#dm-section-two .text-content", {type:"words,chars"});
     dmS2chars = dmSplitText2.chars; //an array of all the divs that wrap each character
  
     dmSectionTwoTL
     .from(dmS2chars, {delay: 2, duration: 2, opacity:0, ease:"back", stagger: 0.03}, "+=0")
  
     var dmSectionTwoScene;
     if(mqlSM.matches) {
      dmSectionTwoScene = new ScrollMagic.Scene({
        triggerElement: "#dm-section-two",
        triggerHook: .45,
        duration: 600
     })
        .setTween(dmSectionTwoTL)
        .addTo(scrollController);

    } else {
      dmSectionTwoScene = new ScrollMagic.Scene({
        triggerElement: "#dm-section-two",
        triggerHook: .45,
        duration: 800
     })
        .setTween(dmSectionTwoTL)
        .addTo(scrollController);
    }
  
        var hasSVGTwoanimated = false;
        dmSectionTwoScene.on('enter', function() {
          $('#dm-section-two-svg').css('opacity', '1')
          $('#dm-section-two-svg').addClass('draw-slow')
  
          $('#map_canvas_1 svg').addClass('draw-slow')
  
          if(!hasSVGTwoanimated) {
            animateGraphic('dm-section-two-svg');
            hasSVGTwoanimated = true;
          }
        })
  
        dmSectionTwoScene.on('leave', function() {
          setTimeout( function() {
            $('#dm-section-two-svg').removeClass('draw-slow')
          }, 500)
        })
  
  


  
  
     var dmSectionSevenTL = gsap.timeline();
      const dmSectionSevenScene = new ScrollMagic.Scene({
        triggerElement: "#dm-section-seven",
        triggerHook: .5,
        duration: 500
     })
      .setTween(dmSectionSevenTL)
      .addTo(scrollController);
  
   
        var hasSVGSevenanimated = false;
        dmSectionSevenScene.on('enter', function() {
          $('#bottom-section-svg').css('opacity', '1')
          $('#bottom-section-svg').addClass('draw-slow')
    
          if(!hasSVGSevenanimated) {
            animateGraphic('bottom-section-svg');
            hasSVGSevenanimated = true;
          }
        })
    
        dmSectionSevenScene.on('leave', function() {
          setTimeout( function() {
            $('#bottom-section-svg').removeClass('draw-slow')
          }, 500)
        })
       

 // }, 50)


      gsap.timeline({repeat:3, yoyo:true})
        .fromTo("line", .8, {drawSVG:"100%"}, {duration: .3, drawSVG:"50% 50%", stagger: 0.1})

  
  
  })(jQuery);