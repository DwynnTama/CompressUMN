<div class="container-pameran" style="justify-content:flex-start">
    <div style="width:25em;margin:20px">
        <h1 style="font-size: 2em; padding-top: 100px">Lihat karyamu disini ...</h1>
        <input name="feature_s" type="text" style="width:100%;height:50px;border-radius:20px"/>
    </div>
    <div class="cardlah">
        <?php 
            foreach($feature_writing as $row) {
                $judul = $row['nama_peserta'];
                $id_writing = $row['ID_writing'];
        ?>
        <div style="width: 500px;" class="cage"  data-aos="zoom-in">
            <div class="kelas">
                <?php 
                    echo '<a href="' . base_url('Lomba/feature_detail?ID_writing='.$id_writing.'') . '"><div class="mask"><h3>'. $judul .'</h3></div></a>';
                ?>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>  
</div>