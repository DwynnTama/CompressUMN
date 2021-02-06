<div>
    <form action="<?= base_url('Lomba/registration'); ?>" method="POST">
        <label>Nama</label>
        <input type="text" name="nama"/><br/>
        <?= form_error('nama'); ?>
        <label>NIM</label>
        <input type="text" name="nim"/><br/>
        <?= form_error('nim'); ?>
        <label>Email</label>
        <input type="email" name="email"/><br/>
        <?= form_error('email'); ?>
        <input type="radio" name="optlomba" id="podcast" value="Podcast" required/>
        <label for="podcast">Podcast</label>
        <input type="radio" name="optlomba" id="karyatulis" value="Karya Tulis"/>
        <label for="karyatulis">Karya Tulis</label>
        <input type="radio" name="optlomba" id="bothlomba" value="Both"/>
        <label for="bothlomba">Karya Tulis dan Podcast</label>
        <br/>
        <button type="submit">SUBMIT</button>
    </form>
</div>