<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Preprocess\Input.
 */

namespace Drupal\bootstrap_lite\Plugin\Preprocess;

use Drupal\bootstrap_lite\Annotation\BootstrapPreprocess;
use Drupal\bootstrap_lite\Utility\Element;
use Drupal\bootstrap_lite\Utility\Variables;

/**
 * Pre-processes variables for the "select" theme hook.
 *
 * @ingroup plugins_preprocess
 *
 * @BootstrapPreprocess("select")
 */
class Select extends PreprocessBase implements PreprocessInterface {

  /**
   * {@inheritdoc}
   */
  public function preprocessElement(Element $element, Variables $variables) {
    // Create variables for #input_group and #input_group_button flags.
    $variables['input_group'] = $element->getProperty('input_group') || $element->getProperty('input_group_button');

    // Map the element properties.
    $variables->map([
      'attributes' => 'attributes',
      'field_prefix' => 'prefix',
      'field_suffix' => 'suffix',
    ]);

    // Ensure attributes are proper objects.
    $this->preprocessAttributes();
  }

}
