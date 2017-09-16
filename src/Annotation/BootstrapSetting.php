<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Annotation\BootstrapSetting.
 */

namespace Drupal\bootstrap_lite\Annotation;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Drupal\Component\Annotation\Plugin;

/**
 * Defines a BootstrapSetting annotation object.
 *
 * Plugin Namespace: "Plugin/Setting".
 *
 * @see \Drupal\bootstrap_lite\Plugin\SettingInterface
 * @see \Drupal\bootstrap_lite\Plugin\SettingManager
 * @see plugin_api
 *
 * @Annotation
 *
 * @Attributes({
 *
 * @Attribute("defaultValue", type = "mixed", required = true),
 *
 * @Attribute("type", type = "string", required = true),
 * })
 *
 * @ingroup plugins_setting
 */
class BootstrapSetting extends Plugin {

  /**
   * The setting's description.
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $description;

  /**
   * The setting's default value.
   *
   * @var mixed
   */
  public $defaultValue;

  /**
   * The setting's groups.
   *
   * @var \Drupal\Core\Annotation\Translation[]
   */
  public $groups = [];

  /**
   * The setting's title.
   *
   * @var \Drupal\Core\Annotation\Translation
   */
  public $title;

  /**
   * The setting's type.
   *
   * @var string
   */
  public $type;

  /**
   * The setting's see references.
   *
   * @var array
   */
  public $see = [];

  /**
   * {@inheritdoc}
   */
  public function __construct($values) {
    if (!isset($values['groups'])) {
      $values['groups'] = ['general' => t('General')];
    }
    parent::__construct($values);
  }

}
