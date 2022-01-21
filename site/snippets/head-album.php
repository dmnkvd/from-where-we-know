<!DOCTYPE html>
<html lang="en" dir="en">
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport"            content="width=device-width, initial-scale=1.0">

    <!-- facebook and sharing -->
    <meta property="og:image" content="https://www">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://virginiemira.com"/>
    <meta property="og:title" content="Virginie Mira" />
    <meta property="og:description" content="" />

  <title><?= $site->tab() ?>&nbsp;<?= $page->title() ?></title>
  <link rel="shortcut icon" type="image/svg+xml" href="<?= url('assets/img/pixo.svg') ?>">

  <!-- basic -->
  <?php echo css(['assets/css/reset.css']) ?>
  <?php echo css(['assets/css/index.css']) ?>
  
  <!-- cookie -->
  <?php echo css(['assets/css/cookie-modal.css']) ?>
  <?= js('assets/js/cookie-modal.js', ['defer' => true]) ?>

  <!-- corousel -->
  <?php echo css('assets/css/owl.carousel.css') ?>

  <?php echo css(['@auto']) ?>

  <!-- basic -->
  <?= js(['assets/js/script.js']) ?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <?= js(['@auto']) ?>

  <!-- sass -->
  <?= snippet('scss'); ?>

  <style>
    .wrapper {
      background-color: <?php echo $page->projectcolor() ?> !important;
      color: <?php echo $page->primarycolor() ?> !important;
      z-index: -5;
    }

    .ball {
    background: 
    radial-gradient(
    circle at center, rgba(255,255,255,0.9),rgba(255,255,255,0.5), rgba(255, 255, 255, 0) 65%
    );
  }
  @media only screen and (max-width: 768px) {
    nav .nav-menu {
      background-color: white !important;
      color: black !important;
  }
}

  @-webkit-keyframes albumtextshadow {
    0%{
      text-shadow:      
      0 0 0.5px <?php echo $page->primarycolor() ?>;
  }
  100% {
      text-shadow:      
      0 0 3px <?php echo $page->primarycolor() ?>;
  }
  }
    
    <?php echo $page->css() ?>.colornav {
      background: linear-gradient(180deg, <?php echo $page->projectcolor() ?> 80%, rgb(0, 0, 0, 0));
      z-index: -5;
    }
  </style>
</head>

<body class="html-body" id="html-body">

<!-- // new GSAP 3 code 
// https://codepen.io/GreenSock/pen/WNNNBpo -->
<div class="ball"></div>