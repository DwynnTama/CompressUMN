<script src="<?= base_url('assets/js/slide.js')?>"></script>
<div id="fullpage" >
    <section class="vertical-scrolling">
        <div class="land">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='title' style="transform: translateY(-100px);">
                <span class="big-title">
                    COMMPRESS 2021
                </span>
                <br>
                <span class="small-title">
                    ESCALATE OPTIMISM THROUGH JOURNALISM
                </span>
                <div class="kontener">
                    <button class="btn-event"><a href="<?= base_url('Lomba'); ?>" id="event">LOMBA</a></button>
                    <button class="btn-event"><a href="<?= base_url('Pameran'); ?>" id="pameran">PAMERAN</a></button>
                    <button class="btn-about"><a href="<?= base_url('Aboutus'); ?>" id="lomba">ABOUT</a></button>
                </div>
                <span class="instruction-title" style="margin-top: 30vh;">
                    CHECK US OUT
                    <img src="<?= base_url("assets/images/scroll-below.png") ?>" />
                </span>
            </div>
        </div>
    </section>
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <div class="konten-punten">
              <h2>SEBELUMNYA DI</h2>
              <h1 data-text="#COMMPRESS2020">#COMMPRESS2020</h1>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic1.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic2.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic3.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic4.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic5.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/pic6.jpg") ?>"width="100%" height="auto" style="object-fit: cover;" alt="Image 1">
        </div>
    </section>
    <section class="vertical-scrolling">
    <div class="konten-punten">
        <div class="commpress-section">
            <video class="commpress-vid" style="margin: 0px 30px 0px 30px; object-fit: scale-down;" controls>
                <source src="<?= base_url("assets/video/check_us_out.mp4")?>"/>
            </video>
        </div>
    </div>
    </section>
    <section class="vertical-scrolling">
    <div class="konten-punten">
        <div class="commpress-section">
            <div>
                <h2 style="color: #f4e89e;">SHARE</h2>
            </div>
            <div class="powr-comments-box size" id="39e12fb6_1619433194"></div><script src="https://www.powr.io/powr.js?platform=html"></script>
            <div>
                <h2 style="color: #f4e89e;">YOUR COMMENT</h2>
            </div>
        </div>
    </div>
    </section>
</div>

<style>
  .navbar
  {
      display: none;
  }

  nav{
      display:none;
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

.vertical-scrolling
{
    height: inherit; /* forbidden jutsu stop right here*/
}

.horizontal-scrolling
{
  background: transparent;
}

.size
{
  max-height: 60vh;
  overflow-y: scroll;
  position: relative;
  min-width: 25vw;
}

.fp-controlArrow.fp-next
{
  right: 50px;
  border-color: transparent transparent transparent #333452;
}

.fp-controlArrow.fp-prev
{
  border-color: transparent #333452 transparent #fff;
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
    height: 100%;
}

.konten-punten h1
{
  font-family: "Avenir-bold";
  font-size: 3.33vw;
  color: transparent;
  -webkit-text-stroke: 0.1vw #333452;
  position: relative;
  margin-top: -50px;
}

.konten-punten h2
{
  font-family: "Avenir-medium";
  font-size: 2.5vw;
  color: #231f20;
}

.konten-punten h1::before
{
  content: attr(data-text);
  position: absolute;
  width: 0;
  height: 100%;
  color: #333452;
  overflow: hidden;
  -webkit-text-stroke: 0vw #333452;
  border-right: 2px solid #333452;
  animation: animater 6s linear infinite;
}

@keyframes animater
{
  0%
  {
    width: 0;
  }

  3%, 9%, 15%, 21%, 27%, 33%, 39%, 45%, 48%, 51%, 57%, 63%, 69%, 75%, 81%, 87%, 93%, 99%
  {
    border-right: 0;
  }

  6%, 12%, 18%, 24%, 30%, 36%, 42%, 48%, 54%, 60%, 66%, 72%, 78%, 84%, 90%, 96%
  {
    border-right: 2px solid #333452;
  }

  50%,80%
  {
    width: 100%;
  }

  100%
  {
    width: 0;
  }
}

section { 
    text-align: center;
}

h2 {
    font-size: 4em;
    margin-bottom: 50px;
}




/* SLIDENAV STYLES - fullPage.js 
–––––––––––––––––––––––––––––––––––––––––––––––––– */

#fp-nav ul li a span, 
.fp-slidesNav ul li a span {
    background: #333452;
    border: 2px solid #ed2326;
    width: 8px;
    height: 8px;
    margin: -4px 0 0 -4px;
}

.fp-slidesNav .active{
  background: transparent;
}

#fp-nav .active{
  background: transparent;
}

#fp-nav a span{
  background: #333452 !important;
}

#fp-nav ul li a.active span, 
.fp-slidesNav ul li a.active span, 
#fp-nav ul li:hover a.active span, 
.fp-slidesNav ul li:hover a.active span {
    width: 16px;
    height: 16px;
    margin: -8px 0 0 -8px;
    background: #ed2326;
    box-sizing: border-box;
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
  sectionsColor: ['#F4E89E', 'transparent', '#F4E89E', '#333452'],
  sectionSelector: '.vertical-scrolling',
  slideSelector: '.horizontal-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: true,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fouthSection'],
  menu: '#menu',

  afterLoad: function(anchorLink, index) {
    $header_top.css('background', 'rgba(0, 47, 77, .3)');
    $nav.css('background', 'rgba(0, 47, 77, .25)');
    if (index == 5) {
        $('#fp-nav').hide();
      }
  },

  onLeave: function(index, nextIndex, direction) {
    if(index == 5) {
      $('#fp-nav').show();
    }
  },

  afterSlideLoad: function( anchorLink, index, slideAnchor, slideIndex) {
    if(anchorLink == 'fifthSection' && slideIndex == 1) {
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
    if(anchorLink == 'fifthSection' && slideIndex == 1) {
      $.fn.fullpage.setAllowScrolling(true, 'up');
      $header_top.css('background', 'rgba(0, 47, 77, .3)');
      $nav.css('background', 'rgba(0, 47, 77, .25)');
    }
  } 
}); 

  </script>