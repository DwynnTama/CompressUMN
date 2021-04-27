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
            <h2 class="item-title">UMN <br/>RADIO</h2>
        </div>
    </div>
    <div class="com-deck">
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/UMN_JUICE") ?>"></a>
            <img src="<?= base_url("assets/images/umn_juice.png")?>" class="img-media" alt="">
        </div>
        <div class="com-item">
            <a class="com-link" href="<?= base_url("Pameran/Ultimagz") ?>"></a>
            <h2 class="item-title" style="color: red;">ULTIMAGZ</h2>
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
    .img-media
    {
        width: 20.5vw;
        height: 20.28vh;
        object-fit: scale-down;
    }
</style>