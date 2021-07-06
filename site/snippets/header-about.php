<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>
      <?= $site->title() ?> | <?= $page->title() ?>
  </title>

    <?= css(['assets/css/styles.css']) ?>
    <?= css(['assets/css/reset.css']) ?>
    <?= css(['assets/css/index.css']) ?>
    <?= css(['@auto']) ?>

    <!-- Initialises the D3 library -->
    <script src="https://d3js.org/d3.v4.min.js"></script>

    <?= js(['assets/js/script.js']) ?>
    <?= js(['@auto']) ?>
    
    <style>
      nav {
      background-color: var(--clr-main);
      }
    </style>
  </head>

  <body class="html-body" id="html-body">
  
      <nav>
        <h2 class="title"> <a href="<?= $site->url() ?>">From Where We Know</h2>

        <div class="insta"><p><a href="https://www.instagram.com/kabk_gd_nln2021/">Instagram</a></p></div>
        
        <ul class="nav-menu">
          <li><a href="<?= $site->url() ?>">Back</a></li>
        </ul>
      </nav>
