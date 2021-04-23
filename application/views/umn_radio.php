<div id="fullpage">
    <section class="vertical-scrolling">
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

    .horizontal-scrolling{
        background-color: #333452;
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