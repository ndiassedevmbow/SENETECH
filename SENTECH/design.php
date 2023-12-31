<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
  <meta charset="utf-8"/>
  <title>sentech-design</title>

  <!-- LIENS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://kinsta.com/fr/blog/polices-modernes/#6-lucky">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>

  <style type="text/css">
    .slideshow {
      overflow: hidden;
      position: relative;
      width: 100%;
      height: 100vh;
      z-index: 1;
    }
    .slideshow .slideshow-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .slideshow .slides {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }
    .slideshow .slide {
      display: none;
      overflow: hidden;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .slideshow .slide.is-active {
      display: block;
    }
    .slideshow .slide.is-loaded {
      opacity: 1;
    }
    .slideshow .slide .caption {
      padding: 0 100px;
    }
    .slideshow .slide .image-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-position: center;
      z-index: 1;
      background-size: cover;
      image-rendering: optimizeQuality;
    }
    .slideshow .slide .image-container::before {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .slideshow .slide .image {
      width: 100%;
      width: 100%;
      object-fit: cover;
      height: 100%;
    }
    .slideshow .slide-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 2;
      color: #fff;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .slideshow .slide .title {
      margin: 0 auto 15px;
      max-width: 1000px;
      color: orange;
      font: 300 50px/1.2 Bernard MT Condensed, sans-serif;
      letter-spacing: 0.35em;
      text-transform: uppercase;
    }
    .slideshow .slide .text {
      margin: 0 auto;
      max-width: 1000px;
      font-size: 18px;
      font-family: Times New Roman;
      line-height: 1.4;
    }
    .slideshow .slide .btn {
      margin: 15px 0 0;
      border-color: #fff;
    }
    .slideshow .slide .btn::before {
      background: #fff;
    }
    .slideshow .pagination {
      position: absolute;
      bottom: 35px;
      left: 0;
      width: 100%;
      height: 12px;
      cursor: default;
      z-index: 2;
      text-align: center;
    }
    .slideshow .pagination .item {
      display: inline-block;
      padding: 15px 5px;
      position: relative;
      width: 46px;
      height: 32px;
      cursor: pointer;
      text-indent: -999em;
      z-index: 1;
    }
    .slideshow .pagination .item + .page {
      margin-left: -2px;
    }
    .slideshow .pagination .item::before {
      content: "";
      display: block;
      position: absolute;
      top: 15px;
      left: 5px;
      width: 36px;
      height: 2px;
      background: rgba(255, 255, 255, 0.5);
      transition: background 0.2s ease;
    }
    .slideshow .pagination .item::after {
      width: 0;
      background: #fff;
      z-index: 2;
      transition: width 0.2s ease;
    }
    .slideshow .pagination .item:hover::before, .slideshow .pagination .item.is-active::before {
      background-color: #fff;
    }
    .slideshow .arrows .arrow {
      margin: -33px 0 0;
      padding: 20px;
      position: absolute;
      top: 50%;
      cursor: pointer;
      z-index: 3;
    }
    .slideshow .arrows .prev {
      left: 30px;
    }
    .slideshow .arrows .prev:hover .svg {
      left: -10px;
    }
    .slideshow .arrows .next {
      right: 30px;
    }
    .slideshow .arrows .next:hover .svg {
      left: 10px;
    }
    .slideshow .arrows .svg {
      position: relative;
      left: 0;
      width: 14px;
      height: 26px;
      fill: #fff;
      transition: left 0.2s ease;
    }
  </style>
</head>



<body>

<?php  
include 'ENTETE_PIED/header.php';
?>

<hr id="ligne">

<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">

      <div class="slides">

        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">publicité</div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div> 
              
            </div>
          </div>
          <div class="image-container"> 
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2015/07/Indispensable-1.jpg" alt="" class="image" />
          </div>
        </div>

        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">flyers</div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div> 
              
            </div>
          </div>
          <div class="image-container">
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2015/07/Indispensable-4-1.jpg" alt="" class="image" />
          </div>
        </div>


        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">baches</div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div> 
              
            </div>
          </div>
          <div class="image-container">
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2016/11/11.jpg" alt="" class="image" />
          </div>
        </div>


        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">autres</div>
              <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div> 
              
            </div>
          </div>
          <div class="image-container"> 
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2016/11/20mars17-sans-typo.jpg" alt="" class="image" />
          </div>
        </div>

      </div>


      <div class="pagination">
        <div class="item is-active"> 
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
      </div>

      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>

    </div> 
  </section>
</main>




<?php  
include 'ENTETE_PIED/footer.php';
?>


<script type="text/javascript">
  var slideshowDuration = 4000;
  var slideshow=$('.main-content .slideshow');

  function slideshowSwitch(slideshow,index,auto){
    if(slideshow.data('wait')) return;

    var slides = slideshow.find('.slide');
    var pages = slideshow.find('.pagination');
    var activeSlide = slides.filter('.is-active');
    var activeSlideImage = activeSlide.find('.image-container');
    var newSlide = slides.eq(index);
    var newSlideImage = newSlide.find('.image-container');
    var newSlideContent = newSlide.find('.slide-content');
    var newSlideElements=newSlide.find('.caption > *');
    if(newSlide.is(activeSlide))return;

    newSlide.addClass('is-new');
    var timeout=slideshow.data('timeout');
    clearTimeout(timeout);
    slideshow.data('wait',true);
    var transition=slideshow.attr('data-transition');
    if(transition=='fade'){
      newSlide.css({
        display:'block',
        zIndex:2
      });
      newSlideImage.css({
        opacity:0
      });

      TweenMax.to(newSlideImage,1,{
        alpha:1,
        onComplete:function(){
          newSlide.addClass('is-active').removeClass('is-new');
          activeSlide.removeClass('is-active');
          newSlide.css({display:'',zIndex:''});
          newSlideImage.css({opacity:''});
          slideshow.find('.pagination').trigger('check');
          slideshow.data('wait',false);
          if(auto){
            timeout=setTimeout(function(){
              slideshowNext(slideshow,false,true);
            },slideshowDuration);
            slideshow.data('timeout',timeout);}}});
    } else {
      if(newSlide.index()>activeSlide.index()){
        var newSlideRight=0;
        var newSlideLeft='auto';
        var newSlideImageRight=-slideshow.width()/8;
        var newSlideImageLeft='auto';
        var newSlideImageToRight=0;
        var newSlideImageToLeft='auto';
        var newSlideContentLeft='auto';
        var newSlideContentRight=0;
        var activeSlideImageLeft=-slideshow.width()/4;
      } else {
        var newSlideRight='';
        var newSlideLeft=0;
        var newSlideImageRight='auto';
        var newSlideImageLeft=-slideshow.width()/8;
        var newSlideImageToRight='';
        var newSlideImageToLeft=0;
        var newSlideContentLeft=0;
        var newSlideContentRight='auto';
        var activeSlideImageLeft=slideshow.width()/4;
      }

      newSlide.css({
        display:'block',
        width:0,
        right:newSlideRight,
        left:newSlideLeft
        ,zIndex:2
      });

      newSlideImage.css({
        width:slideshow.width(),
        right:newSlideImageRight,
        left:newSlideImageLeft
      });

      newSlideContent.css({
        width:slideshow.width(),
        left:newSlideContentLeft,
        right:newSlideContentRight
      });

      activeSlideImage.css({
        left:0
      });

      TweenMax.set(newSlideElements,{y:20,force3D:true});
      TweenMax.to(activeSlideImage,1,{
        left:activeSlideImageLeft,
        ease:Power3.easeInOut
      });

      TweenMax.to(newSlide,1,{
        width:slideshow.width(),
        ease:Power3.easeInOut
      });

      TweenMax.to(newSlideImage,1,{
        right:newSlideImageToRight,
        left:newSlideImageToLeft,
        ease:Power3.easeInOut
      });

      TweenMax.staggerFromTo(newSlideElements,0.8,{alpha:0,y:60},{alpha:1,y:0,ease:Power3.easeOut,force3D:true,delay:0.6},0.1,function(){
        newSlide.addClass('is-active').removeClass('is-new');
        activeSlide.removeClass('is-active');
        newSlide.css({
          display:'',
          width:'',
          left:'',
          zIndex:''
        });

        newSlideImage.css({
          width:'',
          right:'',
          left:''
        });

        newSlideContent.css({
          width:'',
          left:''
        });

        newSlideElements.css({
          opacity:'',
          transform:''
        });

        activeSlideImage.css({
          left:''
        });

        slideshow.find('.pagination').trigger('check');
        slideshow.data('wait',false);
        if(auto){
          timeout=setTimeout(function(){
            slideshowNext(slideshow,false,true);
          },slideshowDuration);
          slideshow.data('timeout',timeout);
        }
      });
    }
  }

  function slideshowNext(slideshow,previous,auto){
    var slides=slideshow.find('.slide');
    var activeSlide=slides.filter('.is-active');
    var newSlide=null;
    if(previous){
      newSlide=activeSlide.prev('.slide');
      if(newSlide.length === 0) {
        newSlide=slides.last();
      }
    } else {
      newSlide=activeSlide.next('.slide');
      if(newSlide.length==0)
        newSlide=slides.filter('.slide').first();
    }

    slideshowSwitch(slideshow,newSlide.index(),auto);
  }

  function homeSlideshowParallax(){
    var scrollTop=$(window).scrollTop();
    if(scrollTop>windowHeight) return;
    var inner=slideshow.find('.slideshow-inner');
    var newHeight=windowHeight-(scrollTop/2);
    var newTop=scrollTop*0.8;

    inner.css({
      transform:'translateY('+newTop+'px)',height:newHeight
    });
  }

  $(document).ready(function() {
   $('.slide').addClass('is-loaded');

   $('.slideshow .arrows .arrow').on('click',function(){
    slideshowNext($(this).closest('.slideshow'),$(this).hasClass('prev'));
  });

   $('.slideshow .pagination .item').on('click',function(){
    slideshowSwitch($(this).closest('.slideshow'),$(this).index());
  });

   $('.slideshow .pagination').on('check',function(){
    var slideshow=$(this).closest('.slideshow');
    var pages=$(this).find('.item');
    var index=slideshow.find('.slides .is-active').index();
    pages.removeClass('is-active');
    pages.eq(index).addClass('is-active');
  });

  var timeout=setTimeout(function(){
    slideshowNext(slideshow,false,true);
  },slideshowDuration);

  slideshow.data('timeout',timeout);
  });

  if($('.main-content .slideshow').length > 1) {
    $(window).on('scroll',homeSlideshowParallax);
  }
</script>

  </body>
</html>

