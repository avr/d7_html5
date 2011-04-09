<footer class="container-16 footer-regions">
  <div class="grid-4 clearfix">

    <?php if ($page['footer_left']): ?>
        <?php print render($page['footer_left']); ?>
    <?php endif; ?>

  </div>
  
  <div class="grid-6 clearfix">
    <p>&copy; Copyright <?php echo date('Y'). " " . $site_name; ?></p>
  </div>

  <div class="grid-4 clearfix">
    <p>Menu Goes Here</p>
  </div>

  <div class="grid-2 clearfix">
    <?php if ($page['footer_right']): ?>
        <?php print render($page['footer_right']); ?>
    <?php endif; ?>
  </div>

</footer>