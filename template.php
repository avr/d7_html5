<?php

/**
 * @file
 * Contains theme override functions and preprocess functions for the Ntrepid theme.
 */

define('CSS_NS_FRAMEWORK', -200);

/*
 *	
 *	@param $vars
 *	  A sequential array of variables to pass to the theme template.
 *	@param $hook
 *	  The name of the theme function being called ("html" in this case.)
 */
function sudan_sunrise_preprocess_html(&$vars, $hook) {
  // echo "Modernizer: " . theme_get_setting('html5_foundation_modernizr');

  if(theme_get_setting('html5_foundation_modernizr')){
    $options = array(
      'group' => JS_LIBRARY,
      'weight' => -20,
    );
  drupal_add_js(drupal_get_path('theme', 'sudan_sunrise') . '/js/modernizr-1.7.min.js', $options);
  }
}

/**
 * Preprocess Page
 */
function sudan_sunrise_preprocess_page(&$vars){
  // dsm($vars);
  // set grid widths if just first sidebar
  if ($vars['page']['sidebar_first'] && !$vars['page']['sidebar_last']){
    $vars['main_class'] = 'grid-9 push-3';
    $vars['sb_first_class'] = 'grid-3 pull-9 alpha';
  }
  // set grid widths if just last sidebar
  if (!$vars['page']['sidebar_first'] && $vars['page']['sidebar_last']){
    $vars['main_class'] = 'grid-9';
    $vars['sb_last_class'] = 'grid-3';
  }
  // set grid widths if both sidebars are present
  if ($vars['page']['sidebar_first'] && $vars['page']['sidebar_last']){
    $vars['main_class'] = 'grid-6 push-3';
    $vars['sb_first_class'] = 'grid-3 pull-9';
    $vars['sb_last_class'] = 'grid-3';
  }
  // set grid widths if no sidebars are present
  if (!$vars['page']['sidebar_first'] && !$vars['page']['sidebar_last']){
    $vars['main_class'] = 'grid-12';
  }
  
}

/**
 * Implements hook_css_alter.
 *
 * Pulled directly from ninesixty theme
 * 
 * This rearranges how the style sheets are included so the framework styles
 * are included first.
 *
 * Sub-themes can override the framework styles when it contains css files with
 * the same name as a framework style. This mirrors the behavior of the 6--1
 * release of NineSixty warts and all. Future versions will make this obsolete.
 */
function sudan_sunrise_css_alter(&$css) {
  global $theme_info;

  // Dig into the framework .info data.
  $framework = $theme_info->info;

  // Ensure framework CSS is always first.
  $on_top = CSS_NS_FRAMEWORK;

  // Pull framework styles from the themes .info file and place them above all stylesheets.
  if (isset($framework['stylesheets'])) {
    foreach ($framework['stylesheets'] as $media => $styles_from_960) {
      foreach ($styles_from_960 as $style_from_960) {
        // Force framework styles to come first.
        if (strpos($style_from_960, 'framework') !== FALSE) {
          $css[$style_from_960]['group'] = $on_top;
          // Handle styles that may be overridden from sub-themes.
          foreach (array_keys($css) as $style_from_var) {
            if ($style_from_960 != $style_from_var && basename($style_from_960) == basename($style_from_var)) {
              $css[$style_from_var]['group'] = $on_top;
            }
          }
        }
      }
    }
  }
}