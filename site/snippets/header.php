<nav>
  <h2 class="title"> <a href="<?= $site->url() ?>"><?= $site->title()->link() ?></a></h2>     
    <ul class="nav-menu">
      <li <?php e($site->page('projects')->isOpen(), ' class="active"') ?>><a href="<?= $pages->find('projects')->url() ?>"><?= $site->page('projects')->title()->link() ?></a></li>
      <li <?php e($site->page('archive')->isOpen(), ' class="active"') ?>><a href="<?= $pages->find('archive')->url() ?>"><?= $site->page('archive')->title()->link() ?></a></li>
      <li <?php e($site->page('about')->isOpen(), ' class="active"') ?>><a href="<?= $pages->find('about')->url() ?>"><?= $site->page('about')->title()->link() ?></a></li>
      <?php snippet('languages') ?>
    </ul>
</nav>

