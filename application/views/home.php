<?= $nav ?>
<title>Compress UMN</title>
<div class="container">
    <div class="title">
        COMPRESS UMN</br>
        <span class="sub-title">Under Construction</span>
    </div>
</div>
<div class="content-container" id="section1">
    <span class="instruction-title">
        SCROLL BELOW
        <img src="<?= base_url("assets/images/below.png") ?>"/>
    </span>
    <div class="compress-section">
        <b></b>
        <h2>THE LATEST UPCOMING EVENT !</h2>
        <b></b>
    </div>

    <div class="compress-card-deck"> 
        <div class="compress-card">
            <p>aku adalah ...<p>
            <img src="https://wallpapercave.com/wp/wp2841697.jpg" class="compress-card-img"/>
        </div>
        <div class="compress-card">
            <p>aku adalah ...<p>
            <img src="https://wallpapercave.com/wp/wp2841697.jpg" class="compress-card-img"/>
        </div>
        <div class="compress-card">
            <p>aku adalah ...<p>
            <img src="https://wallpapercave.com/wp/wp2841697.jpg" class="compress-card-img"/>
        </div>
    </div>

    <div class="slideshow-container">

    <div class="mySlides fade">
        <img src="https://wallpaperaccess.com/full/1313700.jpg" style="width:100%;border-radius:10px">
        <div class="text">Caption 1</div>
    </div>

    <div class="mySlides fade">
        <img src="https://images.wallpapersden.com/image/download/hyper-beast-csgo-art-cool_a25sZWyUmZqaraWkpJRmbmdlrWZlbWU.jpg" style="width:100%;border-radius:10px">
        <div class="text">Caption 2</div>
    </div>

    <div class="mySlides fade">
        <img src="https://wonderfulengineering.com/wp-content/uploads/2016/01/cool-wallpaper-4.jpg" style="width:100%;border-radius:10px">
        <div class="text">Caption 3</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#11164;</a>
    <a class="next" onclick="plusSlides(1)">&#11166;</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
</div>
<div class="content-container" id="section2">
    <div class="compress-section">
        <b></b>
        <h2>CHECK US OUT !</h2>
        <b></b>
    </div>
    
    <div class="compress-carousel">
        <div class="compress-slides">
            <input type="radio" name ="radio-btn" id="btn1">
            <input type="radio" name ="radio-btn" id="btn2">
            <input type="radio" name ="radio-btn" id="btn3">

            <div class="compress-slide first">
                <img src="https://wallpaperaccess.com/full/1313700.jpg" alt="">
            </div>

            <div class="compress-slide">
                <img src="https://images.wallpapersden.com/image/download/hyper-beast-csgo-art-cool_a25sZWyUmZqaraWkpJRmbmdlrWZlbWU.jpg" alt="">
            </div>

            <div class="compress-slide">
                <img src="https://wonderfulengineering.com/wp-content/uploads/2016/01/cool-wallpaper-4.jpg" alt="">
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
    </div>
</div>
<?= $footer ?>