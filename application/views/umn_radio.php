<title>UMN Radio</title>
<div id="fullpage">
    <section class="vertical-scrolling">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
        <div class="horizontal-scrolling">
        <div class="grinding">
            <div>
              <img src="<?= base_url("assets/images/biru/kiri.png")?>" style="width: 100%; height: auto; margin-top: -2vw;" alt="">
              <img src="<?= base_url("assets/images/biru/cacing.png")?>" style="width: 50%; height: auto; margin-top: 20vh; margin-left: 15vw; transform: rotateX(180deg); transform: rotateY(180deg);" alt="">
            </div>

            <img src="<?= base_url("assets/images/umnradio.png")?>" class="img-juice-small" alt="">
            
            <div style="height: 100vh;">
              <img src="<?= base_url("assets/images/biru/cacing.png")?>" class="cacing" alt="">
              <img src="<?= base_url("assets/images/biru/kanan.png")?>" style="width: 100%; height: auto; transform: rotateX(180deg); margin-top: 30vh;" alt="">
            </div>
          </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <h1>[U-PODCAST]</h1>
                <marquee scrollamount="10"><h1>CAPTAIN VINCENT DITOLAK KE ABU DHABI⁉️✈️ - TRAVELOGY with VINCENT RADITYA#14</h1></marquee>
                <audio controls="controls">
                    <source src="https://docs.google.com/uc?export=download&id=1WbVPyLM1n_Qsr9BzqwUSSQ5aGSSNiH7n">
                </audio>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <h1>[U-PODCAST]</h1>
                <marquee scrollamount="10"><h1>DIPHA BARUS IS NOT YOUR AVERAGE DJ - BEYOND CHARTTOPPERS with Justyne #10</h1></marquee>
                <audio controls="controls">
                    <source src="https://docs.google.com/uc?export=download&id=1GVvNRHVt92FoE4QKZw5HGWCHjcE0dQlQ">
                </audio>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <h1>[U-PODCAST]</h1>
                <marquee scrollamount="10"><h1>Ganteng dan Karismatik, tapi Tidak Rematik - #SERSAN with Marlo Ernesto #13</h1></marquee>
                <audio controls="controls">
                    <source src="https://docs.google.com/uc?export=download&id=1Jq4u34frM6LGqKNTQW4HXSzH01n2CZV-">
                </audio>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <h1>[U-PODCAST]</h1>
                <marquee scrollamount="10"><h1>MUSIK, SINEMATIK, DAN ESTETIK - MUSIKALITAS with LUTHFI AULIA #17</h1></marquee>
                <audio controls="controls">
                    <source src="https://docs.google.com/uc?export=download&id=1xJSG4BXjvRTtasrhUUrNftbLFISLBUwc">
                </audio>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <h1>[U-PODCAST]</h1>
                <marquee scrollamount="10"><h1>Once a Princess, Now a Queen! - #SODA with Cinta Laura Kiehl #10</h1></marquee>
                <audio controls="controls">
                    <source src="https://docs.google.com/uc?export=download&id=1rizG7KrqqxzuWol-4wW74RtfmjRIyx2_">
                </audio>
            </div>
        </div>
    </section>
</div>
<style>
    section { 
        text-align: center;
    }

.cacing
  {
    width: 50%; 
    height: auto; 
    margin-top: 15vh; 
    transform: translateX(-12vw) rotateX(180deg);
  }

  .grinding
  {
    display: grid;
    grid-template-columns: 15% 70% 15%;
    align-items: center;
    grid-gap: 1px;
  }

    .img-juice-small
    {
        width: 43.5vw;
        height: 52.28vh;
        object-fit: scale-down;
        border-radius: 5px;
        margin-left: 20%;
    }

    #fp-nav ul li a span, 
    .fp-slidesNav ul li a span {
        background: #f4eb9b;
        width: 8px;
        height: 8px;
        margin: -4px 0 0 -4px;
    }

    #fp-nav ul li a.active span, 
    .fp-slidesNav ul li a.active span, 
    #fp-nav ul li:hover a.active span, 
    .fp-slidesNav ul li:hover a.active span {
        width: 16px;
        height: 16px;
        margin: -8px 0 0 -8px;
        background: #f4eb9b;
        box-sizing: border-box;
    }

    .fp-slidesNav .active{
        background: #333452;
    }

    .frame marquee h1{
        color: #333452
    }

    .frame marquee{
        padding: 5px 0 5px 0;
        background-color: #f4eb9b;
        width: 50%;
        margin: 20px;
        border-radius: 20px;
    }

    .frame h1{
        text-align: center;
        width: 70%;
        color: #f4eb9b;
        font-family: "Barlow-bold";
        letter-spacing: 2px;
    }

    .frame{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .horizontal-scrolling:nth-child(1)
    {
        background-color: transparent;
    }

    .horizontal-scrolling{
        background-color: #333452;
    }
    .vertical-scrolling
    {
        background: #f4e89e;
    }
</style>
<script>
    $('#fullpage').fullpage({
        sectionSelector: '.vertical-scrolling',
        slideSelector: '.horizontal-scrolling',
        slidesNavigation: true,
        controlArrows: false,
        anchors: ['story1', 'story2', 'story3', 'story4', 'story5', 'story6', 'story7', 'story8', 'story9', 'story10'],
    });
    
</script>