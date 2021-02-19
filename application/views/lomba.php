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
        <button type="submit">SUBMIT</button>
    </form>
</div>