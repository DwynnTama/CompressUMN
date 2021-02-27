<script>
    var test = setInterval(function()
    {
        if(document.getElementById("form-main-1").style.display === "flex" || document.getElementById("form1-next").style.display === "flex")
        {
            var text =  document.getElementById("texfinal1").textContent;
            var text1 = document.getElementById("tex1").textContent;
            if(text1 == "Success")
            {
                document.getElementById("frame1").style.display = "none";
            }
            if(text == "Success")
            {
                document.getElementById("framefinal1").style.display = "none";
            }
            if(text == "Success" && text1 == "Success")
            {
                console.log("berhasil berhasil hore");
                document.getElementById("butt1").disabled = false;
                clearInterval("test");
            }
            console.log("ga ketemu woi wat the hek");
            if(text1 != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbz7BgMxoU9nrHX7WETQ6CDBGh1n5y-9jLw4c1z_sJwBPVm-eXhVsULXcg/exec?prefix=?', null, function (results) {
                $('#tex1').html(results);
                });
            }
            if(text != "Success")
            { 
                $.getJSON('https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec?prefix=?', null, function (results) {
                $('#texfinal1').html(results);
                });
            }           
               
        
        }
        else if(document.getElementById("form-2").style.display === "flex" || document.getElementById("form2-next").style.display === "flex")
        {
            var text =  document.getElementById("texfinal2").textContent;
            var text1 = document.getElementById("tex2").textContent;
            var text2 = document.getElementById("tex3").textContent;
            if(text1 == "Success")
            {
                document.getElementById("frame2").style.display = "none";
            }
            if(text2 == "Success")
            {
                document.getElementById("frame3").style.display = "none";
            }
            if(text == "Success")
            {
                document.getElementById("framefinal2").style.display = "none";
            }
            if(text1 == "Success" && text2 == "Success" && text == "Success")
            {
                console.log("berhasil berhasil hore");
                document.getElementById("butt2").disabled = false;
                clearInterval("test");
            }
            console.log("ga ketemu woi wat the hek");
            if(text1 != "Success")
            {
                    $.getJSON('https://script.google.com/macros/s/AKfycbxXHsmC_wYyK42tkcOqTXVQP9UGT4CKYTh2VEE9TbvA-ScH9wEglSp4dw/exec?prefix=?', null, function (results) {
                    $('#tex2').html(results);
                    });
            }
            if(text2 != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbxvW7YVE9lwArbs47mGmV3JZhxUITiVDXTp8tQUVpz2XD0-TjrLoWVISg/exec?prefix=?', null, function (results) {
                $('#tex3').html(results);
                });
            }
            if(text != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec?prefix=?', null, function (results) {
                $('#texfinal2').html(results);
                });
            }
        }
        else if(document.getElementById("form-3").style.display === "flex" || document.getElementById("form3-next").style.display === "flex")
        {
            var text  = document.getElementById("texfinal3").textContent;
            var text1 = document.getElementById("tex4").textContent;
            var text2 = document.getElementById("tex5").textContent;
            var text3 = document.getElementById("tex6").textContent;
            if(text1 == "Success")
            {
                document.getElementById("frame4").style.display = "none";
            }
            if(text2 == "Success")
            {
                document.getElementById("frame5").style.display = "none";
            }
            if(text3 == "Success")
            {
                document.getElementById("frame6").style.display = "none";
            }
            if(text == "Success")
            {
                document.getElementById("framefinal3").style.display = "none";
            }
            if(text1 == "Success" && text2 == "Success" && text3 == "Success" && text == "Success")
            {
                console.log("berhasil berhasil hore");
                document.getElementById("butt3").disabled = false;
            }

            console.log("ga ketemu woi wat the hek");
            if(text1 != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbxwZz5Z5aggc7x9A2ckKlxPi_gXT_8tjlUPcgzp6Q7_co46j9dxlJcGMg/exec?prefix=?', null, function (results) {
                $('#tex4').html(results);
                });
            }
            if(text2 != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbyFk0TTRMDBMI8_STIiIZfI0s8035Mucutcz13sNS2ELzrWKOtpsvJ_/exec?prefix=?', null, function (results) {
                $('#tex5').html(results);
                });
            }
            if(text3 != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbwCiTBPkuO-GUfzKhR1FPckCcwKnip5blcqkHvOjAbyMMIZwmfuqoGSvQ/exec?prefix=?', null, function (results) {
                $('#tex6').html(results);
                });
            }
            if(text != "Success")
            {
                $.getJSON('https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec?prefix=?', null, function (results) {
                $('#texfinal3').html(results);
                });
            }
        }
    },2000);
    function aaa(){
        document.getElementById("form-1").reset();
        document.getElementById("form-2").reset();
        document.getElementById("form-3").reset();
        document.getElementById("form-1").style.display="flex";
        document.getElementById("form-2").style.display="none";
        document.getElementById("form-3").style.display="none";
        document.getElementById("form-main-1").style.display="flex";
        document.getElementById("form-main-2").style.display="none";
        document.getElementById("form-main-3").style.display="none";
        document.getElementById("form1-next").style.display="none";
        document.getElementById("form2-next").style.display="none";
        document.getElementById("form3-next").style.display="none";
        document.getElementById("form1-btn-next").style.display="block";
    }
    function bbb(){
        document.getElementById("form-1").reset();
        document.getElementById("form-2").reset();
        document.getElementById("form-3").reset();
        document.getElementById("form-1").style.display="none";
        document.getElementById("form-2").style.display="flex";
        document.getElementById("form-3").style.display="none";
        document.getElementById("form-main-1").style.display="none";
        document.getElementById("form-main-2").style.display="flex";
        document.getElementById("form-main-3").style.display="none";
        document.getElementById("form1-next").style.display="none";
        document.getElementById("form2-next").style.display="none";
        document.getElementById("form3-next").style.display="none";
        document.getElementById("form2-btn-next").style.display="block";
    }
    function ccc(){
        document.getElementById("form-1").reset();
        document.getElementById("form-2").reset();
        document.getElementById("form-3").reset();
        document.getElementById("form-1").style.display="none";
        document.getElementById("form-2").style.display="none";
        document.getElementById("form-3").style.display="flex";
        document.getElementById("form-main-1").style.display="none";
        document.getElementById("form-main-2").style.display="none";
        document.getElementById("form-main-3").style.display="flex";
        document.getElementById("form1-next").style.display="none";
        document.getElementById("form2-next").style.display="none";
        document.getElementById("form3-next").style.display="none";
        document.getElementById("form3-btn-next").style.display="block";
    }
    function ddd(){
        document.getElementById("form-main-1").style.display="none";
        document.getElementById("form1-next").style.display="flex";
        document.getElementById("form1-btn-next").style.display="none";
    }
    function eee(){
        document.getElementById("form-main-2").style.display="none";
        document.getElementById("form2-next").style.display="flex";
        document.getElementById("form2-btn-next").style.display="none";
    }
    function fff(){
        document.getElementById("form-main-3").style.display="none";
        document.getElementById("form3-next").style.display="flex";
        document.getElementById("form3-btn-next").style.display="none";
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Podcast</title>
<div class="event-select oprec form-lomba" style="height:100%;" id="oprec-input">
    <div id="form-lomba" style="transform:scale(0.7)">
        <h3>JUMLAH ANGGOTA KELOMPOK</h3>
        <div style="padding: 10px">
            <span class="commpress-rad" onclick="aaa()">1</span>
            <span class="commpress-rad" onclick="bbb()">2</span>
            <span class="commpress-rad" onclick="ccc()">3</span>
        </div>
        <form action="<?= base_url('Lomba/registration_podcast'); ?>" method="POST" class="commpress-form form-center" id="form-1">
            <div style="display:flex;" id="form-main-1">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    
                    <iframe id="frame1" src="https://script.google.com/macros/s/AKfycbz7BgMxoU9nrHX7WETQ6CDBGh1n5y-9jLw4c1z_sJwBPVm-eXhVsULXcg/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex1">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form1-next">
                <div class="commpress-card commpress-verticer" style="width:500px;">
                    <h3>Nama Podcast</h3>
                    <input type="text" name="podcast" style="width:100%"/><br/>
                    <div style="display:flex">
                        <div style="display:flex;flex-direction:column;">
                            <h3>ID LINE</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="id_line" style="width:auto;padding:10px"/><br/>
                            <?= form_error('id_line'); ?>
                        </div>
                        <div style="display:flex;flex-direction:column;">
                            <h3>No. Telp</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="no_telp" style="width:auto"/><br/>
                            <?= form_error('no_telp'); ?>
                        </div>
                    </div>
                    <h3>Email</h3>
                    <h7>(Perwakilan)</h7>
                    <input type="email" name="email" style="width:100%"/><br/>
                    <?= form_error('email'); ?>
                    <h7>Upload bukti pembayaran di bawah ini.</h7>
                    <iframe id="framefinal1" src="https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="texfinal1">Please submit your file to finish this form</h4>
                    <button id="butt1" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            <span class="commpress-rad" onclick="ddd()" id="form1-btn-next">NEXT</span>
        </form>
        <form action="<?= base_url('Lomba/registration_podcast'); ?>" method="POST" class="commpress-form form-center" id="form-2" style="display:none;">
            <div style="display:flex" id="form-main-2">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <iframe id="frame2" src="https://script.google.com/macros/s/AKfycbxXHsmC_wYyK42tkcOqTXVQP9UGT4CKYTh2VEE9TbvA-ScH9wEglSp4dw/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex2">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <iframe id="frame3" src="https://script.google.com/macros/s/AKfycbxvW7YVE9lwArbs47mGmV3JZhxUITiVDXTp8tQUVpz2XD0-TjrLoWVISg/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex3">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form2-next">
                <div class="commpress-card commpress-verticer" style="width:500px;">
                    <h3>Nama Podcast</h3>
                    <input type="text" name="podcast" style="width:100%"/><br/>
                    <div style="display:flex">
                        <div style="display:flex;flex-direction:column;">
                            <h3>ID LINE</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="id_line" style="width:auto;padding:10px"/><br/>
                            <?= form_error('id_line'); ?>
                        </div>
                        <div style="display:flex;flex-direction:column;">
                            <h3>No. Telp</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="no_telp" style="width:auto"/><br/>
                            <?= form_error('no_telp'); ?>
                        </div>
                    </div>
                    <h3>Email</h3>
                    <h7>(Perwakilan)</h7>
                    <input type="email" name="email" style="width:100%"/><br/>
                    <?= form_error('email'); ?>
                    <iframe id="framefinal2" src="https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="texfinal2">Please submit your file to finish this form</h4>
                    <button id="butt2" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            <span class="commpress-rad" onclick="eee()" id="form2-btn-next">NEXT</span>
        </form>
        <form action="<?= base_url('Lomba/registration_podcast'); ?>" method="POST" class="commpress-form form-center" id="form-3" style="display:none;">
            <div style="display:flex" id="form-main-3">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <iframe id="frame4" src="https://script.google.com/macros/s/AKfycbxwZz5Z5aggc7x9A2ckKlxPi_gXT_8tjlUPcgzp6Q7_co46j9dxlJcGMg/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex4">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <iframe id="frame5" src="https://script.google.com/macros/s/AKfycbyFk0TTRMDBMI8_STIiIZfI0s8035Mucutcz13sNS2ELzrWKOtpsvJ_/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex5">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama Lengkap</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <h3>NIM</h3>
                    <h7>(Khusus Mahasiswa UMN)</h7>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <iframe id="frame6" src="https://script.google.com/macros/s/AKfycbwCiTBPkuO-GUfzKhR1FPckCcwKnip5blcqkHvOjAbyMMIZwmfuqoGSvQ/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex6">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form3-next">
                <div class="commpress-card commpress-verticer" style="width:500px;">
                    <h3>Nama Podcast</h3>
                    <input type="text" name="podcast" style="width:100%"/><br/>
                    <div style="display:flex">
                        <div style="display:flex;flex-direction:column;">
                            <h3>ID LINE</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="id_line" style="width:auto;padding:10px"/><br/>
                            <?= form_error('id_line'); ?>
                        </div>
                        <div style="display:flex;flex-direction:column;">
                            <h3>No. Telp</h3>
                            <h7>(Perwakilan)</h7>
                            <input type="text" name="no_telp" style="width:auto"/><br/>
                            <?= form_error('no_telp'); ?>
                        </div>
                    </div>
                    <h3>Email</h3>
                    <h7>(Perwakilan)</h7>
                    <input type="email" name="email" style="width:100%"/><br/>
                    <?= form_error('email'); ?>
                    <iframe id="framefinal3" src="https://script.google.com/macros/s/AKfycbz-1GxESg8GExn8FMmRx7stmYPDxwzOQCheYJUN6DX-mWVw33X563kLyw/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="texfinal3">Please submit your file to finish this form</h4>
                    <button id="butt3" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            <span class="commpress-rad" onclick="fff()" id="form3-btn-next">NEXT</span>
        </form>
    </div>
</div>