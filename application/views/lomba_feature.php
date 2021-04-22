<div class="container-pameran" style="padding-top: 100px">
    <h1>Lihat karyamu disini ...</h1>
    <div style="width:500px;margin:20px">
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
                    echo '<a href="' . base_url('Event/feature_detail?ID_writing='.$id_writing.'') . '"><div class="mask"><h3>'. $judul .'</h3></div></a>';
                ?>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>  
</div>