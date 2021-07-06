<?php snippet('header') ?>  


<ul id="list-artist">
  <?php foreach($page->children()->sortBy('title','asc') as $subpage): ?>
  <li>
    <a href="<?= $subpage->url() ?>">
      <?= html($subpage->title()) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php snippet('footer') ?>




