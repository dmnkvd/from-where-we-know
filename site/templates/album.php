<?php snippet('header') ?>
<?php?>
        <figcaption class="artists-title-name">
           <p><?= $page->title() ?></p>
           <p><?= $page->projectname() ?></p>   
        </figcaption>
      <?php?>


<div class="wrapper">

<div class="first-pane">

 <?php foreach($gallery as $image): ?>
  <div class="content-block image">
    <img src="<?= $image->link()->or($image->url())->url() ?>">
  </div>
  <?php endforeach ?>

</div>

<div class="mid-pane">

<ul>
      <?php foreach ($page->ref()->toStructure() as $ref): ?>
  <li>
  <a href="<?php echo $ref->link() ?>" target="_blank">
    <?= $ref->text() ?> 
  </a>
</li>
<li>
<?php if ($ref->quote()->isNotEmpty()): ?>
      <p2><?= $ref->quote()->kt() ?></p2>
<?php endif ?>
</li>
<?php endforeach ?>
</ul>

</div>

<div class="last-pane album-decription">
    
<?php if ($page->description()->isNotEmpty()): ?>
      <p><?= $page->description()->kt() ?></p>
<?php endif ?>

<?php foreach($page->kirbytag() as $kirbytag): ?>

<?php if ($page->link()->isNotEmpty()): ?>
<?= kirbytag([
'link' => $page->link(),
'text'  => $page->descriptionlink()
]);
?>
<?php endif ?>

<?php if ($page->website()->isNotEmpty()): ?>
<?= kirbytag([
'link' => $page->website(),
'text'  => $page->descriptionwebsite()
]);
?>
<?php endif ?>
<?php endforeach ?>
</figure>
</div>


<?= js('assets/js/templates/album.js') ?>

<script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
</script>
