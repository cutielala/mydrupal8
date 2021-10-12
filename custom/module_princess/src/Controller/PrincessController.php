<?php

namespace Drupal\module_princess\Controller;


use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\module_princess\PrincessArticleService;

use Drupal\Core\Config\ConfigFactory;

class PrincessController extends ControllerBase {
	
    private $ArticlePrincessS;
	protected $configFactory;

	public static function create(ContainerInterface $container) {
		return new static(
			$container->get('module_princess.princess_article'),
			$container->get('config.factory')
		);
	}
	public function __construct(PrincessArticleService $ArticlePrincessS , ConfigFactory $configFactory ){
        $this->ArticlePrincessS = $ArticlePrincessS;
		$this->configFactory = $configFactory;

    }
     public function princessList(){
		//kint($this->ArticlePrincessS->getPrincessArticles()); die();
		//kint($this->configFactory->get('module_princess.settings')->get('princess_list_title')); die();

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
     //  '#title' => $this -> t('Our princesses have arrived')

	 '#title' => $this->configFactory->get('module_princess.settings')->get('princess_list_title'),
	 ];
}
}


?>