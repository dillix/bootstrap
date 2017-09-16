<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Form\SearchForm.
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
 * @BootstrapForm("search_form")
 */
class SearchForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function alterFormElement(Element $form, FormStateInterface $form_state, $form_id = NULL) {
    $form->advanced->setProperty('collapsible', TRUE);
    $form->advanced->setProperty('collapsed', TRUE);
    $form->basic->removeClass('container-inline');
    $form->basic->submit->setProperty('icon_only', TRUE);
    $form->basic->keys->setProperty('input_group_button', TRUE);
  }

}
