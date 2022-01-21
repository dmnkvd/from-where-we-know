<?php foreach($kirby->languages() as $language): ?>
<?php if ($kirby->language() == $language) continue; ?>
<li>
  <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
    <?= html($language->name()) ?>
  </a>
</li>
<?php endforeach ?>