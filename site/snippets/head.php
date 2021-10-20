<!DOCTYPE html>
<html lang="de" dir="de">
<html>
  <head>
    <meta charset="UTF-8" />

    <title><?= $site->tab() ?><?= $page->tab() ?></title>

    <?= css(['assets/css/reset.css']) ?>
    <?= css(['assets/css/index.css']) ?>
    <?= css(['@auto']) ?>

    <?= js(['assets/js/script.js']) ?>
    <?= js(['assets/js/ticker.js']) ?>
    <?= js(['@auto']) ?>

  </head>
  
  <body class="html-body" id="html-body">