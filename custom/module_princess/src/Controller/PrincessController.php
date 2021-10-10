<?php

namespace Drupal\module_princess\Controller;


use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\module_princess\PrincessArticleService;

class PrincessController extends ControllerBase {
	
    private $ArticlePrincessS;

	public static function create(ContainerInterface $container) {
		return new static(
			$container->get('module_princess.princess_article')
		);
	}
	public function __construct(PrincessArticleService $ArticlePrincessS ){
        $this->ArticlePrincessS = $ArticlePrincessS;

    }
     public function princessList(){
		 

		kint($this->ArticlePrincessS->getPrincessArticles()); die();

		 $princess = [
		 
		  ['name' => 'Snow White'],
		  ['name' => 'Cinderella'],
		  ['name' => 'Aurora'],
		  ['name' => 'Ariel'],
		  ['name' => 'Belle'],
		  ['name' => 'Jasmine'],
		  ['name' => 'Pocahontas'],
		  ['name' => 'Mulan'],
		  ['name' => 'Tiana'],
		  ['name' => 'Rapunzel'],
		  ['name' => 'Merida'],
		  ['name' => 'Moana'],
		  ['name' => 'Raya']
        ];


     		 
     return [
	   '#theme' => 'princess_list',
	   '#items' => $princess,
       '#title' => $this -> t('Our princesses have arrived')
	 ];
}
}


?>