<script src="<?= base_url('assets/js/slide.js')?>"></script>
<div id="fullpage" >
    <section class="vertical-scrolling">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/umn_juice.png")?>" class="img-juice-small" alt="">
        </div>
    </section>
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <div class="kotak">
                <img src="<?= base_url("assets/images/juice/juice_1/1.png")?>" class="img-juice-small">
                <p>[INFOGRAFIS: Perempuan & Permainan Catur] <br><br>
 
                Serial "The Queen's Gambit" membuka mata publik bahwa peran perempuan dalam permainan catur kelas dunia masih merupakan minoritas, bahkan seringkali dipandang rendah oleh laki-laki.
                Apa realitas yang mampu digambarkan sesuai dengan serial itu? Faktor apa yang membuat perempuan masih tidak mampu bersaing dalam kejuaraan catur dunia? 
                Simak infografis ini, ya!
                </p>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/2.jpg")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/3.jpg")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/4.jpg")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/5.jpg")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/6.jpg")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_1/7.jpg")?>" class="img-juice">
        </div>
    </section>
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <div class="kotak">
                <img src="<?= base_url("assets/images/juice/juice_2/1.png")?>" class="img-juice-small">
                <p>[INFOGRAFIS:] <br><br>
                Donald Trump telah dibungkam oleh Twitter dan Facebook akibat kontroversi yang ia buat. 
                Mantan Presiden Amerika Serikat ini dikabarkan akan membuat platform media sosial sendiri 
                untuk dapat bersuara secara bebas di ruang publik online.

                Simak infografis di atas untuk info lengkapnya!

                </p>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_2/2.png")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_2/3.png")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_2/4.png")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_2/5.png")?>" class="img-juice">
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_2/6.png")?>" class="img-juice">
        </div>
    </section>
    <section class="vertical-scrolling">
        <iframe src="https://drive.google.com/file/d/183DV-DmOqWo-gZC55wd6ZmaOd37HDAIL/preview" class="vid-dokum"></iframe>
    </section>
    <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <div class="kotak">
                <img src="<?= base_url("assets/images/juice/juice_3/1.png")?>" class="img-juice-small">
                <p>[Infografis: GRAMMAR NAZI DI MATA PELAJAR] <br> <br>

                Istilah 'grammar nazi' mungkin tidak lagi asing di telinga kita. Banyak orang yang terganggu dengan hal tersebut,
                 tapi tidak sedikit juga yang mendukungnya. <br> <br>
                Sebenarnya, seperti apa itu 'grammar nazi' dan bagaimana para pelajar melihat seorang 'grammar nazi'? <br> <br>
                Yuk, simak infografis di atas untuk mengetahui info selengkapnya!

                </p>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <img src="<?= base_url("assets/images/juice/juice_3/2.png")?>" class="img-juice">
        </div>
    </section>
    <section class="vertical-scrolling">
        <div class="kotak-ver">
            <iframe src="https://drive.google.com/file/d/1Ey6SL_xubes7jYQbdZ0Vbd5o_7SVxl4M/preview" class="vid-dokum" style="margin: auto;"></iframe>
            <p>[UNMUTE SPESIAL: Fenomena ‘Menraktir’ dan Interpretasi saat Ulang Tahun] <br> <br>

                Setiap orang memiliki tradisi dan interpretasi yang berbeda untuk memaknai ulang tahun. <br>
                UMN JUICE bertanya kepada beberapa mahasiswa seputar ulang tahun. <br>
                 Lalu, seperti apa kira-kira perbedaan pendapat mereka? <br>
                Yuk, simak video UNMUTE di atas!
            </p>
        </div>
    </section>
</div>
<style>
  nav{
      display:none;
  }

  body
  {
    background:#f4e89e;
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
    background: transparent;
}

.horizontal-scrolling
{
  background: transparent;
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
  sectionsColor: ['transparent', 'transparent', 'transparent', 'transparent', 'transparent', 'transparent'],
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