<?php

/**
 * @file
 */

/**
 * Implements hook_html_head_alter().
 */
function snazzy_html_head_alter(&$head_elements) {
  // @todo local font delivery.
  $head_elements['googlefont_pre'] = array(
    '#type' => 'head_tag',
    '#tag' => 'link',
    '#attributes' => 
      array (
        'rel' => 'preconnect',
        'href' => 'https://fonts.gstatic.com',
    ),
  );
  $head_elements['googlefont_style'] = array(
    '#type' => 'head_tag',
    '#tag' => 'link',
    '#attributes' => 
      array (
        'rel' => 'stylesheet',
        'href' => 'https://fonts.googleapis.com/css2?family=Spectral:ital,wght@1,400;1,700&display=swap',
    ),
  );
}

/**
 * Implements hook_preprocess_page().
 */
function snazzy_preprocess_page(&$variables) {
  if ($variables['is_front'] && theme_get_setting('front_header_split')) {
    $variables['classes'][] = 'front-header-split';
  }
  $path = current_path();
  // Add CSS class to admin pages.
  if (substr($path, 0, 6) == 'admin/') {
    $variables['classes'][] = 'admin-path';
  }
  // Add CSS classes to term listing pages.
  if (substr($path, 0, 14) == 'taxonomy/term/') {
    $parts = arg();
    if (count($parts) == 3) {
      $term = taxonomy_term_load($parts[2]);
      $variables['classes'][] = 'term-page';
      $variables['classes'][] = backdrop_clean_css_identifier('term-page-' . $term->name);
    }
  }
  // Add Open Sans font.
  backdrop_add_library('system', 'opensans', TRUE);
}

/**
 * Implements hook_css_alter().
 *
 * Get rid of unneeded core css.
 */
function snazzy_css_alter(&$css) {
  unset($css['core/modules/node/css/node.preview.css']);
}
