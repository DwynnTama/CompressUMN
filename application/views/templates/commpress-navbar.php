<html>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="icon" href="<?= base_url('assets/images/compress-logo.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/about.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/event.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/comment_board.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/page_pameran.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/stars.css") ?>">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <head>
    <span class="navbar">
        <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/compress.png'); ?>" style="width:95px; padding-bottom: 3px; padding-top: 3px;"/></a>
        <div class="sub-bar">
            <a href="<?= base_url(); ?>">Home</a>
            <a href="<?= base_url('Event'); ?>">Events</a>
            <a href="<?= base_url('Aboutus'); ?>">About</a>
        </div>
    </span>
    <nav role="navigation">
        <div class="nav-toogle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>

            <div class="navbar-logo">
                <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/images/compress.png'); ?>" style="width:100px"/></a>
            </div>

            <ul class="nav-menu">
                <a href="<?= base_url(); ?>"><li>Home</li></a>
                <a href="<?= base_url('Event'); ?>"><li>Events</li></a>
                <a href="<?= base_url('Aboutus'); ?>"><li>About</li></a>
                <b></b>
                <div class="nav-container">
                    FOLLOW US ON
                    <div class="nav-content">
                        <a href="https://www.instagram.com/commpressumn/"><img src="<?= base_url('assets/images/insta.png'); ?>"/></a>
                        <img src="<?= base_url('assets/images/utube.png'); ?>"/>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</head>