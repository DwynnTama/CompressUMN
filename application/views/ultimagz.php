<div id="fullpage" >
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <h1>ULTIMAGZ</h1>
        </div>
    </section>
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <iframe src="https://drive.google.com/file/d/1f4r_4micWY9bM915du_xg4mmb4-OPbxR/preview" class="pdf-view"></iframe>
        </div>
        <div class="horizontal-scrolling">
            <iframe src="https://drive.google.com/file/d/1qnopiLOD_9IJX7uAqvvUlDLoxXEAjOk2/preview" class="pdf-view"></iframe>
        </div>
        <div class="horizontal-scrolling">
            <iframe src="https://drive.google.com/file/d/1iw0znOAwLg1D3jz01idzPPOuV1r23iAw/preview" class="pdf-view"></iframe>
        </div>
        <div class="horizontal-scrolling">
            <iframe src="https://drive.google.com/file/d/1TR5YK6BiwSm0k92KSyjDSiVX52XjT4Iy/preview" class="pdf-view"></iframe>
        </div>
    </section>
</div>
<style>
  nav{
      display:none;
  }

.pdf-view
{
    width: 33.333vw;
    height: 73.84vh;
}

.scroll-icon {
    position: absolute;
    left: 50%;
  bottom: 30px;
  padding: 0 10px;
    -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
            transform: translateX(-50%);
}

.kotak
{
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    grid-gap: 1px;
}

.kotak-ver
{
    display: grid;
    grid-template-rows: 1fr 1fr;
    grid-gap: 35px;
    margin-top: 20vh;
    position: relative;
}

.kotak-ver p
{
    font-family: "Avenir";
    width: 100%;

}

.kotak p
{
    text-align: left;
    margin-left: 0;
    width: 70%;
    font-family: "Avenir";
}

.vertical-scrolling
{
    height: inherit; /* forbidden jutsu stop right here*/
}

.horizontal-scrolling
{
  background: #f4e89e;
}

.horizontal-scrolling h1
{
  font-family: "Avenir-bold";
  width: 100%;
  letter-spacing: 2px;
  color: #333452;
  font-size: 5.33vw;
}

.credit h3
{
  font-family: "Anastik";
  font-size: 3.33vw;
}

.credit h4
{
  font-size: 1.2vw;
  font-family: "Avenir-light";
}

.credit
{
  padding-top: 10px;
  height: 10.3vw;
  width: 100%;
}


/* HELPER CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}

.clearfix:after {
  clear: both;
}

.l-left {
    float: left;
}

.l-right {
    float: right;
}

.end {
    margin-top: 30px;
    font-size: 3em;
    font-weight: bold;
    opacity: 0;
    -webkit-transform: translateY(300px);
        -ms-transform: translateY(300px);
            transform: translateY(300px);
    -webkit-transition: opacity, -webkit-transform 1s;
            transition: opacity, transform 1s;
    -webkit-transition-delay: 1s;
            transition-delay: 1s;
}




.konten-punten
{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: -5%;
}

section { 
    text-align: center;
}

h2 {
    font-size: 4em;
    margin-bottom: 50px;
}

.img-juice-small
{
    width: 43.5vw;
    height: 52.28vh;
    object-fit: scale-down;
    border-radius: 5px;
}

.img-juice
{
    width: 43.5vw;
    height: 60.28vh;
    object-fit: scale-down;
    border-radius: 5px;
}

.vid-dokum
{
    width: 43.5vw;
    height: 48.28vh;
    object-fit: scale-down;
}


/* SLIDENAV STYLES - fullPage.js 
–––––––––––––––––––––––––––––––––––––––––––––––––– */

#fp-nav ul li a span, 
.fp-slidesNav ul li a span {
    background: #333452;
    width: 8px;
    height: 8px;
    margin: -4px 0 0 -4px;
}

.fp-controlArrow.fp-prev
{
  border-color: transparent #333452 transparent transparent !important;
  animation: float-left 1.25s infinite;
}

.fp-controlArrow.fp-next
{
  border-color: transparent transparent transparent #333452 !important;
  animation: float-right 1.25s infinite;
}

#fp-nav ul li a.active span, 
.fp-slidesNav ul li a.active span, 
#fp-nav ul li:hover a.active span, 
.fp-slidesNav ul li:hover a.active span {
    width: 16px;
    height: 16px;
    margin: -8px 0 0 -8px;
    background: transparent;
    box-sizing: border-box;
    border: 1px solid #ed2326;
}

@keyframes float-left{
    0% {left: 10px;}
    100%{left: 0px;}
}

@keyframes float-right{
    0% {right: 10px;}
    100%{right: 0px;}
}



/* MQ STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

@media screen and (max-width: 767px) {
    nav ul {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column;
    }

    nav li {
        margin-top: 1px;
    }
  
  nav li a {
    font-size: 1.5em;
  }
  
  .scroll-icon {
    display: none;
  }
}

@media screen and (max-width: 400px) {
  html {
    font-size: 50%;
  }
  
  .open-menu ~ nav {
        padding: 20px 0;
    }

    nav li a {
        padding: 3px;
    }
}
  </style>

<script type="text/javascript">
// variables
var $header_top = $('.header-top');
var $nav = $('nav');



// toggle menu 
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});



// fullpage customization
$('#fullpage').fullpage({
  sectionsColor: ['#F4E89E', '#333452', '#F4E89E', '#F4E89E', '#F4E89E', '#F4E89E'],
  sectionSelector: '.vertical-scrolling',
  slideSelector: '.horizontal-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: true,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection', 'sixthSection'],
  menu: '#menu',

  afterLoad: function(anchorLink, index) {
    $header_top.css('background', 'rgba(0, 47, 77, .3)');
    $nav.css('background', 'rgba(0, 47, 77, .25)');
    if (index == 6) {
        $('#fp-nav').hide();
      }
  },

  onLeave: function(index, nextIndex, direction) {
    if(index == 6) {
      $('#fp-nav').show();
    }
  },

  afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
    if(anchorLink == 'sixthSection' && slideIndex == 1) {
      $.fn.fullpage.setAllowScrolling(false, 'up');
      $header_top.css('background', 'transparent');
      $nav.css('background', 'transparent');
      $(this).css('background', '#374140');
      $(this).find('h2').css('color', 'white');
      $(this).find('h3').css('color', 'white');
      $(this).find('p').css(
        {
          'color': '#DC3522',
          'opacity': 1,
          'transform': 'translateY(0)'
        }
      );
    }
  },

  onSlideLeave: function( anchorLink, index, slideIndex, direction) {
    if(anchorLink == 'sixthSection' && slideIndex == 1) {
      $.fn.fullpage.setAllowScrolling(true, 'up');
      $header_top.css('background', 'rgba(0, 47, 77, .3)');
      $nav.css('background', 'rgba(0, 47, 77, .25)');
    }
  } 
}); 

  </script>