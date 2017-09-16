<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Form\SearchBlockForm.
 */

namespace Drupal\bootstrap_lite\Plugin\Form;

use Drupal\bootstrap_lite\Annotation\BootstrapForm;
use Drupal\bootstrap_lite\Utility\Element;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @ingroup plugins_form
 *
 * @BootstrapForm("search_block_form")
 */
class SearchBlockForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function alterFormElement(Element $form, FormStateInterface $form_state, $form_id = NULL) {
    $form->actions->submit->setProperty('icon_only', TRUE);
    $form->keys->setProperty('input_group_button', TRUE);
  }

}
