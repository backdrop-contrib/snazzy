<?php

/**
 * @file
 *
 * Theme settings.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function snazzy_form_system_theme_settings_alter(&$form, &$form_state) {
  // Settings for color module.
  if (module_exists('color')) {
    $form['base'] = array(
      '#type' => 'fieldset',
      '#title' => t('Base Settings'),
      '#collapsible' => TRUE,
    );
    $fields = array(
      'base',
      'text',
      'link',
      'borders',
      'boxbg',
      'brightbg',
      'lightbg',
      'darkbg',
    );
    foreach ($fields as $field) {
      $form['base'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }

    $form['additional'] = array(
      '#type' => 'fieldset',
      '#title' => t('Header, Buttons, Footer'),
      '#collapsible' => TRUE,
    );
    $fields = array(
      'header',
      'headertext',
      'herobg',
      'herotext',
      'buttons',
      'buttonsborder',
      'buttonstext',
      'activemenu',
      'footer',
      'footertext',
    );
    foreach ($fields as $field) {
      $form['additional'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
    }

  }
  else {
    $form['color'] = array(
      '#markup' => '<p>' . t('This theme supports custom color palettes if the Color module is enabled on the <a href="!url">modules page</a>. Enable the Color module to customize this theme.', array('!url' => url('admin/modules'))) . '</p>',
    );
  }
  // Other settings.
  $form['other'] = array(
    '#type' => 'fieldset',
    '#title' => t('Other Settings'),
    '#collapsible' => FALSE,
    '#description' => t('Note: you can not preview this here, you first have to save it. And the preview frame is too small to show the split display.'),
  );
  $form['other']['front_header_split'] = array(
    '#type' => 'checkbox',
    '#title' => t('Front page header split'),
    '#default_value' => theme_get_setting('front_header_split', 'snazzy'),
    '#description' => t('Show the header and top region on the start page side by side.'),
  );
}
