<?php
namespace Drupal\cke_div\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
use Drupal\Core\Annotation\Translation;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "dialogui" plugin.
 *
 * @CKEditorPlugin(
 *   id = "dialogui",
 *   label = @Translation("CKEditor Dialog UI"),
 *   module = "ckeditor"
 * )
 */
class DialogUI extends PluginBase implements CKEditorPluginInterface
{


  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor)
  {
    return array();
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor)
  {
    return array();
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal()
  {
    return false;
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile()
  {
    $plugin = drupal_get_path('module', 'cke_div') . '/js/plugins/dialogui/plugin.js';
    //$plugin = drupal_get_path('core') . '/assets/vendor/ckeditor/plugins/dialog/plugin.js';

    return $plugin;
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor)
  {
    return array();
  }
}

