(function($){


  var scrollController = new ScrollMagic.Controller();

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



   // popup btn 
   if($('#popmake-85').length > 0) {
    $('#popmake-85 input[type="submit"]').append('<span></span>').addClass('btn-animate');
  }

  var darkModeBtnLight = $('#btn-dark-mode-light');
  var darkModeBtnDark = $('#btn-dark-mode-dark');

  // dark mode toggle
  if($('body.wp-night-mode-on').length > 0) {
    darkModeBtnLight.css('pointer-events', 'auto');
    darkModeBtnDark.css('pointer-events', 'none');
  } else {
    darkModeBtnLight.css('pointer-events', 'none');
    darkModeBtnDark.css('pointer-events', 'auto');
  }

  $('.wp-night-mode').on('click', function() {
    if($('body.wp-night-mode-on').length > 0) {
      darkModeBtnLight.css('pointer-events', 'auto');
      darkModeBtnDark.css('pointer-events', 'none');
    } else {
      darkModeBtnDark.css('pointer-events', 'auto');
      darkModeBtnLight.css('pointer-events', 'none');
    }

  });

  // END dark mode toggle
  
      /*
      *  Section 1 Case Studies Slider
      */
     $('#lh-slides').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         autoplay: true,
         autoplaySpeed: 8000,
         cssEase: 'ease-out',
         pauseOnFocus: true,
         pauseOnHover: true,
         infinite: false,
       });


      if($('.overlay').length > 0) {
        
        gsap.to(".hero-text-content", 3, {delay: 0, ease:"none", opacity: 1, startAt: {opacity:1}});
        gsap.to("#scroll-btn", 3, {delay: 0, ease:"none", opacity: 1, startAt: {opacity:0}});
        gsap.to(".overlay", 1, {delay: 0, x: 0, ease:"none", opacity: 1, startAt: {x: 0, opacity: 1}});

        gsap.to("#slider-gradient", 1, {delay: .4,  ease:"none", backgroundColor: 'transparent'});
        gsap.to("#lh-slides", 1, {delay: 1,  ease:"none", opacity: 1, startAt: {opacity: 0, }});

          // gsap.fromTo($('#lh-homepage-slider-wrap .top-side'), 1, {width: 0,  background: 'black', immediateRender: false, autoRound: false, ease: "none"}, 
          // { delay: 1, width: 960,  background: 'black' });
          // // right
          // gsap.fromTo($('#lh-homepage-slider-wrap .right-side'), 1, {  delay: 1, height: 0, background: 'black',  immediateRender: false, autoRound: false, ease: "none"
          // }, { height: 1080, background: 'black'});

          // // bottom
          // gsap.fromTo($('#lh-homepage-slider-wrap .bottom-side'), 1,  { delay: 1, width: 0, background: 'black', immediateRender: false, autoRound: false, ease: "none"
          // }, { width: 960, background: 'black'});

          // // left
          // gsap.fromTo($('#lh-homepage-slider-wrap .left-side'), 1, { delay: 1,  height: 0, background: 'black', immediateRender: false, autoRound: false, ease: "none"
          // }, 
          // {  height: 1080, background: 'black' }
          // );
        
      }

      if($('#to_survive').length > 0) {

        function generateRandomNo() {
          return Math.floor((Math.random() * 7) + 1);
        }

         var titleSpans = $('#to_survive tspan'),
              subheadingDelay = 2


          setTimeout(function() {
            $.each(titleSpans, function() {
              gsap.to($(this), generateRandomNo(), {delay: 0.5, strokeDashoffset:0, ease:"none"});
            })
          }, 100)

          $.each($('.site-subheading h2'), function() {
            var tlSubheading = gsap.timeline(), 
            mySplitText = new SplitText($(this), {type:"words,chars"}), 
            chars = mySplitText.chars; //an array of all the divs that wrap each character

            tlSubheading.from(chars, {delay: subheadingDelay, duration: 3, opacity:0, ease:"back", stagger: 0.03}, "+=0");

            subheadingDelay += 1;
          })

      }


      /* Scroll Magic Controller */
      var controller = new ScrollMagic.Controller(),
          firstPath = gsap.timeline(),
          isFirstPathComplete = false,
          hasFirstPathStarted = false,
          mqlLG = window.matchMedia('(min-width: 1500px)');

      setTimeout(function() {
        startAnimationsSectionTwo()
      }, 200)

      startFirstPath();

      function startFirstPath() {

        setTimeout(function() {
          $(document).one('scroll', function() {

          if(mqlLG.matches) {
            firstPath
            .to("#blue-circle", {  duration: 3, delay: 0,  repeat: 0,  paused: false, yoyo: false, ease: "none",
                motionPath:{
                  path: "#lh_home_path_1",
                  align: "#lh_home_path_1",
                  alignOrigin: [0.5, 0.5]
                },
              }) 
              .to("#blue-circle", {duration: 3,  repeat: 0,   paused: false, yoyo: false,  delay: 0, ease: Linear.easeIn,
                motionPath:{
                  path: "#lh_home_path_2",
                  align: "#lh_home_path_2",
                  autoRotate: false,
                  alignOrigin: [0.5, 0.5]
                },
              }).from("#blue-circle", { duration: 2, repeat: 0,  delay: 0, paused: false, ease: "slow",
                motionPath:{
                  path: "#lh_home_path_3",
                  align: "#lh_home_path_3",
                  autoRotate: true,
                  alignOrigin: [0.5, 0.5],
                },
                onComplete: firstPathIsComplete
              })
          } 
          })

        }, 1000)
      }

      function firstPathIsComplete() {
        isFirstPathComplete = true;
        resetPaths();
      }

      function resetPaths() {
      //  console.log('resetting');
        
        if(isFirstPathComplete) {
          gsap.killTweensOf('#blue-circle')
        } 
        firstPathComplete();
      }

      
      $(window).resize(resetPaths)

      function firstPathComplete () {        

        if(isFirstPathComplete) {

          if(mqlLG.matches) {
        
        firstPathAgain = gsap.timeline();

        firstPathAgain
        .to("#blue-circle", { duration: 30, delay: 0, repeat: 0,  paused: false,  yoyo: false, ease: "none", 
        motionPath:{
              path: "#lh_home_path_1",
              align: "#lh_home_path_1",
              alignOrigin: [0.5, 0.5]
            },
          }) 
          .to("#blue-circle", {   duration: 10, repeat: 0, paused: false, yoyo: false, delay: 0, ease: Linear.easeIn,
            motionPath:{
              path: "#lh_home_path_2",
              align: "#lh_home_path_2",
              autoRotate: false,
              alignOrigin: [0.5, 0.5]
            },
          }).from("#blue-circle", {duration: 2,  repeat: 0, delay: 0, paused: false, ease: "slow", 
          motionPath:{
              path: "#lh_home_path_3",
              align: "#lh_home_path_3",
              autoRotate: true,
              alignOrigin: [0.5, 0.5],
            },
          })
         

        var pathFollowFirst = new ScrollMagic.Scene({
          triggerElement: "#continue-story-msg",
          triggerHook: .5,
          duration: 500
        })
          .setTween(firstPathAgain)
          .addTo(controller);

        // second through eigth path follows
       
        secondPathFollow = gsap.timeline();
          
            secondPathFollow.to("#blue-circle", { duration: 10,  delay: .5, repeat: 0,  paused: false,ease: "slow",
            motionPath:{
              path: "#lh_second_path_1",
              align: "#lh_second_path_1",
              alignOrigin: [0.5, 0.5],
            }
          }) 
          .from("#blue-circle", { duration: 10, delay: .5,repeat: 0,  paused: false, ease: "slow",
            motionPath:{
              path: "#lh_second_path_2",
              align: "#lh_second_path_2",
              autoRotate: false,
              alignOrigin: [0.5, 0.5],
            },
          })
          .from("#blue-circle", { duration: 10,  delay: .5,repeat: 0, paused: false, ease: "slow",
            motionPath:{
              path: "#lh_second_path_3",
              align: "#lh_second_path_3",
              autoRotate: false,
              alignOrigin: [0.5, 0.5],
            }
          })
          .from("#blue-circle", { duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
            motionPath:{
              path: "#lh_second_path_4",
              align: "#lh_second_path_4",
              alignOrigin: [0.5, 0.5],
            },
          })
        

  
        var pathFollowTwo = new ScrollMagic.Scene({
          triggerElement: "#homepage-section-three",
          triggerHook: .7,
          duration: 500
        })
          .setTween(secondPathFollow)
          .addTo(controller);

            var thirdPathFollow = gsap.timeline()
            .to("#blue-circle", {  duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
              motionPath:{
                path: "#lh_home_3_1",
                align: "#lh_home_3_1",
                autoRotate: true,
                alignOrigin: [0.5, 0.5],
              }
            })
            .from("#blue-circle", {  duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
              motionPath:{
                path: "#lh_home_3_2",
                align: "#lh_home_3_2",
                autoRotate: true,
                alignOrigin: [0.5, 0.5],
              }
            })
            .from("#blue-circle", { duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
              motionPath:{
                path: "#lh_home_3_3",
                align: "#lh_home_3_3",
                alignOrigin: [0.5, 0.5],
              },
            }) 
          
      
            const pathFollowThree = new ScrollMagic.Scene({
              triggerElement: "#homepage-section-three",
              triggerHook: 0,
              duration: 800
            })
              .setTween(thirdPathFollow)
              .addTo(controller);

              var fourthPathFollow = gsap.timeline();

                fourthPathFollow
                .to("#blue-circle", {  duration: 10, delay: .5, repeat: 0,  paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_4_1",
                    align: "#lh_home_4_1",
                    alignOrigin: [0.5, 0.5],
                  }
                })
                .to("#blue-circle", { duration: 20, delay: .5, repeat: 0, paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_4_2",
                    align: "#lh_home_4_2",
                    alignOrigin: [0.5, 0.5],
                  }
                })
                .to("#blue-circle", {duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_4_3",
                    align: "#lh_home_4_3",
                    alignOrigin: [0.5, 0.5],
                  }
                })
                .to("#blue-circle", { duration: 10, delay: .5, repeat: 0,paused: false,ease: "slow",
                  motionPath:{
                    path: "#lh_home_4_4",
                    align: "#lh_home_4_4",
                    alignOrigin: [0.5, 0.5],
                  },
                })
              
             
          
              const pathFollowFour = new ScrollMagic.Scene({
                triggerElement: "#homepage-section-four",
                triggerHook: 0,
                duration: 950
              })
                .setTween(fourthPathFollow)
                .addTo(controller);

                var fifthPathFollow = gsap.timeline()
                .to("#blue-circle", { duration: 10, delay: .5,repeat: 0,paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_5_1",
                    align: "#lh_home_5_1",
                    alignOrigin: [0.5, 0.5],
                  },
                })
      
                const pathFollowFive = new ScrollMagic.Scene({
                  triggerElement: "#homepage-section-five",
                  triggerHook: 0,
                  duration: 500
                })
                  .setTween(fifthPathFollow)
                  .addTo(controller);

                  var sixthPathFollow = gsap.timeline()
                  .to("#blue-circle", {duration: 10, delay: .5,repeat: 0,paused: false,ease: "slow",
                    motionPath:{
                      path: "#lh_home_6_1",
                      align: "#lh_home_6_1",
                      autoRotate: true,
                      alignOrigin: [0.5, 0.5],
                    }
                  })
                  .to("#blue-circle", { duration: 10, delay: .5, repeat: 0,paused: false, ease: "slow",
                    motionPath:{
                      path: "#lh_home_6_2",
                      align: "#lh_home_6_2",
                      alignOrigin: [0.5, 0.5],
                    }
                  })
                  .from("#blue-circle", { duration: 30,  delay: .5,repeat: 0, paused: false,ease: "slow",
                    motionPath:{
                      path: "#lh_home_6_3",
                      align: "#lh_home_6_3",
                      alignOrigin: [0.5, 0.5],
                    }
                  })
                  .to("#blue-circle", {duration: 10, delay: .5,  repeat: 0,paused: false, ease: "slow",
                    motionPath:{
                      path: "#lh_home_6_4",
                      align: "#lh_home_6_4",
                      alignOrigin: [0.5, 0.5],
                    },
                  })
        
                  const pathFollowSix = new ScrollMagic.Scene({
                    triggerElement: "#homepage-section-seven",
                    triggerHook: 1,
                    duration: 600
                  })
                    .setTween(sixthPathFollow)
                    .addTo(controller);


              var seventhPathFollow = gsap.timeline()
              .from("#blue-circle", { duration: 10, delay: .5,  repeat: 0,  paused: false, ease: "slow",
                motionPath:{
                  path: "#lh_home_7_1",
                  align: "#lh_home_7_1",
                  alignOrigin: [0.5, 0.5],
                },
              })
              const pathFollowSeven = new ScrollMagic.Scene({
                triggerElement: "#homepage-section-seven",
                triggerHook: 0,
                duration: 400
              })
                .setTween(seventhPathFollow)
                .addTo(controller);


                var eighthPathFollow = gsap.timeline()
                .to("#blue-circle", { duration: 10, delay: .5, repeat: 0, paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_8_1",
                    align: "#lh_home_8_1",
                    alignOrigin: [0.5, 0.5],
                  },
                })
                .to("#blue-circle", { duration: 10, delay: .5, repeat: 0,paused: false, ease: "slow",
                  motionPath:{
                    path: "#lh_home_8_2",
                    align: "#lh_home_8_2",
                    alignOrigin: [0.5, 0.5],
                  },
                })

                const pathFollowEight = new ScrollMagic.Scene({
                triggerElement: "#home-after-footer-spacer",
                  triggerHook: 0.8,
                  duration: 400
                })
                .setTween(eighthPathFollow)
                .addTo(controller);
              
              }
              
            }
      }


      /** END First Section */

      /* UL Icons */
      var ulIcons = $('.graphic-section ul li'),
          svgIcon = "<svg class='svg-ul-icon' xmlns='http://www.w3.org/2000/svg' stroke-dasharray='100%' stroke-dashoffset='100%' width='35.421' height='35.42' viewBox='0 0 35.421 35.42'><g id='prefix__check-circle-duotone_2_' data-name='check-circle-duotone (2)' transform='translate(-7 -7)'><path class='svg-ul-icon-path-one' id='prefix__Path_916' d='M24.71 8a16.71 16.71 0 1 0 16.71 16.71A16.707 16.707 0 0 0 24.71 8zm10.465 13.16l-12.4 12.4a1.078 1.078 0 0 1-1.524 0l-7.006-7.01a1.078 1.078 0 0 1 0-1.524L15.77 23.5a1.078 1.078 0 0 1 1.525 0l4.721 4.721 10.11-10.11a1.078 1.078 0 0 1 1.525 0l1.524 1.525a1.078 1.078 0 0 1 0 1.524z' data-name='Path 916' /><path id='prefix__Path_917' class='svg-ul-icon-path' d='M104.855 169.135a1.078 1.078 0 0 1-1.524 0l-7.008-7.008a1.078 1.078 0 0 1 0-1.524l1.524-1.525a1.078 1.078 0 0 1 1.525 0l4.721 4.721 10.107-10.111a1.078 1.078 0 0 1 1.525 0l1.524 1.525a1.078 1.078 0 0 1 0 1.524z' data-name='Path 917' transform='translate(-82.077 -135.577)'/></g></svg>";

      if(ulIcons.length > 0) {
        $.each(ulIcons, function() {
          $(this).prepend( svgIcon );
        })
      }

      // Scroll Magic/ GSAP timelines
      var secondSectionTimeline = gsap.timeline(),
          sectionThreeTimeline = gsap.timeline(),
          sectionFourTimeline = gsap.timeline(),
          sectionFiveTimeline = gsap.timeline(),
          sectionSixTimeline = gsap.timeline();
          
      // New Functions 
      function drawIcons(element) {
        if($('.wp-night-mode-on').length > 0) {
          $.each(element, function() {
            if($(this).attr('fill') == '#08a5f6') {
              gsap.to($(this), 2.5, {delay: .5 ,ease:"none", fill: '#08a5f6', startAt: {fill: 'transparent'}});
              removeStroke($(this));
            } else {
              gsap.to($(this), 2.5, {delay: .5 ,ease:"none", fill: '#fff', startAt: {fill: 'transparent'}});
            }
          })
        } else {
          $.each(element, function() {
            if($(this).attr('fill') == '#08a5f6') {
              gsap.to($(this), 2.5, {delay: .5 ,ease:"none", fill: '#08a5f6', startAt: {fill: 'transparent'}});
              removeStroke($(this));
            } else {
              gsap.to($(this), 2.5, {delay: .5 ,ease:"none", fill: '#000', startAt: {fill: 'transparent'}});
            }
          })
        }
      }

    function animateGraphic(svg) {

        animateFill($('#' + svg + ' path'));
        animateFill($('#' + svg + ' ellipse'));
    }

    function animateFill(element) {

      $.each(element, function() {
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

    function removeStroke(element) {
      gsap.to(element, 10, {delay: 5 ,ease:"ease", stroke: 'transparent'});
    }

    function displayCardContent() {

      setTimeout( function() {
        $('#home-card-1-svg').addClass('draw')
        $('#home-card-2-svg').addClass('draw')
        $('#home-card-3-svg').addClass('draw')

        drawIcons($('#home-card-1-svg path'));
        drawIcons($('#home-card-2-svg path'));
        drawIcons($('#home-card-3-svg path'));
      }, 2500)

    }

     function startAnimationsSectionTwo() {

      /** Section Two **/ 
      var tlSubheading = gsap.timeline(), 
      mySplitText = new SplitText($('#homepage-s2-headline'), {type:"words,chars"}), 
      chars = mySplitText.chars; //an array of all the divs that wrap each character


      secondSectionTimeline
      .to("#homepage-s2-headline", 20, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
      .from(chars, {delay: .5, duration: .5, opacity:0, ease:"none",  stagger: 0.03 })
      .to($('#homepage-section-two .card-body'), 3.5, {delay: 0,ease:"none", opacity: 1, visibility: 'visible',   startAt: {opacity:0}})
      .to([$('.card .card-title'), $('.card .card-note')], 2.5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
      .to($('#homepage-section-two .card'), 5, {delay: 0,ease:Linear.easeOut, backgroundColor: '#fff',   startAt: { backgroundColor: 'transparent'}})
      .to([$('.card .equal-sign'), $('.card .tagline'), $('.card .card-link')], 2.5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
      .to($('.card svg'), 2.5, {delay: 2, ease:"none", opacity: 1, startAt: {opacity:0}})
      .to($('#homepage-s2-ending-headline'), 2.5, {delay: 2.5 ,ease:"none", opacity: 1, startAt: {opacity:0}})
     
      const testScene = new ScrollMagic.Scene({
        triggerElement: "#homepage-s2-headline",
        triggerHook: .9,
        duration: 600
      })
        .setTween(secondSectionTimeline)
        .addTo(controller);

        $(window).resize(sectionTwoAnimations)

        mqlSM = window.matchMedia('(max-width: 1200px)');

        function sectionTwoAnimations() {
          
          var mql = window.matchMedia('(min-width: 1481px)'),
              mqlMin = window.matchMedia('(min-width: 1200px)'),
              mqlMax = window.matchMedia('(max-width: 1480px)');
              

          if(mqlMin.matches && mqlMax.matches) {
           // console.log('small');
            
            // media query test returning true
          //   gsap.fromTo($('#homepage-section-two .card .top-side'), 5, {width: 0, background: 'black', immediateRender: false, autoRound: false, ease: 'none' }, {width: 715,  background: 'black' } )
          //   gsap.fromTo($('#homepage-section-two .card .right-side'), 5, {height: 0, background: 'black', immediateRender: false,autoRound: false, ease: 'none'}, { height: 415, background: 'black'} )
          //   gsap.fromTo($('#homepage-section-two .card .bottom-side'), 5, {width: 0, background: 'black', immediateRender: false, autoRound: false, ease: 'none' }, {width: 715,  background: 'black' } )
          //   gsap.fromTo($('#homepage-section-two .card .left-side'), 5, {height: 0, background: 'black', immediateRender: false,autoRound: false, ease: 'none'}, { height: 415, background: 'black'} )
          // } else if(mql.matches) {
           // console.log('large');
            
            // gsap.fromTo($('#homepage-section-two .card .top-side'), 5, {width: 0, background: 'black', immediateRender: false, autoRound: false, ease: 'none' }, {width: 715,  background: 'black' } )
            // gsap.fromTo($('#homepage-section-two .card .right-side'), 5, {height: 0, background: 'black', immediateRender: false,autoRound: false, ease: 'none'}, { height: 415, background: 'black'} )
            // gsap.fromTo($('#homepage-section-two .card .bottom-side'), 5, {width: 0, background: 'black', immediateRender: false, autoRound: false, ease: 'none' }, {width: 715,  background: 'black' } )
            // gsap.fromTo($('#homepage-section-two .card .left-side'), 5, {height: 0, background: 'black', immediateRender: false,autoRound: false, ease: 'none'}, { height: 415, background: 'black'} )
          }

          if(!hasBorderAnimated) {

            setTimeout( function() {
              $('#home-card-1-svg').addClass('draw')
              $('#home-card-2-svg').addClass('draw')
              $('#home-card-3-svg').addClass('draw')
    
              drawIcons($('#home-card-1-svg path'));
              drawIcons($('#home-card-2-svg path'));
              drawIcons($('#home-card-3-svg path'));
            }, 500)
            
            hasBorderAnimated = true;

          }
        }


        var hasBorderAnimated = false
        testScene.on("enter", sectionTwoAnimations); // end section two


        /**  SECTION THREE **/
        var headline = $('#homepage-section-three .section-heading'),
                mySplitText = new SplitText(headline, {type:"words,chars"}), 
                chars = mySplitText.chars, //an array of all the divs that wrap each character
                hasS3GraphicAnimated = false;

        sectionThreeTimeline
        .to($('#home-section-three-graphic'), .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
        .from(chars, {delay: .5, duration: 1, opacity:0, ease:"none", stagger: 0.05 })
        .to(headline, .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
        .to($('#homepage-section-three ul li'), 2.5, {delay: 0,ease:"none", opacity: 1, stagger: 0.5, startAt: {opacity:0}})     

        var sectionThreeScene;
        if(mqlSM.matches) {          
          sectionThreeScene = new ScrollMagic.Scene({
            triggerElement: "#homepage-section-three .section-heading",
                      triggerHook: .9,
                      duration: 700
          })
           .setTween(sectionThreeTimeline)
           .addTo(controller);
        } else {
          sectionThreeScene = new ScrollMagic.Scene({
            triggerElement: "#homepage-section-three .section-heading",
                      triggerHook: .85,
                      duration: 500
          })
           .setTween(sectionThreeTimeline)
           .addTo(controller);
        }
         sectionThreeScene.on("enter", function (event) {
            
           $('#homepage-section-three .svg-ul-icon').addClass('draw-sm');
           gsap.to("#home-section-three-graphic path", 4, {delay:0,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, })   
           gsap.to("#homepage-section-three .svg-ul-icon-path", 3, {delay:0.5,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, onComplete: removeIconStroke, stagger: 0.05})
           gsap.to("#homepage-section-three .svg-ul-icon-path-one", 3, {delay:1,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, stagger: 0.05})

           setTimeout(function() {
            animateGraphic('home-section-three-graphic')
           },3000)
           

           function removeIconStroke() {
            
            removeStroke($('#homepage-section-three .svg-ul-icon'))
            gsap.to("#homepage-section-three .svg-ul-icon-path-one", 2, {delay:1,ease: Linear.easeIn, fill: '#08a5f6', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})
            gsap.to("#homepage-section-three .svg-ul-icon-path", 2, {delay:0,ease: Linear.easeIn, fill: 'black', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})       

            setTimeout(function() {
              $('#homepage-section-three .svg-ul-icon').removeClass('draw-sm');
            }, 3000)

          }
           
          if(!hasS3GraphicAnimated) {
            
            $('#home-section-three-graphic').addClass('draw-sm');
              hasS3GraphicAnimated = true;
           }
          
         });


/*** SECTION FOUR */
var headlineSectionFour = $('#homepage-section-four .section-heading'),
mySplitText4 = new SplitText(headlineSectionFour, {type:"words,chars"}), 
chars4 = mySplitText4.chars, //an array of all the divs that wrap each character
hasS4GraphicAnimated = false,
sectionFourScene;

if(mqlSM.matches) { 
           
  sectionFourScene = new ScrollMagic.Scene({
    triggerElement: "#homepage-section-four .section-heading",
    triggerHook: .95,
    duration: 700
  })
  .setTween(sectionFourTimeline)
  .addTo(controller);
 } else {
    sectionFourScene = new ScrollMagic.Scene({
      triggerElement: "#homepage-section-four .section-heading",
      triggerHook: .9,
      duration: 500
    })
    .setTween(sectionFourTimeline)
    .addTo(controller);
  }

  sectionFourTimeline
  .to(headlineSectionFour, .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}, })
  .to($('#home-section-four-graphic'), .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
  .from(chars4, {delay: .5, duration: 1, opacity:0, ease:"none", stagger: 0.05})
  .to($('#homepage-section-four ul li'), 2.5, {delay: 0,ease:"none", opacity: 1, stagger: 0.5, startAt: {opacity:0}});

  sectionFourScene.on("enter", function (event) {
    
    $('#homepage-section-four .svg-ul-icon').addClass('draw-sm');
    gsap.to("#homepage-section-four .svg-ul-icon-path", 3, {delay:0.5,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, onComplete: removeIconStroke, stagger: 0.05})
    gsap.to("#homepage-section-four .svg-ul-icon-path-one", 3, {delay:1,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, stagger: 0.05})

    function removeIconStroke() {
     
     removeStroke($('.svg-ul-icon'))
     gsap.to("#homepage-section-four .svg-ul-icon-path-one", 2, {delay:1,ease: Linear.easeIn, fill: '#08a5f6', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})
     gsap.to("#homepage-section-four .svg-ul-icon-path", 2, {delay:0,ease: Linear.easeIn, fill: 'black', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})       

     setTimeout(function() {
       $('#homepage-section-four .svg-ul-icon').removeClass('draw-sm');
     }, 3000)

   }

    if(!hasS4GraphicAnimated) {

      $('#home-section-four-graphic').addClass('draw');
      animateGraphic('home-section-four-graphic');

      hasS4GraphicAnimated = true;
    }
  })
/*** END SECTION FOUR */


/*** SECTION FIVE ** */
var headlineSectionFive = $('#homepage-section-five .section-heading'),
tlSubheading = gsap.timeline(), 
mySplitText = new SplitText(headlineSectionFive, {type:"words,chars"}), 
chars5 = mySplitText.chars, 
hasS5GraphicAnimated = false,
sectionFiveScene;

if(mqlSM.matches) { 

sectionFiveScene = new ScrollMagic.Scene({
  triggerElement: "#homepage-section-five .section-heading",
  triggerHook: .9,
  duration: 700
})
.setTween(sectionFiveTimeline)
.addTo(controller);
} else {
  sectionFiveScene = new ScrollMagic.Scene({
    triggerElement: "#homepage-section-five .section-heading",
    triggerHook: .9,
    duration: 500
  })
  .setTween(sectionFiveTimeline)
  .addTo(controller);
}


sectionFiveTimeline
.to(headlineSectionFive, .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
.to($('#home-section-five-graphic'), .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
.from(chars5, {delay: .5, duration: 1, opacity:0, ease:"none", stagger: 0.05 })
.to($('#homepage-section-five ul li'), 2.5, {delay: 0,ease:"none", opacity: 1, stagger: 0.5, startAt: {opacity:0}});


    sectionFiveScene.on("enter", function (event) {

      $('#homepage-section-five .svg-ul-icon').addClass('draw-sm');
      gsap.to("#homepage-section-five .svg-ul-icon-path", 3, {delay:0.5,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, onComplete: removeIconStroke, stagger: 0.05})
      gsap.to("#homepage-section-five .svg-ul-icon-path-one", 3, {delay:1,ease: Linear.easeIn, drawSVG: '100%', startAt: {drawSVG: '0%'}, stagger: 0.05})
  
      function removeIconStroke() {
        
        removeStroke($('.svg-ul-icon'))
        gsap.to("#homepage-section-five .svg-ul-icon-path-one", 2, {delay:1,ease: Linear.easeIn, fill: '#08a5f6', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})
        gsap.to("#homepage-section-five .svg-ul-icon-path", 2, {delay:0,ease: Linear.easeIn, fill: 'black', drawSVG: '0%', startAt: {fill: 'transparent', drawSVG: '100%'}, stagger: 0.05})       
  
        setTimeout(function() {
          $('#homepage-section-five .svg-ul-icon').removeClass('draw-sm');
        }, 3000)
  
      }

      if(!hasS5GraphicAnimated) {
        $('#home-section-five-graphic').addClass('draw');
        animateGraphic('home-section-five-graphic');
        hasS5GraphicAnimated = true;

          setTimeout(function() {
            $('#home-section-five-graphic').removeClass('draw');

          }, 10000)
      }
    
    })
/*   Section Five */

/***  SECTION Six ** */
var headlineSectionSix = $('#homepage-section-six .section-heading'),
        mySplitText = new SplitText(headlineSectionSix, {type:"words,chars"}), 
        chars6 = mySplitText.chars, //an array of all the divs that wrap each character
        hasS6VideoAnimated = false,
        sectionSixScene;

        if(mqlSM.matches) { 

        sectionSixScene = new ScrollMagic.Scene({
              triggerElement: "#homepage-section-six",
              triggerHook: 1,
              duration: 500
          })
        .setTween(sectionSixTimeline)
        .addTo(controller);
        } else {
          sectionSixScene = new ScrollMagic.Scene({
            triggerElement: "#homepage-section-six .embed-container",
            triggerHook: 1,
            duration: 500
        })
      .setTween(sectionSixTimeline)
      .addTo(controller);
        }

        sectionSixTimeline
        .to(headlineSectionSix, .5, {delay: 0,ease:"none", opacity: 1, startAt: {opacity:0}})
        .from(chars6, {delay: 0, duration: 10, opacity:0, ease:Linear.easeIn, stagger: 50})

        sectionSixScene.on("enter", function (event) {
          if(!hasS6VideoAnimated) {
            setTimeout(function() {
              // sectionSixTimeline.to($('#homepage-section-six iframe'), 4, {delay: 2,ease:Linear.easeOut, opacity: 1, startAt: {opacity:0}})
            
              gsap.to($('#homepage-section-six .embed-container'), 4, {delay: 2,ease:Linear.easeOut, opacity: 1, startAt: {opacity:0}})

              hasS6VideoAnimated = true;
            }, 1000)
          }

        })
      }
/* END  Section six */

    /** SECTION SEVEN *****/
    setTimeout( function() {
      initCarousel();
    }, 300)
   
    
    function initCarousel() {

      if($('.logos-row.row-1').length > 0) {
          // logo hover
          $('.company-logos .logo').on('mouseenter',function() {
            gsap.to($(this).children('.waves'), .5, {delay: 0,ease:"none", transform:"scale(2)", opacity: 1, startAt: {transform:"scale(1)", opacity: 0}});
            gsap.to($(this).children('img'), .5, {delay: 0,ease:"none", transform:"scale(1.05)", startAt: {transform:"scale(1)"}});

              $(this).on('mouseleave',function() {
                gsap.to($(this).children('.waves'), .5, {delay: 0,ease:"none", transform:"scale(1)", opacity: 0, startAt: {transform:"scale(1.1)", opacity: 1}});
                gsap.to($(this).children('img'), .5, {delay: 0,ease:"none", transform:"scale(1)", startAt: {transform:"scale(1.05)"}});
              });
          })
        }


 if($('.row-1 .logo').length > 0) {

  var logosTimeline = gsap.timeline(),
      rowOneLogos = $('.row-1 .logo'),
      rowTwoLogos = $('.row-2 .logo');

      var theRowWidth = rowOneLogos.length * 400;
      useRowWidth = '+=' + theRowWidth,
      logosTimelineDuration = 45,
      maxRowWidth = parseInt(theRowWidth) - 400;

    //initially colorize each box and position in a row
    logosTimeline
      .set(rowOneLogos, {
      x: (i) => i * 400
    })
    .set(".row-1", {
      width: "100%"
    });
    
      logosTimeline.to(rowOneLogos, {
      duration: logosTimelineDuration,
      ease: "none",
      x: useRowWidth, //move each box 500px to right
      modifiers: {
        x: gsap.utils.unitize(x => parseFloat(x) % parseInt(theRowWidth)) //force x value to be between 0 and 500 using modulus
      },
      repeat: -1
    });

      $('.row-1').on('mouseenter',function() {

        gsap.to(rowOneLogos, {duration: 50,
          ease: "none",
          x: useRowWidth, //move each box 500px to right
          modifiers: {
            x: gsap.utils.unitize(x => parseFloat(x) % parseInt(theRowWidth)) //force x value to be between 0 and 500 using modulus
          },
          repeat: -1})

      })


      $('.row-1').on('mouseleave',function() {

        gsap.to(rowOneLogos, {duration: logosTimelineDuration,
          ease: "none",
          x: useRowWidth, //move each box 500px to right
          modifiers: {
            x: gsap.utils.unitize(x => parseFloat(x) % parseInt(theRowWidth)) //force x value to be between 0 and 500 using modulus
          },
          repeat: -1})
        
      })
  } // end .row-1
  if($('.row-2 .logo').length > 0) {

    var logosTimeline2 = gsap.timeline(),
        rowTwoLogos = $('.row-2 .logo');

    //rowTwoLogos.push($('#proud-member-wrap'))

    var theRowWidth2 = rowTwoLogos.length * 400;
      useRowWidth2 = '+=' + theRowWidth2,
      logosTimelineDuration2 = 45,
      maxRowWidth2 = parseInt(theRowWidth2) - 400;

      //initially colorize each box and position in a row
      logosTimeline2
        .set(rowTwoLogos, {
        x: (i) => i * 400
      })
      .set(".row-2", {
        width: "100%",
      });
  
        logosTimeline2.to(rowTwoLogos, {
        duration: logosTimelineDuration2,
        ease: "none",
        x: useRowWidth2, //move each box 500px to right
        modifiers: {
          x: gsap.utils.unitize(x => parseFloat(x) % parseInt(theRowWidth2)) //force x value to be between 0 and 500 using modulus
        },
        repeat: -1
      });   
  
   } // end .row-2
      
  }

})(jQuery);