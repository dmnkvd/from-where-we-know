<?php snippet('head') ?>
<?php snippet('header') ?>

<main>


</main>

  <!-- cookie callback - display none block in css -->
  <button id="edit-cookie" style="top:30vh; left:45vw;position:absolute">Edit Cookie Settings</button>
  <script>
    document.querySelector('#edit-cookie').addEventListener('click', function () {
      const event = document.createEvent('HTMLEvents');
      event.initEvent('cookies:update', true, false);
      document.querySelector('body').dispatchEvent(event);
    });
    const $body = document.querySelector('body');
    $body.addEventListener('cookies:saved', function (event) {
      console.log('Saved cookie features:', event.detail);
    })
  </script>

  <?php snippet('cookie-modal', ['assets' => false, 'showOnFirst' => true, 'features' => ['analytics' => 'custom.cookie-modal.analytics', 'mapbox' => 'custom.cookie-modal.mapbox']]) ?>

  <script>
    $(document).ready(function () {
      $('.html-body').animate({
        'opacity': '1'
      }, 600);
    });
  </script>

  <script>
    document.addEventListener("touchstart", function() {}, true);
  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
  <?= js('assets/js/cursor.js') ?>
</body>

</html>