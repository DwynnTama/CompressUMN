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
    <div class="compress-section">
        <b></b>
        <h2>UPCOMING EVENT</h2>
        <b></b>
    </div>
    <div class="compress-carousel">
        <div class="compress-slides">
            <input type="radio" name ="radio-btn" id="btn1" onclick="fadeInbtn1()">
            <input type="radio" name ="radio-btn" id="btn2" onclick="fadeInbtn2()">
            <input type="radio" name ="radio-btn" id="btn3" onclick="fadeInbtn3()">

            <div class="compress-slide first">
                <img src="<?= base_url("assets/images/pic1.jpeg") ?>" alt="Image 1">
            </div>

            <div class="compress-slide">
                <img src="<?= base_url("assets/images/pic2.jpeg") ?>" alt="Image 2">
            </div>

            <div class="compress-slide">
                <img src="<?= base_url("assets/images/pic3.jpeg") ?>" alt="Image 3">
            </div>

            <div class="compress-btn-auto">
                <div class="btn-auto1"></div>
                <div class="btn-auto2"></div>
                <div class="btn-auto3"></div>
            </div>
        </div>
        <div class="compress-btn-manual">
            <label for="btn1" class="btn-manual"></label>
            <label for="btn2" class="btn-manual"></label>
            <label for="btn3" class="btn-manual"></label>
        </div>
        <div class="caption">
            <p class="text" id ="text1">Bazaar COMMPRESS 2020</p>
            <p class="text" id ="text2">Foto Bersama Panitia COMMPRESS 2020</p>
            <p class="text" id ="text3">Malam Puncak COMM Keseruan Young Journalist Award (YJA)</p>
        </div>
    </div>
</div>
<div class="content-container" id="section2">
    <div class="compress-section">
        <b></b>
        <h2>CHECK US OUT !</h2>
        <b></b>
    </div>
    <iframe class="compress-vid" src="https://www.youtube.com/embed/enbNUqSZdD8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?= $footer ?>