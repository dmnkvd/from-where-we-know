<!DOCTYPE html>
<html lang="en" dir="en">
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, min-scale=1, max-scale=1, zoom-to-fit=no">

  <!-- facebook and sharing --> 
    <meta property="og:image" content="https://www">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://tolstoy.sk"/>
    <meta property="og:title" content="Tolstoy" />
    <meta property="og:description" content="" />

  <title><?= $site->tab() ?>&nbsp;<?= $page->tab() ?></title>
  <link rel="shortcut icon" type="image/svg+xml" href="<?= url('assets/img/.svg') ?>">

  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css(['assets/css/reset.css']) ?>
  <?php echo css(['assets/css/index.css']) ?>

  <?= css(['assets/css/owl.carousel.css']) ?>

  <!-- cursor -->
  <?php echo css(['assets/css/cursor.css']) ?>
  <?= js(['assets/js/cursor.js']) ?>

  <!-- cookie -->
  <?php echo css(['assets/css/cookie-modal.css']) ?>
  <?= js('assets/js/cookie-modal.js', ['defer' => true]) ?>

  <?php echo css(['@auto']) ?>
  <?= js(['@auto']) ?>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <?= snippet('scss'); ?>

</head>
<body class="html-body" id="html-body">

<!-- // GSAP 3 code 
// https://codepen.io/GreenSock/pen/WNNNBpo -->
<div class="ball"></div>