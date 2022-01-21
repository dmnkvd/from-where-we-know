<?php snippet('cookie-modal', ['showOnFirst' => true, 'features' => ['analytics' => 'custom.cookie-modal.analytics', 'mapbox' => 'custom.cookie-modal.mapbox']]) ?>


<script>
  const $body = document.querySelector('body');
  $body.addEventListener('cookies:saved', function (event) {
    console.log('Saved cookie features:', event.detail);
  })
</script>

<script>
  $('a').each(function () {
    if (this.host !== window.location.host) {
      $(this).attr('target', '_blank');
    }
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<?= js('assets/js/cursor.js') ?>

<script>
  $(document).ready(function () {
    $('.html-body').animate({
      'opacity': '1'
    }, 1000);
  });
</script>

<?= js('assets/js/jquery.min.js') ?>

<?php snippet('cookie-modal', ['assets' => false, 'showOnFirst' => true, 'features' => ['analytics' => 'custom.cookie-modal.analytics', 'mapbox' => 'custom.cookie-modal.mapbox']]) ?>

</body>

</html>