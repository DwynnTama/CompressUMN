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
            echo '<p class="text-lower"><strong>SELAMAT! Kamu berkesempatan menjadi bagian dari solusi.</strong><span> Pastikan kamu masuk ke grup chat LINE melalui tautan di bawah ini untuk mengetahui jadwal wawancaramu dan informasi lainnya ya<br/></span></p><img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Black_photo.jpg"/>';
        }else if($row['Informasi'] == "Tidak Lolos"){
            echo '<p class="text-lower"><strong>Maaf, kamu belum berhasil lolos ke tahap wawancara.</strong><span> Tetap semangat dan selalu menjadi bagian dari solusi dimanapun kamu berada. Sampai jumpa di lain kesempatan!<span></p>';
        }
    } ?>
    </div>
</div>