<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec" style="padding-top:0" id="oprec-input">
    <h2>Open Recruitment</h2>
    <h5>Cek namamu di sini!</h5>
    <form method="POST" action="<?= base_url('Oprec/Result') ?>" class="commpress-form" id="form-oprec">
        <div>
            <input maxlength="5" name="nama" type="text" placeholder="Masukkan 5 Digit NIM Kamu" id="inp-nim" oninput="return numcheck()">
        </div>
        <button type="submit" value="submit" class="commpress-btn">SUBMIT</button>
    </form>
    <h6><?= form_error('nama'); ?><?= $alert; ?></h6>
    <?php
    foreach ($mhs as $row) { ?>
        <h3 class="text-red">HASIL PENCARIAN :</h3>
        <div class="commpress-card">
        <?php
        echo '<h3 class="text-nama">' . $row['Nama'] . '</h3>';
        echo '<h3 class="text-NIM">' . $row['NIM'] . '</h3>';?>
        </div>
        <div class="text-result">
        <?php
        if($row['Informasi'] == "Lolos"){
            echo '<p class="text-lower"><strong>SELAMAT! Kamu berkesempatan menjadi bagian dari solusi.</strong><span> Pastikan kamu masuk ke grup chat LINE melalui tautan atau pindai barcode di bawah ini untuk mengetahui jadwal wawancara dan informasi lainnya.<br/></span></p>';
        }else if($row['Informasi'] == "Tidak Lolos"){
            echo '<p class="text-lower"><strong>Maaf, kamu belum berhasil lolos ke tahap wawancara.</strong><span> Tetap semangat dan selalu menjadi bagian dari solusi dimanapun kamu berada. Sampai jumpa di lain kesempatan!<span></p>';
        }
    } ?>
    </div>
</div>