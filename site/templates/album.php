<?php snippet('header-album') ?>

        <figcaption class="artists-title-name">
          
           <p><?= $page->title() ?></p>
           <p><?= $page->projectname() ?></p>   
        </figcaption>


<div class="wrapper">


<div class="first-pane">

 <?php foreach($gallery as $image): ?>
  <div class="image">
    <img src="<?= $image->link()->or($image->url())->url() ?>">
  </div>
  <?php endforeach ?>


  
  <div class="links">
  
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
</div>


</div>

<div class="second-pane">

<div class="left-inpane">
<ul>
      <?php foreach ($page->ref()->toStructure() as $ref): ?>
        <li>
<?php if ($ref->quote()->isNotEmpty()): ?>
      <p2><?= $ref->quote()->kt() ?></p2>
<?php endif ?>
</li>
  <li>
  <a href="<?php echo $ref->link() ?>" target="_blank">
    <p><?= $ref->text() ?></p>
  </a>
</li>
<?php endforeach ?>
</ul>

</div>


<div class="right-inpane album-decription">
    
<?php if ($page->description()->isNotEmpty()): ?>
      <p><?= $page->description()->kt() ?></p>
<?php endif ?>


</div>
</div>


<?= js('assets/js/templates/album.js') ?>

<script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
</script>

