<header class="nav-down">
  <nav>
    <ul class="nav">
    <li <?php e($site->page('home')->isOpen(), ' class="active"') ?>><a
              href="<?= $pages->find('home')->url() ?>"><?= $site->page('home')->title()->link() ?></a></li>
    </ul>
    <ul class="nav-menu">
      <li <?php e($site->page('bio')->isOpen(), ' class="active"') ?>><a
          href="<?= $pages->find('bio')->url() ?>"><?= $site->page('bio')->title()->link() ?></a></li>
      <li <?php e($site->page('merch')->isOpen(), ' class="active"') ?>><a
          href="<?= $pages->find('merch')->url() ?>"><?= $site->page('merch')->title()->link() ?></a></li>
      <li <?php e($site->page('gallery')->isOpen(), ' class="active"') ?>><a
          href="<?= $pages->find('gallery')->url() ?>"><?= $site->page('gallery')->title()->link() ?></a></li>
           <li <?php e($site->page('shows')->isOpen(), ' class="active"') ?>><a
          href="<?= $pages->find('shows')->url() ?>"><?= $site->page('shows')->title()->link() ?></a></li>
      <li <?php e($site->page('contact')->isOpen(), ' class="active"') ?>><a
          href="<?= $pages->find('contact')->url() ?>"><?= $site->page('contact')->title()->link() ?></a></li>
     
    </ul>
</nav>
</header>
<?= js(['assets/js/header.js']) ?>