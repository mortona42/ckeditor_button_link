<?php

namespace Drupal\ckeditor_button_link\Plugin\CKEditorPlugin;

use Drupal\ckeditor\Plugin\CKEditorPlugin\DrupalLink;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "buttonlink" plugin.
 *
 * @CKEditorPlugin(
 *   id = "buttonlink",
 *   label = @Translation("Button link"),
 *   module = "ckeditor_button_link"
 * )
 */
class ButtonLink extends DrupalLink {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'ckeditor_button_link') . '/js/plugins/buttonlink/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [
      'core/drupal.ajax',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [
      'buttonLink_dialogTitleAdd' => $this->t('Add Button Link'),
      'buttonLink_dialogTitleEdit' => $this->t('Edit Button Link'),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    $path = drupal_get_path('module', 'ckeditor_button_link') . '/js/plugins/buttonlink';
    return [
      'ButtonLink' => [
        'label' => $this->t('Button Link'),
        'image' => $path . '/icons/buttonlink.png',
      ],
      'ButtonUnlink' => [
        'label' => $this->t('Button Unlink'),
        'image' => $path . '/icons/buttonunlink.png',
      ],
    ];
  }

}
