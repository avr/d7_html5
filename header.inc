<hgroup id="name-and-slogan">
  <h2 id="logo" class="grid-4">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
  </h2>
</hgroup> <!-- /#name-and-slogan -->

<?php print render($page['header']); ?>

<?php if ($main_menu): ?>
  <nav role="navigation" id="main" class="grid-11 prefix-1 omega">
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('inline', 'clearfix')))); ?>
  </nav> <!-- /nav -->
<?php endif; ?>

<?php if ($breadcrumb): ?>
  <nav id="breadcrumbs" class="grid-16"><?php print $breadcrumb; ?></nav>
<?php endif; ?>