<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec">
    <h2>Open Recruitment</h2>
    <h5>Cek namamu di sini!</h5>
    <form method="POST" action="<?= base_url('Oprec/Result') ?>" class="compress-form" id="form-oprec">
        <div>
            <input maxlength="5" name="nama" type="text" placeholder="Masukkan 5-Digits NIM Kamu" id="inp-nim" oninput="return numcheck()">
        </div>
        <button type="submit" value="submit" class="compress-btn">SUBMIT</button>
    </form>
    <h6><?= form_error('nama'); ?><?= $alert; ?></h6>
    <?php
    foreach ($mhs as $row) { ?>
        <h3 class="text-red">HASIL PENCARIAN :</h3>
        <div class="compress-card">
        <?php
        echo '<h3 class="text-nama">' . $row['Nama'] . '</h3>';
        echo '<h3 class="text-NIM">' . $row['NIM'] . '</h3>';
        echo '<p class="text-lower"><strong>' . $row['Informasi'] . '</strong> ke tahap interview</p>';
    } ?>
        </div>
</div>