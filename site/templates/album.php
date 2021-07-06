<?php snippet('header') ?>
<?php?>
        <figcaption class="artists-title-name">
           <p><?= $page->title() ?></p>
           <p><?= $page->projectname() ?></p>   
        </figcaption>
      <?php?>

<main class="album">


<div class="wrapper">

<div class="left-pane">

 <?php foreach($gallery as $image): ?>
  <div class="content-block image">
    <img src="<?= $image->link()->or($image->url())->url() ?>">
  </div>
  <?php endforeach ?>


</div>
<div class="right-pane">


      <figure class="album-decription">

      <div class="popup" onclick="myFunction()">
      <?php?>
        <figcaption id="references">
           <p>7 references</p>     
        </figcaption>
      <?php?>

      <span class="popuptext" id="myPopup">
        <ul>
      <?php foreach ($page->ref()->toStructure() as $ref): ?>
  <li>
  <a href="<?php echo $ref->link() ?>" target="_blank">
    <?= $ref->text() ?> 
  </a>
</li>
<?php endforeach ?>
</ul>
      </span>
    </div>

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

</div>


</main>


<?= js('assets/js/templates/album.js') ?>

<script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
</script>

