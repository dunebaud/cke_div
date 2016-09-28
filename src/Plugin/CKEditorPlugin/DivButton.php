<?php

/**
 * @file
 * Definition of \Drupal\cke_div\Plugin\CKEditorPlugin\BtButton.
 */

namespace Drupal\cke_div\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Div Container Manager" plugin.
 *
 * @CKEditorPlugin(
 * id = "divbutton",
 * label = @Translation("Div Container Manager")
 * )
 */
class DivButton extends CKEditorPluginBase {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor)
  {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    $plugin= drupal_get_path('module', 'cke_div') . '/js/plugins/div/plugin.js';
    return $plugin;
  }

  /**
   * Implements
   * \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  public function getButtons() {
    return [
      'divbutton' => [
        'label' => t('Div Container Manager'), 
        'image' => drupal_get_path('module', 'cke_div') . '/js/plugins/div/icons/creatediv.png'
      ]
    ];
  }

  /**
   * Implements
   * \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return [];
  }
  
  /**
   * Implements
   * \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getDependencies().
   */
  public function getDependencies(Editor $editor) {
    return array('dialog');
  }
}