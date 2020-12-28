<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec">
    <h2>Hasil Interview<br/>Open Recruitment</h2>
    <form method="POST" action="<?= base_url('Oprec/Result') ?>" class="compress-form">
        <div>
            <input name="nama" type="text" placeholder="Masukkan Nama atau NIM...">
        </div>
        <button type="submit" value="submit" class="compress-btn">SUBMIT</button>
    </form>
        <?php
        foreach ($mhs as $row) {?>
        <h3 class="text-red">HASIL PENCARIAN :</h3>
        <div class="compress-card">
        <?php
            echo '<h3 class="text-nama">' . $row['Nama'] . '</h3>';
            echo '<h3 class="text-NIM">' . $row['NIM'] . '</h3>';
            echo '<h5>STATUS    : ' . $row['Informasi'] . '</h5>';
        }?>
        </div>
</div>