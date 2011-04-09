<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>

  <div id="container" class="container-12 clearfix">

    <header role="banner" class="clearfix">

      <?php include('header.inc'); ?>

    </header> <!-- /header -->


    <?php print $messages; ?>

    <section id="main" class="container-12">
        
        <a id="main-content"></a>
        
        <div class="grid-12">

          <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
          <?php if ($action_links = render($action_links)): ?><ul class="action-links"><?php print $action_links; ?></ul><?php endif; ?>
          <?php print render($page['content']); ?>

          <?php print $feed_icons; ?>

        </div>

    </section> <!-- /#main -->

  </div> <!-- /#container -->

  <div class="full-container clearfix">

    <?php include('footer.inc'); ?>

  </div>