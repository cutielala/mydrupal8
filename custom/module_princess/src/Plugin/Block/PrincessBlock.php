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
        $princess = [
		 
            ['name' => 'Snow White' , 'Film'=>'Snow White and the Seven Dwarfs '],
            ['name' => 'Cinderella', 'Film'=>' Cinderella'],
            ['name' => 'Aurora', 'Film'=>'Sleeping Beauty'],
            ['name' => 'Ariel', 'Film'=>'The Little Mermaid '],
            ['name' => 'Belle', 'Film'=>'Beauty and the Beast '],
            ['name' => 'Jasmine', 'Film'=>'Aladdin'],
            ['name' => 'Pocahontas', 'Film'=>'Pocahontas'],
            ['name' => 'Mulan', 'Film'=>'Mulan'],
            ['name' => 'Tiana', 'Film'=>'The Princess and the Frog '],
            ['name' => 'Rapunzel', 'Film'=>'Tangled '],
            ['name' => 'Merida', 'Film'=>'Brave'],
            ['name' => 'Moana', 'Film'=>'Moana '],
            ['name' => 'Raya', 'Film'=>'Raya']
          ];

        $table = [
            '#type' => 'table',
            '#header' =>[
                $this->t('Princess Name'),
                $this->t('Film Name'),
            ]
        ];


        foreach($princess as $p){
            $table[] = [
               'princess_n'=>[
                   '#type' => 'markup',
                   '#markup' => $p['name'],
               ],
               'film_n' => [
                   '#type' => 'markup',
                   '#markup' => $p['Film'],
               ],
            ];
        }
        return $table;

    }
}