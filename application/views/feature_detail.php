<title>Feature Writing</title>
<div class="container-pameran" style="height:100%;flex-direction:row;justify-content: space-between;align-items: flex-start;">
    <div class="curtain-template" id="curt-left">
        <h2 class="left-feature">FEAT<br/>-URE</h2>
    </div>
    <?php 
        foreach($feature as $row){
            $judul = $row['judul_writing'];
            $caption = $row['isi_writing'];
            $pengarang = $row['nama_peserta'];
            $foto = $row['img_available'];
    ?>
    <div class="card-template" style="width: 40vw;height:auto;text-align:center;margin: 90px 50px 0 50px;display:flex;flex-direction:column">
        <span>
            <?php 
                echo '<h3 class="title-bold" style="margin:20px 20px 5px 20px;color: #f3eb9b">'.$judul.'</h3>';?>
            <?php
                echo '<h4 class="author" style="margin:5px 20px 20px 20px;color: #f3eb9b">by : '.$pengarang.'</h4>';
            ?>
        </span>
        <span>
            <?php 
                if(!is_null($foto)){?>
                    <img src="<?= base_url('assets/images/fw/'.$foto."") ?>"/>   
            <?php
                }
            ?>
        </span>
        <span>
            <?php 
                echo ' <p style="padding:0.52vw 2.6vw 0.52vw 2.6vw;text-align:justify;color: #f3eb9b;line-height:1.6">'.$caption.'</p>';
            ?>
        </span>
        <div>
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3eb9b" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
    <?php 
        }
    ?>
    <div class="curtain-template" id="curt-right">
        <h2 class="right-writting">WRI-<br/>TING</h2>
    </div>
</div>