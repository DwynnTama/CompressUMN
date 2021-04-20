<script>
    var test = setInterval(function() {
        if (document.getElementById("form-main-1").style.display === "flex" || document.getElementById("form1-next").style.display === "flex") {
            var text1 = document.getElementById("tex1").textContent;
            if (text1 == "Success") {
                console.log("berhasil berhasil hore");
                document.getElementById("butt1").disabled = false;
                document.getElementById("frame1").style.display = "none";
                clearInterval("test");
            }
            console.log("ga ketemu woi wat the hek");
            if (text1 != "Success") {
                $.getJSON('https://script.google.com/macros/s/AKfycbyTpYcmRms65x5HHJhScjnhfJtoNQK6-oUQ8Ghar-1P6UpS9VjlXj6UD5_DJsLoJTik/exec?prefix=?', null, function(results) {
                    $('#tex1').html(results);
                });
            }
        }
    }, 2000);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Podcast</title>
<div class="event-select oprec form-lomba" style="height:105%;" id="oprec-input">
    <div style="margin-top:15px">
        <form action="<?= base_url('Event/foto_tunggal'); ?>" method="POST" class="commpress-form form-center" id="form-1">
            <div style="display:flex;" id="form-main-1">
                <div class="commpress-card commpress-verticer" style="margin-bottom:10px;width:350px">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%" required /><br />
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%" required/><br />
                    <?= form_error('nim'); ?>
                    <h3>Angkatan</h3>
                    <input type="text" name="angkatan" style="width:100%" required /><br />
                    <?= form_error('angkatan'); ?>
                    <iframe id="frame1" src="https://script.google.com/macros/s/AKfycbyTpYcmRms65x5HHJhScjnhfJtoNQK6-oUQ8Ghar-1P6UpS9VjlXj6UD5_DJsLoJTik/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex1" style="margin-bottom:0">Please submit your file to finish this form</h4>
                    <button id="butt1" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>