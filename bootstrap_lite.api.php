<?php
/**
 * @file
 * List of available procedural hook and alter APIs for use in your sub-theme.
 */

/**
 * @addtogroup plugins_alter
 *
 * @{
 */

/**
 * Allows sub-themes to alter the array used for colorizing text.
 *
 * @param array $texts
 *   An associative array containing the text and classes to be matched, passed
 *   by reference.
 *
 * @see \Drupal\bootstrap_lite\BootstrapLite::cssClassFromString()
 */
function hook_bootstrap_lite_colorize_text_alter(&$texts) {
  // This matches the exact string: "My Unique Button Text".
  $texts['matches'][t('My Unique Button Text')] = 'primary';

  // This would also match the string above, however the class returned would
  // also be the one above; "matches" takes precedence over "contains".
  $texts['contains'][t('Unique')] = 'notice';

  // Remove matching for strings that contain "apply":
  unset($texts['contains'][t('Apply')]);

  // Change the class that matches "Rebuild" (originally "warning"):
  $texts['contains'][t('Rebuild')] = 'success';
}

/**
 * Allows sub-themes to alter the array used for associating an icon with text.
 *
 * @param array $texts
 *   An associative array containing the text and icons to be matched, passed
 *   by reference.
 *
 * @see \Drupal\bootstrap_lite\BootstrapLite::glyphiconFromString()
 */
function hook_bootstrap_lite_iconize_text_alter(&$texts) {
  // This matches the exact string: "My Unique Button Text".
  $texts['matches'][t('My Unique Button Text')] = 'heart';

  // This would also match the string above, however the class returned would
  // also be the one above; "matches" takes precedence over "contains".
  $texts['contains'][t('Unique')] = 'bullhorn';

  // Remove matching for strings that contain "filter":
  unset($texts['contains'][t('Filter')]);

  // Change the icon that matches "Upload" (originally "upload"):
  $texts['contains'][t('Upload')] = 'ok';
}

/**
 * @} End of "addtogroup".
 */
