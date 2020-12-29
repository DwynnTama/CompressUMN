<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec">
    <h2>Open Recruitment</h2>
    <h1>Cek namamu di sini!</h1>
    <form method="POST" action="<?= base_url('Oprec/Result') ?>" class="compress-form" id="form1">
        <div>
            <input maxlength="6" name="nama" type="text" placeholder="Masukkan NIM..." id="num" oninput="return onlynum()">
        </div>
        <button type="submit" value="submit" class="compress-btn">SUBMIT</button>
    </form>
    <?php echo form_error('nama');
    echo $alert; ?>
    <?php
    foreach ($mhs as $row) { ?>
        <h3 class="text-red">HASIL PENCARIAN :</h3>
        <div class="compress-card">
        <?php
        echo '<h3 class="text-nama">' . $row['Nama'] . '</h3>';
        echo '<h3 class="text-NIM">' . $row['NIM'] . '</h3>';
        echo '<h3>' . $row['Informasi'] . ' </h3><p>ke tahap interview</p>';
    } ?>
        </div>
</div>