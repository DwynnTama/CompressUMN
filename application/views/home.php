<script src="<?= base_url("assets/js/slide.js") ?>"></script>
<script src="<?= base_url("assets/js/loading.js") ?>"></script>

<title>COMMPRESS UMN</title>

<div class="loader">
    <img src="<?= base_url("assets/images/loader.gif") ?>" alt="">
</div>

<div class="container">
    <div class="container-bg"></div>
    <div class="com-board">
        <?php
        for($i = 0 ; $i <= 20 ; $i++){?>
        <div class="board-item">
            <div class="item-text">
                "KEREN BANGET COI <?= $i ?>"
            </div>
            <div class="item-date">
                22 Januari 2021
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    
</div>