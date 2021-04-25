<div class="container-pameran" style="justify-content:flex-start">
    <div style="width:25em;margin:20px;display:flex;flex-direction:column;align-items:center">
        <h1 style="font-size: 2em; padding-top: 100px">Tulis namamu disini ...</h1>
        <input id="feature_s" type="text" style="width:100%;height:50px;border-radius:20px;text-align:center;font-size: 1em;padding: 0 10px 0 10px"/>
        <button onclick="findWrit()" class="srch-commpress">CARI</button>
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
<script>    
    function findWrit() {
        var str = document.getElementById("feature_s").value;
        window.find(str);
    }
</script>