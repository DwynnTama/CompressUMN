<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>AOS.init();
         AOS.init({
            duration: 800,
            delay: 300,
            mirror: true,
            disable: 'mobile',

        });
    </script>
    </head>

    <div style="display:flex;align-items: center;justify-content: center;width: 100%;flex-direction: column; margin-top: 100px;">
        <div class="wrap-podcast" data-aos="zoom-in">
            <div class="card-podcast">
                <img src="<?= base_url('assets/images/123.png'); ?>" alt="" width="100%" height="auto">
                <div class="content-podcast">
                    <h3>ANDALAS PODCAST</h3>
                    <br>
                    <audio controls style="width:100%;">
                        <source src="<?= base_url('assets/audio/andalas.mp3'); ?>">
                    </audio>
                    <br>
                    <h5>CREATED BY : </h5>
                    <h5>Celine Febriani Rusli</h5>
                    <h5>Thefanny</h5>
                    <h5>Winnie</h5>
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
                        <div class="panel-body text-capt">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                        </div>
                    </div>
                </div>
             </div>
        </div>

        <div class="wrap-podcast" data-aos="zoom-in">
            <div class="card-podcast">
                <img src="<?= base_url('assets/images/123.png'); ?>" alt="" width="100%" height="auto">
                <div class="content-podcast">
                    <h3>ANDALAS PODCAST</h3>
                    <br>
                    <audio controls style="width:100%;">
                        <source src="<?= base_url('assets/audio/andalas.mp3'); ?>">
                    </audio>
                    <br>
                    <h5>CREATED BY : </h5>
                    <h5>Celine Febriani Rusli</h5>
                    <h5>Thefanny</h5>
                    <h5>Winnie</h5>
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
                        <div class="panel-body text-capt">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                        </div>
                    </div>
                </div>
             </div>
        </div>

        <div class="wrap-podcast" data-aos="zoom-in">
            <div class="card-podcast">
                <img src="<?= base_url('assets/images/xone.png'); ?>" alt="" width="100%" height="auto">
                <div class="content-podcast">
                    <h3>XONE PODCAST</h3>
                    <br>
                <audio controls style="width:100%;">
                    <source src="<?= base_url('assets/audio/andalas.mp3'); ?>">
                </audio>
                <br>
                <h5>CREATED BY : </h5>
                <h5>Celine Febriani Rusli</h5>
                <h5>Thefanny</h5>
                <h5>Winnie</h5>
                </div>
            </div>
            <div class="panel-group captions" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">CAPTIONS</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body text-capt">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat.</div>
                    </div>
                </div>
        </div>
    </div>
    
    <style>
        /* body{
            background-image: url("https://i.pinimg.com/originals/77/3c/62/773c62498b4f8b37bde0deb955918cc4.jpg");
            background-position: fixed;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        } */

        .wrap-podcast
        {
            padding-top: 50px;
        }

        .card-podcast
        {
            background: #333;
            display: grid;
            grid-template-columns: 15.625vw 24.83vw;
            grid-gap: 1rem;
            justify-content: center;
            width: 45vw;
            padding: 2vw;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .card-podcast .content-podcast
        {
            background: #000;
            padding: 10px 10px 10px 10px;
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
        }

        .captions
        {
            background: #333;
            width: 45vw;
            text-align: center;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        
        .text-capt
        {
            color: white;
            padding: 10px 30px 40px 30px;
            text-align: justify;
            font-size: 18px;
        }

        .panel-title
        {
            padding-bottom: 20px;
            font-size: 1.5vw;
        }
        
        a
        {
            text-decoration: none;
            color:white;
        }
        
    </style>
</html>
