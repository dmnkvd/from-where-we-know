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
    <!-- put the DOM-related JavaScript here -->

    <?= js(['assets/js/script.js']) ?>
    <?= js(['@auto']) ?>

    <style>
      nav {
      background-color: var(--clr-main);
      }
    </style>

  </head>

</head>
<body>

  <div class="page">
    <header class="header">

      <nav>
        <h2 class="title"> <a href="<?= $site->url() ?>">From Where We Know</h2>
  
        <ul class="nav-menu">
        <?php if ($page->hasPrevListed()): ?>
      <a href="<?= $page->prevListed()->url() ?>"> Prev </a>
      <?php endif ?>

      <?php if ($page->hasNextListed()): ?>
      <a href="<?= $page->nextListed()->url() ?>"> Next </a>
      <?php endif ?>

      <a href="<?= $page->parent()->url() ?>"> Close </a>
        </ul>
      </nav>

    </header>