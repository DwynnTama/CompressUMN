<?php error_reporting(0); ?>
<title>Podcast</title>
<div class="event-select oprec form-lomba" style="height:105%;" id="oprec-input">
    <div style="margin-top:15px">
        <form action="<?= base_url('Lomba/registration_podcast'); ?>" method="POST" class="commpress-form form-center" id="form-1">
            <div style="display:flex;" id="form-main-1">
                <div class="commpress-card commpress-verticer" style="margin-bottom:10px;width:350px">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%" required /><br />
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%" required/><br />
                    <?= form_error('nim'); ?>
                    <h3>Angkatan</h3>
                    <input type="text" name="kampus" style="width:100%" required /><br />
                    <h3>Link video (link gdrive atau youtube)</h3>
                    <input type="text" name="link" style="width:100%" required /><br />
                    <?= form_error('link'); ?>
                    <button id="butt1" type="submit">SUBMIT</button>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>