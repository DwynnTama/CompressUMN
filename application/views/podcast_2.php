<script>
    var test = setInterval(function() {
        if (document.getElementById("form-1").style.display === "flex" || document.getElementById("form1-next").style.display === "flex") {
            var text = document.getElementById("texfinal2").textContent;
            var text1 = document.getElementById("tex2").textContent;
            var text2 = document.getElementById("tex3").textContent;
            if (text1 == "Success") {
                document.getElementById("frame2").style.display = "none";
            }
            if (text2 == "Success") {
                document.getElementById("frame3").style.display = "none";
            }
            if (text == "Success") {
                document.getElementById("framefinal2").style.display = "none";
            }
            if (text1 == "Success" && text2 == "Success" && text == "Success") {
                console.log("berhasil berhasil hore");
                document.getElementById("butt2").disabled = false;
                clearInterval("test");
            }
            console.log("ga ketemu woi wat the hek");
            if (text1 != "Success") {
                $.getJSON('https://script.google.com/macros/s/AKfycbxXHsmC_wYyK42tkcOqTXVQP9UGT4CKYTh2VEE9TbvA-ScH9wEglSp4dw/exec?prefix=?', null, function(results) {
                    $('#tex2').html(results);
                });
            }
            if (text2 != "Success") {
                $.getJSON('https://script.google.com/macros/s/AKfycbxvW7YVE9lwArbs47mGmV3JZhxUITiVDXTp8tQUVpz2XD0-TjrLoWVISg/exec?prefix=?', null, function(results) {
                    $('#tex3').html(results);
                });
            }
            if (text != "Success") {
                $.getJSON('https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec?prefix=?', null, function(results) {
                    $('#texfinal2').html(results);
                });
            }
        } 
    }, 2000);

    function ddd() {
        document.getElementById("form-main-1").style.display = "none";
        document.getElementById("form1-next").style.display = "flex";
        document.getElementById("form1-btn-next").style.display = "none";
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Podcast</title>
<div class="event-select oprec form-lomba" style="height:105%;" id="oprec-input">
    <div style="margin-top:15px">
        <form action="<?= base_url('Lomba/registration_podcast2'); ?>" method="POST" class="commpress-form form-center" id="form-1">
            <div style="display:flex;" id="form-main-1">
                <div class="commpress-card commpress-verticer" style="margin-bottom:10px;width:350px">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%" /><br />
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%" /><br />
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%" /><br />
                    <?= form_error('nim'); ?>

                    <iframe id="frame1" src="https://script.google.com/macros/s/AKfycbz7BgMxoU9nrHX7WETQ6CDBGh1n5y-9jLw4c1z_sJwBPVm-eXhVsULXcg/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex1" style="margin-bottom:0">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer" style="margin-bottom:10px;width:350px">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%" /><br />
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%" /><br />
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%" /><br />
                    <?= form_error('nim'); ?>

                    <iframe id="frame1" src="https://script.google.com/macros/s/AKfycbz7BgMxoU9nrHX7WETQ6CDBGh1n5y-9jLw4c1z_sJwBPVm-eXhVsULXcg/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex1" style="margin-bottom:0">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form1-next">
                <div class="commpress-card commpress-verticer" style="width:500px;">
                    <h3>Nama Podcast</h3>
                    <input type="text" name="podcast" style="width:100%" /><br />
                    <div style="display:flex">
                        <div style="display:flex;flex-direction:column;">
                            <h3>ID LINE</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="id_line" style="width:auto;padding:10px" /><br />
                            <?= form_error('id_line'); ?>
                        </div>
                        <div style="display:flex;flex-direction:column;">
                            <h3>No. Telp</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="no_telp" style="width:auto" /><br />
                            <?= form_error('no_telp'); ?>
                        </div>
                    </div>
                    <h3>Email</h3>
                    <h7>(Perwakilan)</h7>
                    <input type="email" name="email" style="width:100%" /><br />
                    <?= form_error('email'); ?>
                    <h7>Upload bukti pembayaran di bawah ini.</h7>
                    <iframe id="framefinal1" src="https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="texfinal1" style="margin-bottom:0">Please submit your file to finish this form</h4>
                    <button id="butt1" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            <span class="commpress-rad" onclick="ddd()" id="form1-btn-next">NEXT</span>
        </form>
    </div>
</div>