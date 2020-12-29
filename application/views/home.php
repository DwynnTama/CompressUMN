<?= $nav ?>
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
<div class="content-container" id="section2">
    <div class="compress-section">
        <b></b>
        <h2>CHECK US OUT !</h2>
        <b></b>
    </div>
    <iframe class="compress-vid" src="https://www.youtube.com/embed/enbNUqSZdD8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<?= $footer ?>