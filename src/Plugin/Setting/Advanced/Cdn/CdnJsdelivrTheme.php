<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Setting\Advanced\Cdn\CdnJsdelivrTheme.
 */

namespace Drupal\bootstrap_lite\Plugin\Setting\Advanced\Cdn;

use Drupal\bootstrap_lite\Annotation\BootstrapSetting;
use Drupal\bootstrap_lite\Utility\Element;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Form\FormStateInterface;

/**
 * The "cdn_jsdelivr_theme" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   cdn_provider = "jsdelivr",
 *   id = "cdn_jsdelivr_theme",
 *   type = "select",
 *   title = @Translation("Theme"),
 *   description = @Translation("Choose the example Bootstrap Theme provided by Bootstrap or one of the Bootswatch themes."),
 *   defaultValue = "bootstrap",
 *   empty_option = @Translation("Bootstrap (default)"),
 *   empty_value = "bootstrap",
 *   groups = {
 *     "advanced" = @Translation("Advanced"),
 *     "cdn" = @Translation("CDN (Content Delivery Network)"),
 *     "jsdelivr" = false,
 *   },
 * )
 */
class CdnJsdelivrTheme extends CdnProvider {

  /**
   * {@inheritdoc}
   */
  public function alterFormElement(Element $form, FormStateInterface $form_state, $form_id = NULL) {
    $setting = $this->getSettingElement($form, $form_state);
    $themes = $this->provider->getThemes();
    $version = $form_state->getValue('cdn_jsdelivr_version', $this->theme->getSetting('cdn_jsdelivr_version'));

    $setting->setProperty('suffix', '<div id="bootstrap-lite-theme-preview"></div>');
    $setting->setProperty('description', t('Choose the example <a href=":bootstrap_lite_theme" target="_blank">Bootstrap Lite Theme</a> provided by Bootstrap or one of the many, many <a href=":bootswatch" target="_blank">Bootswatch</a> themes!', [
      ':bootswatch' => 'https://bootswatch.com',
      ':bootstrap_lite_theme' => 'http://getbootstrap.com/examples/theme/',
    ]));

    $options = [];
    if (isset($themes[$version])) {
      foreach ($themes[$version] as $theme => $data) {
        $options[$theme] = $data['title'];
      }
    }
    $setting->setProperty('options', $options);
  }

}
