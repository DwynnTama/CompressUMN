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
            $('h1').html(results);
            });
        }
    },1000);
    
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Feature Writting</title>
<div class="event-select oprec form-lomba" style="height:100%" id="oprec-input">
    <div class="lomba-center">
        <h2>Submit Karyamu</h2>
        <img src="<?= base_url('assets/images/submit.svg') ?>" class="submit-lomba"/>
    </div>
    <div id="form-lomba">
        <form action="<?= base_url('Lomba/registration_feature'); ?>" method="POST" class="commpress-form form-center">
            <h3>Nama</h3>
            <input type="text" name="nama" style="width:100%"/><br/>
            <?= form_error('nama'); ?>
            <h3>NIM</h3>
            <input type="text" name="nim" style="width:100%"/><br/>
            <?= form_error('nim'); ?>
            <h3>Email</h3>
            <input type="email" name="email" style="width:100%"/><br/>
            <?= form_error('email'); ?>
            <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="500px" height="250px"></iframe>
            <h4 id="tex">Please submit your file to finish this form</h4>
            <button id="butt" disabled type="submit">SUBMIT</button>
        </form>
    </div>
</div>