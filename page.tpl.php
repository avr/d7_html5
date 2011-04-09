<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>

  <div id="container" class="container-16 clearfix">

    <header role="banner" class="clearfix">

      <?php include('header.inc'); ?>

    </header> <!-- /header -->

    <?php print $messages; ?>

    <section id="main" class="<?php print $main_class; ?> clearfix">
      <a id="main-content"></a>

      <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
      <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?>

      <?php print render($page['content']); ?>
      
      <?php print $feed_icons; ?>

    </section> <!-- /#main -->

    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="<?php print $sb_first_class; ?> clearfix">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>


    <?php if ($page['sidebar_last']): ?>
      <aside id="sidebar-last" class="<?php print $sb_last_class; ?> clearfix">
        <?php print render($page['sidebar_last']); ?>
      </aside>
    <?php endif; ?>

  </div> <!-- /#container -->
  
  <div class="full-container clearfix">
    <?php include('footer.inc'); ?>
  </div>