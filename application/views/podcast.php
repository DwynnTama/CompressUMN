<script>
    var test = setInterval(function()
    {
        var text = document.getElementById("tex").textContent;
        if(text == "Success")
        {
            console.log("berhasil berhasil hore");
            document.getElementById("butt").disabled = false;
            clearInterval(test);
            document.getElementById("frame").style.display = "none";
        }
        else
        {
            console.log("ga ketemu woi wat the hek");
            $.getJSON('https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec?prefix=?', null, function (results) {
            $('h4').html(results);
            });
        }
    },1000);
    function aaa(){
        document.getElementById("form-multi").reset();
        document.getElementById("form-1").style.display="flex";
        document.getElementById("form-2").style.display="none";
        document.getElementById("form-3").style.display="none";
        document.getElementById("form-next").style.display="none";
        document.getElementById("form-btn-next").style.display="block";
    }
    function bbb(){
        document.getElementById("form-multi").reset();
        document.getElementById("form-1").style.display="none";
        document.getElementById("form-2").style.display="flex";
        document.getElementById("form-3").style.display="none";
        document.getElementById("form-next").style.display="none";
        document.getElementById("form-btn-next").style.display="block";
    }
    function ccc(){
        document.getElementById("form-multi").reset();
        document.getElementById("form-1").style.display="none";
        document.getElementById("form-2").style.display="none";
        document.getElementById("form-3").style.display="flex";
        document.getElementById("form-next").style.display="none";
        document.getElementById("form-btn-next").style.display="block";
    }
    function ddd(){
        document.getElementById("form-1").style.display="none";
        document.getElementById("form-2").style.display="none";
        document.getElementById("form-3").style.display="none";
        document.getElementById("form-next").style.display="flex";
        document.getElementById("form-btn-next").style.display="none";
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Podcast</title>
<div class="event-select oprec form-lomba" style="height:100%" id="oprec-input">
    <div id="form-lomba">
        <form action="<?= base_url('Lomba/registration_podcast'); ?>" method="POST" class="commpress-form form-center" id="form-multi">
            <h3>JUMLAH ANGGOTA KELOMPOK</h3>
            <div style="padding: 10px">
                <span class="commpress-rad" onclick="aaa()">1</span>
                <span class="commpress-rad" onclick="bbb()">2</span>
                <span class="commpress-rad" onclick="ccc()">3</span>
            </div>
            <div style="display:flex;" id="form-1">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form-2">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form-3">
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
                <div class="commpress-card commpress-verticer">
                    <h3>Nama</h3>
                    <input type="text" name="nama" style="width:100%"/><br/>
                    <?= form_error('nama'); ?>
                    <h3>NIM</h3>
                    <input type="text" name="nim" style="width:100%"/><br/>
                    <?= form_error('nim'); ?>
                    <h3>Asal Kampus</h3>
                    <input type="text" name="kampus" style="width:100%"/><br/>
                    <?= form_error('kampus'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                </div>
            </div>
            <div style="display:none;" id="form-next">
                <div class="commpress-card commpress-verticer">
                    <h3>ID LINE</h3>
                    <input type="text" name="id_line" style="width:100%"/><br/>
                    <?= form_error('id_line'); ?>
                    <h3>No. Telp</h3>
                    <input type="text" name="no_telp" style="width:100%"/><br/>
                    <?= form_error('no_telp'); ?>
                    <h3>Email</h3>
                    <input type="email" name="email" style="width:100%"/><br/>
                    <?= form_error('email'); ?>
                    <iframe id="frame" src="https://script.google.com/macros/s/AKfycbz5SrmDuJajFR-1n970gLO-QVMTz5sxzeI3CbdGmj9ISj7_Hg3pYMvF_g/exec" frameborder="1" width="auto" height="auto"></iframe>
                    <h4 id="tex">Please submit your file to finish this form</h4>
                    <button id="butt" disabled type="submit">SUBMIT</button>
                </div>
            </div>
            <span class="commpress-rad" onclick="ddd()" id="form-btn-next">NEXT</span>
        </form>
    </div>
</div>