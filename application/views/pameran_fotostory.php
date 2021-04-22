<div id="fullpage">
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
            <h2>Charlenne Kayla Roeslie<h2>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame"> 
                <div class="inframe">
                    <p>Semakin banyak manusia, semakin banyak pula hunian yang dibutuhkan. Hal ini seolah dikokohkan 
        oleh banyaknya proyek hunian yang sedang berjalan di Indonesia, terutama di kota besar seperti 
        Jakarta dan sekitarnya. Di antara beragam tipe hunian, perumahan bertipe klaster masih menjadi 
        primadona di kalangan menengah ke atas. Pemukiman premium dan ekslusif ini dinilai lebih nyaman, 
        aman, dan berlimpah fasilitas dibandingkan pemukiman nonklaster.
        Rumah yang mampu memberikan kenyamanan bagi penghuninya tentu tidak dibangun dengan 
        seketika. Di baliknya, ada peran para pekerja konstruksi yang bekerja siang-malam, memastikan rumah 
        dapat dihuni tepat waktu. Tak jarang, para pekerja konstruksi adalah perantau dari daerah dan hidup 
        dalam kondisi yang kontras dengan apa yang mereka bangun.
        Kerap kali, profesi tenaga kerja konstruksi dipandang sebelah mata oleh khalayak luas. Mereka 
        dianggap sekadar “kuli bangunan”, melakukan pekerjaan kotor agar kita dapat menikmati hasilnya. 
        Namun, mereka tetaplah manusia yang memiliki asa dan rasa, terkadang rindu rumah dan keluarga, 
        dan harus membangun suasana “rumah” di perantauan, di rumah bedeng yang kondisinya jauh 
        berbeda dengan rumah-rumah yang mereka bangun.</p>
                </div>
            </div>
        </div>
        <div class="horizontal-scrolling">
            <div class="frame">
                <img src="<?= base_url("assets/images/Foto 1.jpg")?>" style="width: 500px;height:auto"/>
            </div>
        </div>
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>

  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>

  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>  
  </section>

  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>

  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
  
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
  
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
  
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
  
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
  
  <section class="vertical-scrolling">
        <div class="horizontal-scrolling">
        </div>
        <div class="horizontal-scrolling">
        </div>
  </section>
</div>

<style>
    .horizontal-scrolling{
        text-align: center;
    }

    .horizontal-scrolling h2{
        font-family: "Anastik";
        letter-spacing: 2px;
        font-size: 50px;
    }

    .frame{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 100%;
    }

    .inframe{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 500px;
    }

    .inframe p{
        font-family: "Avenir-light";
        text-align: justify;
    }

    a{
        margin:0;
        border-radius: 50%;
    }

</style>

<script>
    $('#fullpage').fullpage({
        sectionsColor: ['#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F','#B8AE9C', '#348899', '#F2AE72', '#5C832F', '#B8B89F',],
        sectionSelector: '.vertical-scrolling',
        slideSelector: '.horizontal-scrolling',
        navigation: true,
        slidesNavigation: true,
        controlArrows: false,
        anchors: ['story1', 'story2', 'story3', 'story4', 'story5', 'story6', 'story7', 'story8', 'story9', 'story10'],
    });
    
</script>