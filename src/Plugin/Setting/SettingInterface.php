<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Setting\SettingInterface.
 */

namespace Drupal\bootstrap_lite\Plugin\Setting;

use Drupal\bootstrap_lite\Plugin\Form\FormInterface;
use Drupal\bootstrap_lite\Utility\Element;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines the interface for an object oriented theme setting plugin.
 *
 * @ingroup plugins_setting
 */
interface SettingInterface extends PluginInspectionInterface, FormInterface {

  /**
   * Determines whether a theme setting should added to drupalSettings.
   *
   * By default, this value will be FALSE unless the method is overridden. This
   * is to ensure that no sensitive information can be potientially leaked.
   *
   * @see \Drupal\bootstrap_lite\Plugin\Setting\SettingBase::drupalSettings()
   *
   * @return bool
   *   TRUE or FALSE
   */
  public function drupalSettings();

  /**
   * The cache tags associated with this object.
   *
   * When this object is modified, these cache tags will be invalidated.
   *
   * @return string[]
   *   A set of cache tags.
   */
  public function getCacheTags();

  /**
   * Retrieves the setting's default value.
   *
   * @return string
   *   The setting's default value.
   */
  public function getDefaultValue();

  /**
   * Retrieves the group form element the setting belongs to.
   *
   * @param \Drupal\bootstrap_lite\Utility\Element $form
   *   The Element object that comprises the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \Drupal\bootstrap_lite\Utility\Element
   *   The group element object.
   */
  public function getGroupElement(Element $form, FormStateInterface $form_state);

  /**
   * Retrieves the setting's groups.
   *
   * @return array
   *   The setting's group.
   */
  public function getGroups();

  /**
   * Retrieves the settings options, if set.
   *
   * @return array
   *   An array of options.
   */
  public function getOptions();

  /**
   * Retrieves the form element for the setting.
   *
   * @param \Drupal\bootstrap_lite\Utility\Element $form
   *   The Element object that comprises the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \Drupal\bootstrap_lite\Utility\Element
   *   The setting element object.
   */
  public function getSettingElement(Element $form, FormStateInterface $form_state);

  /**
   * Retrieves the setting's human-readable title.
   *
   * @return string
   *   The setting's type.
   */
  public function getTitle();

}
