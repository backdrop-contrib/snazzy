<?php
$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'base' => t('Main background'),
    'text' => t('Text color'),
    'link' => t('Link color'),
    'header' => t('Header background'),
    'headertext' => t('Header text'),
    'herobg' => t('Hero background'),
    'herotext' => t('Hero text and links'),
    'buttons' => t('Buttons background, large links'),
    'buttonsborder' => t('Buttons border'),
    'buttonstext' => t('Buttons text'),
    'borders' => t('Borders'),
    'boxbg' => t('Backgrounds for boxes'),
    'brightbg' => t('Bright backgrounds'),
    'lightbg' => t('Light backgrounds'),
    'darkbg' => t('Dark backgrounds'),
    'footer' => t('Footer background'),
    'footertext' => t('Footer text'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Snazzy (default)'),
      'colors' => array(
        'base' => '#fafafa',
        'text' => '#444444',
        'link' => '#4c7599',
        'borders' => '#bbbbbb',
        'boxbg' => '#fffffd',
        'brightbg' => '#fdfdfd',
        'lightbg' => '#eaeaea',
        'darkbg' => '#bbbbbc',

        'header' => '#423e39',
        'headertext' => '#fffffe',
        'herobg' => '#aaaaaa',
        'herotext' => '#fffdff',
        'buttons' => '#71a2cd',
        'buttonsborder' => '#4c7598',
        'buttonstext' => '#fffeff',
        'footer' => '#423e3a',
        'footertext' => '#feffff',
      ),
    ),
  ),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),
);
