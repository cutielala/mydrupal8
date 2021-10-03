<?php

namespace Drupal\module_princess\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Example Princess block' block.
 *
 * @Block(
 *   id = "moduel_princess_block",
 *   admin_label = @Translation("Example Princess block"),
 * )
 */
class PrincessBlock extends BlockBase {
  // Override BlockPluginInterface methods here.
   /**
    * {@inheritdoc}
    */
    public function build(){
         return [
             '#type'=>'markup',
             '#markup'=>$this->t('This is the output of our princess block '),
        ]; 
    }
}