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
    },2000);
    
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php error_reporting(0); ?>
<title>Open Recruitment</title>
<div class="container oprec" style="padding-top:0" id="oprec-input">
    <h2>Submit Karyamu</h2>
    <div>
    <form action="<?= base_url('Lomba/registration_feature'); ?>" method="POST">
        <label>Nama</label>
        <input type="text" name="nama"/><br/>
        <?= form_error('nama'); ?>
        <label>NIM</label>
        <input type="text" name="nim"/><br/>
        <?= form_error('nim'); ?>
        <label>Email</label>
        <input type="email" name="email"/><br/>
        <?= form_error('email'); ?>
        <iframe id="frame" src="https://script.google.com/macros/s/AKfycbyk3TyXK7WLvvvC0q60DHyJZ5riOx3ts1MXHUQzckdipaJfpH6GrZoCJA/exec" frameborder="1" width="500px" height="250px"></iframe>
        <h1 id="tex">Please submit your file to finish this form</h1>
        <button id="butt" disabled type="submit">SUBMIT</button>
    </form>
</div>
    </div>
</div>