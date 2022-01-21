<section class="prevpage scrollToTopBtn">
  <?php if ($page->hasPrevListed()): ?>
    <a href="<?= $page->prevListed()->url() ?>">PREV</a>
  <?php endif ?>
</section>

<section class="nextpage scrollToTopBtn1">
  <?php if ($page->hasNextListed()): ?>
    <a href="<?= $page->nextListed()->url() ?>">NEXT</a>
  <?php endif ?>
</section>

<?php echo js('assets/js/scrollNext.js') ?>
<?php echo js('assets/js/scrollPrev.js') ?>