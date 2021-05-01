<title>Bilik Media</title>
<div class="container">
    <div class="container-bg"></div>
    <div class="com-deck" style="padding-top: 50px">
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/UMN_TV") ?>"></a>
            <img src="<?= base_url("assets/images/umntv.png")?>" class="img-media" alt="">
        </div>
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/UMN_Radio") ?>"></a>
            <img src="<?= base_url("assets/images/umnradio.png")?>" class="img-media" alt="">
        </div>
    </div>
    <div class="com-deck">
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/UMN_JUICE") ?>"></a>
            <img src="<?= base_url("assets/images/umn_juice.png")?>" class="img-media" alt="">
        </div>
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/Ultimagz") ?>"></a>
            <h2 class="item-title" style="color: red; font-size:2.3vw;">ULTIMAGZ</h2>
        </div>
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/Masterpiece") ?>"></a>
            <img src="<?= base_url("assets/images/MPC.png")?>" class="img-media" alt="">
        </div>
    </div>
</div>

<style>
    .com-item{
        text-align: center;
        width: 15vw;
        height: 15vw;
        margin: 30px;
    }
    .com-item .img-media
    {
        width: 10vw;
        height : 20vh;
        object-fit: contain;
    }
</style>