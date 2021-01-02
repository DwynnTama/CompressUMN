<?= $nav ?>
    <script src="<?= base_url("assets/js/slide.js") ?>"></script>
<title>COMMPRESS UMN</title>
<div class="container">
    <div class="container-bg"></div>
    <div class="title">
        COMMPRESS UMN</br>
        <span class="sub-title">Coming Soon</span>
    </div>
</div>
<div class="content-container" id="section1">
    <span class="instruction-title">
        SCROLL BELOW
        <img src="<?= base_url("assets/images/below.png") ?>"/>
    </span>
    <div class="commpress-section">
        <b></b>
        <h2>EVENTS</h2>
        <b></b>
    </div>
    <div class="commpress-carousel">
        <div class="commpress-slides">
            <input type="radio" name ="radio-btn" id="btn1" onclick="fadeInbtn1()">
            <input type="radio" name ="radio-btn" id="btn2" onclick="fadeInbtn2()">
            <input type="radio" name ="radio-btn" id="btn3" onclick="fadeInbtn3()">
            <input type="radio" name ="radio-btn" id="btn4" onclick="fadeInbtn4()">
            <input type="radio" name ="radio-btn" id="btn5" onclick="fadeInbtn5()">
            <input type="radio" name ="radio-btn" id="btn6" onclick="fadeInbtn6()">

            <div class="commpress-slide first">
                <img src="<?= base_url("assets/images/pic5.jpeg") ?>" alt="Image 1">
            </div>

            <div class="commpress-slide">
                <img src="<?= base_url("assets/images/pic1.jpeg") ?>" alt="Image 2">
            </div>

            <div class="commpress-slide">
                <img src="<?= base_url("assets/images/pic4.jpeg") ?>" alt="Image 3">
            </div>

            <div class="commpress-slide">
                <img src="<?= base_url("assets/images/pic3.jpeg") ?>" alt="Image 4">
            </div>

            <div class="commpress-slide">
                <img src="<?= base_url("assets/images/pic6.jpeg") ?>" alt="Image 5">
            </div>

            <div class="commpress-slide">
                <img src="<?= base_url("assets/images/pic2.jpeg") ?>" alt="Image 6">
            </div>

            <div class="commpress-btn-auto">
                <div class="btn-auto1"></div>
                <div class="btn-auto2"></div>
                <div class="btn-auto3"></div>
                <div class="btn-auto4"></div>
                <div class="btn-auto5"></div>
                <div class="btn-auto6"></div>
            </div>
        </div>
        <div class="commpress-btn-manual">
            <label for="btn1" class="btn-manual"></label>
            <label for="btn2" class="btn-manual"></label>
            <label for="btn3" class="btn-manual"></label>
            <label for="btn4" class="btn-manual"></label>
            <label for="btn5" class="btn-manual"></label>
            <label for="btn6" class="btn-manual"></label>
        </div>
        <div class="caption">
            <p class="text" id ="text1">Pengunjung dapat melihat berbagai karya foto yang dipamerkan di Ruang Indiependen COMMPRESS 2020</p>
            <p class="text" id ="text2">Pressmart (bazaar COMMPRESS) 2020 diadakan secara offline di Gedung D, Kampus UMN</p>
            <p class="text" id ="text3">Selain para tenant, penampilan dari Unit Kegiatan Mahasiswa (UKM) Mufomic juga ikut memeriahkan Pressmart 2020</p>
            <p class="text" id ="text4">Keseruan Malam Puncak COMMPRESS yang disebut <br> Young Journalist Award (YJA) 2020</p>
            <p class="text" id ="text5">Penampilan dari Club Dangdut Racun (CDR) melengkapi Young Journalist Award (YJA) COMMPRESS 2020</p>
            <p class="text" id ="text6">Foto bersama panitia COMMPRESS 2020</p>
        </div>
    </div>
</div>
<div class="content-container" id="section2">
    <div class="commpress-section">
        <b></b>
        <h2>CHECK US OUT!</h2>
        <b></b>
    </div>
    <iframe class="commpress-vid" src="<?= base_url("assets/video/VIDEO.mp4")?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?= $footer ?>