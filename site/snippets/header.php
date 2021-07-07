<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta charset="UTF-8" />

    <title>
    <?= $site->title() ?> | <?= $page->title() ?>
    </title>

    <?= css(['assets/css/reset.css']) ?>
    <?= css(['assets/css/index.css']) ?>
    <?= css(['@auto']) ?>

    <!-- Initialises the D3 library -->
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <!-- <?= js(['assets/js/d3.js']) ?> -->

    <?= js(['assets/js/script.js']) ?>
    <!-- <?= js(['@auto']) ?> -->

  </head>
  
  <body class="html-body" id="html-body">
    <div class="content-wrapper">
      <nav>
      <h2 class="title"> <a href="<?= $site->url() ?>">From Where We Know</a></h2>
      
        <ul class="nav-menu">
          <li><a href="<?= $pages->find('artist')->url() ?>">We</a></li>
          <li><a href="<?= $pages->find('about')->url() ?>">About</a></li>
          <!-- <li><p class="toggle">Navigation</p></li> -->
        </ul>

      </nav>

  