<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec">
    <?php
    foreach ($mhs as $row) { ?>
        <span class="text-red">HASIL PENCARIAN :</span>
        <div class="commpress-card">
        <?php
        echo '<h3 class="text-nama">' . $row['Nama'] . '</h3>';
        echo '<h3 class="text-NIM">' . $row['NIM'] . '</h3>';?>
        </div>
        <div class="text-result">
        <?php
        if($row['Informasi'] == "Lolos"){
            echo '<p class="text-lower"><strong>SELAMAT! Kamu berkesempatan menjadi bagian dari solusi.</strong><span> Pastikan kamu masuk ke grup chat LINE melalui tautan di bawah ini untuk mengetahui jadwal wawancaramu dan informasi lainnya ya<br/></span></p>';
            if($row['Divisi'] == "Bazaar" || $row['Divisi'] == "Fresh Money" || $row['Divisi'] == "Media Relation" || $row['Divisi'] == "Sponsor" || $row['Divisi'] == "Visual")
            { ?>
                <img src="<?=base_url("assets//images//Day1.png")?>">;<br>
                <p class="link"> atau klik tautan di bawah ini <br>
                <a href="http://tiny.cc/COMMPRESS2021Day1">http://tiny.cc/COMMPRESS2021Day1</a> </p>
                <?php
            }
            if($row['Divisi'] == "Lomba" || $row['Divisi'] == "Acara")
            { ?>
                <img src="<?=base_url("assets//images//Day2.png")?>">;
                <p class="link"> atau klik tautan di bawah ini <br>
                <a href="http://tiny.cc/COMMPRESS2021Day2">http://tiny.cc/COMMPRESS2021Day2</a> </p>
                <?php
            }
            if($row['Divisi'] == "Keamanan" || $row['Divisi'] == "Dokumentasi Foto")
            { ?>
                <img src="<?=base_url("assets//images//Day3.png")?>">;
                <p class="link"> atau klik tautan di bawah ini <br>
                <a href="http://tiny.cc/COMMPRESS2021Day3">http://tiny.cc/COMMPRESS2021Day3</a> </p>
                <?php
            }
            if($row['Divisi'] == "Publikasi" || $row['Divisi'] == "Perlengkapan")
            { ?>
                <img src="<?=base_url("assets//images//Day4.png")?>">;
                <p class="link"> atau klik tautan di bawah ini <br>
                <a href="http://tiny.cc/COMMPRESS2021Day4">http://tiny.cc/COMMPRESS2021Day4</a> </p>
                <?php
            }
        }else if($row['Informasi'] == "Tidak Lolos"){
            echo '<p class="text-lower"><strong>Maaf, kamu belum berhasil lolos ke tahap wawancara.</strong><span> Tetap semangat dan selalu menjadi bagian dari solusi dimanapun kamu berada. Sampai jumpa di lain kesempatan!<span></p>';
        }
    } ?>
    </div>
</div>