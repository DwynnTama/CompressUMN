<div class="container-pameran" style="padding-top:100px;padding-bottom: 20px">
    <?php
    foreach ($tampilkan as $row) {
        $anggota1 = $row['nama_anggota_1'];
        $anggota2 = $row['nama_anggota_2'];
        $anggota3 = $row['nama_anggota_3'];
        $piclink  = $row['link'];
        $podcast  = $row['nama_podcast'];
        $castmp3  = $row['lagu_mp3'];
        $caption  = $row['caption'];

    ?>
        <div class="wrap-podcast" data-aos="zoom-in">
            <div class="card-podcast">
                <?php
                echo '<img src="' . $piclink . '" alt="" width="100%" height="auto">';
                ?>
                <div class="content-podcast">
                    <?php echo '<h3>' . $podcast . '</h3>'; ?>
                    <br>
                    <audio controls style="width:100%;">
                        <?php echo '<source src="' . base_url('assets/audio/' . $castmp3) . '">'; ?>
                    </audio>
                    <br>
                    <?php
                    echo '<h5>CREATED BY : </h5>';
                    echo '<h5>' . $anggota1 . '</h5>';
                    echo '<h5>' . $anggota2 . '</h5>';
                    echo '<h5>' . $anggota3 . '</h5>';
                    ?>
                </div>
            </div>
            <div class="panel-group captions" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">CAPTIONS</a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse in">
                        <?php
                        echo '<div class="panel-body text-capt">' . $caption . '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>