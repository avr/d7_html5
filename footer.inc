<footer class="container-12 footer-regions">
  <div class='grid-6'>
    <p>&copy; Copyright <?php echo date('Y'). " " . $site_name; ?></p>

    <?php if ($page['footer_left']): ?>
        <?php print render($page['footer_left']); ?>
    <?php endif; ?>

  </div>

  <?php if ($page['footer_right']): ?>
    <div class="grid-6">
      <?php print render($page['footer_right']); ?>
    </div>
  <?php endif; ?>
</footer>
