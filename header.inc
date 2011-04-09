<hgroup id="name-and-slogan">
  <h2 id="logo" class="grid-6">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
  </h2>
</hgroup> <!-- /#name-and-slogan -->

<?php print render($page['header']); ?>

<?php if ($breadcrumb): ?>
  <nav id="breadcrumbs" class="grid-12"><?php print $breadcrumb; ?></nav>
<?php endif; ?>