<?php
namespace Drupal\cke_div\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
use Drupal\Core\Annotation\Translation;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "dialog" plugin.
 *
 * @CKEditorPlugin(
 *   id = "dialog",
 *   label = @Translation("CKEditor Dialog"),
 *   module = "ckeditor"
 * )
 */
class Dialog extends PluginBase implements CKEditorPluginInterface
{


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
    $plugin = drupal_get_path('module', 'cke_div') . '/js/plugins/dialog/plugin.js';
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
  
  public function getDependencies(Editor $editor) {
    //$dependencies = parent::getDependencies($editor);
    //$dependencies[] = 'dialog';
    return array('dialogui');
  }
  
}

