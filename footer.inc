<footer class="container-12 footer-regions clearfix">
  <div class="grid-2">

    <?php if ($page['footer_left']): ?>
        <?php print render($page['footer_left']); ?>
    <?php endif; ?>

  </div>
  
  <div class="grid-4">
    <p>&copy; Copyright <?php echo date('Y'). " " . $site_name; ?></p>
  </div>

  <div class="grid-4">
    <p>Menu Goes Here</p>
  </div>

  <div class="grid-2">
    <?php if ($page['footer_right']): ?>
        <?php print render($page['footer_right']); ?>
    <?php endif; ?>
  </div>

</footer>