  <div class="page">
    <header class="header">

      <nav>
        <h2 class="title"> <a href="<?= $site->url() ?>">Glass House</h2>
  
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