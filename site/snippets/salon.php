<section class="salon">
  <?php foreach ($salon->images() as $image): ?>
  <figure>
    <a href="<?= $image->link()->or($image->url()) ?>">
      <?= $image->crop(0, 0) ?>
    </a>
  </figure>
  <?php endforeach ?>
</section>