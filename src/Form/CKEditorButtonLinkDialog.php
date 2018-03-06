<?php

namespace Drupal\ckeditor_button_link\Form;

use Drupal\editor\Form\EditorLinkDialog;

/**
 * Provides a button link dialog for ckeditor.
 */
class CKEditorButtonLinkDialog extends EditorLinkDialog {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ckeditor_button_link_dialog';
  }

}
